<div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="editForm" action="{{route('userEdit')}}" method="post">
            <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" class="form-control" id="id">
                    <div class="form-group">
                        <label for="student-id" class="col-form-label">Student ID</label>
                        <input type="text" name="student_id" class="form-control" id="student-id">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="BloodGroupEdit" class="col-form-label">Blood Group</label>
                        <select name="blood_group" id="BloodGroupEdit" class="form-control">
                            <option class="dropdown-item" type="button" value="0">Select Blood Group</option>
                            <option class="dropdown-item" type="button" value="AB+">AB+</option>
                            <option class="dropdown-item" type="button" value="AB-">AB-</option>
                            <option class="dropdown-item" type="button" value="A+">A+</option>
                            <option class="dropdown-item" type="button" value="A-">A-</option>
                            <option class="dropdown-item" type="button" value="B+">B+</option>
                            <option class="dropdown-item" type="button" value="B-">B-</option>
                            <option class="dropdown-item" type="button" value="O+">O+</option>
                            <option class="dropdown-item" type="button" value="O-">O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="committee" class="col-form-label">Committee Session</label>
                        <select name="committee_session" id="CommitteeSessionEdit" class="form-control">
                            <option class="dropdown-item" type="button" value="0">Committee Session</option>
                            <option class="dropdown-item" type="button" value="1998-2002">1998-2002</option>
                            <option class="dropdown-item" type="button" value="2002-2003">2002-2003</option>
                            <option class="dropdown-item" type="button" value="2003-2005">2003-2005</option>
                            <option class="dropdown-item" type="button" value="2005-2007">2005-2007</option>
                            <option class="dropdown-item" type="button" value="2007-2009">2007-2009</option>
                            <option class="dropdown-item" type="button" value="2009-2010">2009-2010</option>
                            <option class="dropdown-item" type="button" value="2010-2011">2010-2011</option>
                            <option class="dropdown-item" type="button" value="2011-2012">2011-2012</option>
                            <option class="dropdown-item" type="button" value="2012-2013">2012-2013</option>
                            <option class="dropdown-item" type="button" value="2013-2014">2013-2014</option>
                            <option class="dropdown-item" type="button" value="2014-2015">2014-2015</option>
                            <option class="dropdown-item" type="button" value="2015-2016">2015-2016</option>
                            <option class="dropdown-item" type="button" value="2016-2017">2016-2017</option>
                            <option class="dropdown-item" type="button" value="2017-2018">2017-2018</option>
                            <option class="dropdown-item" type="button" value="2018-2019">2018-2019</option>
                            <option class="dropdown-item" type="button" value="2019-2020">2019-2020</option>
                            <option class="dropdown-item" type="button" value="2020-2021">2020-2021</option>
                            <option class="dropdown-item" type="button" value="2021-2022">2021-2022</option>
                            <option class="dropdown-item" type="button" value="2022-2023">2022-2023</option>
                            <option class="dropdown-item" type="button" value="2023-2024">2023-2024</option>
                            <option class="dropdown-item" type="button" value="2024-2025">2024-2025</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address</label>
                        <textarea class="form-control" name="address" id="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Regtype" class="col-form-label">Registration Type</label>
                        <select name="reg_type" id="Regtype" class="form-control">
                            <option class="dropdown-item" type="button" value="0">Select Registration Type</option>
                            <option class="dropdown-item" type="button" value="1">Executive Member</option>
                            <option class="dropdown-item" type="button" value="2">Committee Member</option>
                            <option class="dropdown-item" type="button" value="3">Alumni</option>
                        </select>
                    </div>

            </div>
            {{--@endif--}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
