<!-- Delete Modal -->
<div class="modal fade" id="delpictureModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white">Yakin menghapus Foto Profil Akun ini?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Jika anda yakin ingin menghapus Foto Profil Akun ini, Tekan Oke!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('user.delpicture', $pengguna->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-primary">Oke</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Basic Modal-->
