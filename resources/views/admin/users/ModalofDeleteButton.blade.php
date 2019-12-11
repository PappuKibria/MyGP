<!-- Modal of Delete Button Starts Here-->

<div id="modalDel" class="modal fade" data-backdrop="static" style="overflow-y: auto;">
    <div class="modal-dialog modal-confirm ">
        <div class="modal-content" style="width: 380px; background-color: #dfecec; min-width:18vw;">
            <div class="modal-header">
                <div class="icon-box">
                    {{--<i class="material-icons">&#xE5CD;</i>--}}
                </div>
                <button type="button" class="close p-2" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <h5><span id="numberDeleteItems"></span> Are you confirm to delete the Alunmi Data? </h5>
            </div>
            <div class="modal-footer" style="justify-content: center; padding: 12px 15px 15px;">
                <button type="button" id="delButton" onclick="delUserdata({{$user->id}})" class="btn btn-success w_110" data-dismiss="modal" ><i style="text-align: center; margin-right: 5px;" class=" fas fa-minus-circle"></i>Yes</button>
                <button type="button" class="btn btn-danger w_110" data-dismiss="modal"><i style="  margin-right: 5px;" class="fas fa-times"></i>No</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal of Delete Button Ends Here-->
