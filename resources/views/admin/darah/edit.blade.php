<x-app>

    <div class="row">
        <div class="col-md-12 p-5">
            <form action="{{ url('admin/darah/edit', $list->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title text-dark">Form Tambah Stok</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        
                          

                            <div class="col-md-6">
                                <x-input.input title="A+" name="A+" value="{{$list->A}}"
                                 type="number"
                                    placeholder="Masukan jumlah stok ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="B+" name="B+" value="{{$list->B}}"
                                type="number" 
                                    placeholder="Masukan jumlah stok ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="O+" name="O+" value="{{$list->O}}"
                                type="number" 
                                    placeholder="Masukan jumlah stok ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="AB+" name="AB+" value="{{$list->AB}}"
                                type="number"
                                    placeholder="Masukan jumlah stok ..." />
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
