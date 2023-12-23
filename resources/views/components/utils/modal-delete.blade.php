

<div id="confirmationModal" class="modal" >
  <div class="container " style="display: flex; justify-content:center; margin-top:10%;">
    <div class="modal-content shadow" style="width: 50% ; padding:3rem;  " >
        <span class="close text-white" onclick="hideDeleteConfirmation()">&times;</span>
      <center>
        <h1 class="text-danger mb-3">Yakin ingin menghapus data ini?</h1>
        <h6 class="text-danger mb-3">Data Yang Di Hapus Tidak Bisa Di Pulihkan !!</h6>
      </center>

      <div class="row">
        <div class="col-md-12 mb-3" style="gap: 3">
            <center >
                <form id="deleteForm" action="{{ $action }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                <button class="btn bg-primary text-dark" type="submit" style="height:3rem; width:6rem;"  >hapus</button>
                </form>

                <button class="btn text-dark" style="background-color: gray; height:3rem; width:6rem;" type="button" onclick="hideDeleteConfirmation()">batal</button>
            </center>
        </div>
      </div>
    </div>
  </div>
</div>


@push('style')
<style>
  #confirmationModal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
}

#confirmationModal.show {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}
</style>

@endpush






