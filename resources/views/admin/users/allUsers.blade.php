@extends('admin.home')

@section('mainAdmin')
<div class="container">
    @include('admin.users.userEditModal')

    <?php $count = 1; ?>
    @foreach($users as $user)
    <div style="overflow-x:auto;">
    <table class="table table-responsive">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student ID</th>
            <th scope="col">Name</th>
            <th scope="col">Committee Session</th>
            <th scope="col">Phone</th>
            <th scope="col">Blood_group</th>
            <th scope="col">Email Address</th>
            <th scope="col">Address</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$user->student_id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->committee_session}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->blood_group}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->address}}</td>
            <td><img height="100" width="100"  src="{{asset('public/alumni/'.$user->photo)}}"></td>
            <td>
                <button type="button" onclick='editAlumniData("{{$user->id}}","edit")' class="btn btn-primary" id="edit" value="{{$user->id}}">Edit</button>
                {{--<button class="btn btn-primary" id="edit" value="{{$user->id}}" href="javascript:void(0)">Edit</button>--}}
                <button id="button_delete" class="btn btn-danger" role="button" onclick="checkforDelete({{$user->id}})">
                    <i style=" margin-right: 5px;" class="fas fa-minus-circle"></i>Delete
                </button>

                @if($user->is_active==0)
                    <button id="button_active" onclick="makeActive({{$user->id}})" class="btn btn-danger" role="button">
                        <i style=" margin-right: 5px;" class="fas fa-minus-circle"></i>Disabled
                    </button>
                @else
                    <button id="button_deactive" onclick="makeDeactive({{$user->id}})" class="btn btn-success" role="button">
                        <i style=" margin-right: 5px;" class="fas fa-minus-circle"></i>Enabled
                    </button>
                @endif
            </td>
        </tr>
        <?php $count++; ?>

        </tbody>
    </table>
    </div>
    @include('admin.users.ModalofDeleteButton')
    @endforeach

</div>
@endsection

<script>
    function editAlumniData(id, url) {
        $.ajax({
            type: 'GET',
            url: url + '/' + id,
            success: function (result) {
                console.log(result);
                $("input[name='student_id']").val(result.student_id);
                $("input[name='name']").val(result.name);
                $("input[name='email']").val(result.email);
                $("input[name='phone']").val(result.phone);
                $("input[name='blood_group']").val(result.blood_group);
                $("input[name='id']").val(id);
                $("input[name='address']").val(result.address);
                $("input[name='reg_type']").val(result.reg_type);
                $('#CommitteeSessionEdit option[value="'+result.committee_session+'"]').prop('selected', true);
                $('#BloodGroupEdit option[value="'+result.blood_group+'"]').prop('selected', true);
                $("#address").html(result.address);
                $('#editModal').modal('show');
            }
        });
    }
    function makeActive(id) {
        $.ajax({
            type: 'GET',
            url: 'activate',
            data: {id: id},
            success: function (result) {
                if(result == 'done'){
                    window.location.reload();
                    $('#modalActive').modal('show');
                }
            }
        });
    }

    function makeDeactive(id) {
        $.ajax({
            type: 'GET',
            url: 'deactivate',
            data: {id: id},
            success: function (result) {
                if(result == 'done'){
                    window.location.reload();
                    $('#modalDeactive').modal('show');
                }
            }
        });
    }
</script>
