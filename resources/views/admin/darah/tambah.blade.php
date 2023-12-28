<x-app>

    <div class="row">
        <div class="col-md-12 p-5">
            <form action="{{ url('admin/darah/tambah') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title text-dark">Form Tambah Produk</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Produk</label>
                                    <select name="produk" id="" class="form-select form-control  @error('produk') is-invalid @enderror">
                                        <option value="">--- Pilih ---</option>
                                        <option value="WB">WB</option>
                                        <option value="TC">TC</option>
                                        <option value="PRC">PRC</option>
                                    </select>
                                    @error('produk')
                                    <span class="float-right text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>






                            <div class="col-md-12 mt-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ url('admin/darah') }}" class="btn btn-warning">BATAL</a>
                                    <button type="submit" class="btn btn-primary mx-2">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
