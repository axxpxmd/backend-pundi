<div class="modal fade" id="confirmation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    Yakin ingin menghapus data ini ?
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-dark" data-dismiss="modal">
                    <i class="fa fa-times mr-2"></i><span class="fs-14">Cancel</span>
                </button>
                <button type="button" class="btn btn-danger">
                    <a class="text-white text-decoration-none fs-14" href="{{ route('master-artikel.delete', 'artikel='.$i->id) }}">
                        <i class="fa fa-trash mr-2"></i>Hapus
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>