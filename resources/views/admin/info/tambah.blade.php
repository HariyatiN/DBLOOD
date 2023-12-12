<x-app>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('admin/info') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title text-dark">Form Tambah Info</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <x-input.input title="Judul" name="judul" type="text"
                                    placeholder="Masukan judul..." />
                                    @error('judul')
                                    <span class="float-right text-danger">{{ $message }}</span> 
                                @enderror
                                </div>

                            </div>
                                <div class="col-md-6">
                                    <x-input.input title="Thumbnail" name="thumbnail" type="file"
                                        placeholder="Masukan password ..." />
                                </div>


                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control"></textarea>
                                </div>
                              </div>




                            <div class="col-md-12">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ url('admin/info') }}" class="btn btn-warning">BATAL</a>
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
