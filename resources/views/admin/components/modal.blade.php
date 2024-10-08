<!-- Modal -->
<div class="modal fade" id="{{$identifier}}" tabindex="-1" aria-labelledby="{{$identifier}}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered project-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$modalTitle}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- <img src="../assets/img/close-icon.png" alt=""> -->
                </button>
            </div>
            <form action="" id="{{$formId}}" method="POST">
                {{csrf_field()}}
            <div class="modal-body">
                {{$modalBody}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-save">{{$submitBtnTitle ?: "Save"}} </button>
            </div>
            </form>
        </div>
    </div>
</div>