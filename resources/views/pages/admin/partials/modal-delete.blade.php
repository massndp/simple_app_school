<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalDeleteLabel">Konfirmasi hapus data user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        Apakah anda yakin untuk menghapus data user?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <form method="POST" id="formDeleteModal">
            @method('DELETE')
            @csrf
        <button type="submit" class="btn btn-danger">Ya, hapus</button>
        </form>
        </div>
    </div>
    </div>
</div>