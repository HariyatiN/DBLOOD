<x-app>

    <div class="row">
        <div class="col-md-12 p-5">
            <form action="{{ url('admin/pendonor/tambah') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title text-dark">Form Tambah Pendonor</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <x-input.input title="Nama lengkap" name="nama" type="text"
                                    placeholder="Masukan nama lengkap ..." />
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" id="" class="form-select form-control  @error('jk') is-invalid @enderror">
                                        <option value="">--- Pilih ---</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jk')
                                    <span class="float-right text-danger">{{ $message }}</span> 
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="No.Telepon / Hp" name="tlp" type="number"
                                    placeholder="Masukan no.tlp/hp ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="Alamat" name="alamat" type="text"
                                    placeholder="Masukan alamat lengkap ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="Golongan Darah" name="gol_darah" type="text"
                                    placeholder="Masukan golongan darah ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="Kode Pendonor" name="kode_p" type="number"
                                    placeholder="Masukan Kode Pendonor ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="Password" name="password" type="password"
                                    placeholder="Masukan password ..." />
                            </div>
                           
                            <div class="col-md-6">
                                <x-input.input title="Foto / Gambar" name="foto" type="file"
                                    placeholder="Masukan password ..." />
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ url('admin/pendonor') }}" class="btn btn-warning">BATAL</a>
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
