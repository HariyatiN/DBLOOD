<x-app>

    <div class="row">
        <div class="col-md-12 p-5">
            <form action="{{ url('admin/pendonor/edit', $list->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title text-dark">Form Update Pendonor</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input title="Nama lengkap" name="nama" value="{{$list->nama}}" type="text"
                                    placeholder="Masukan nama lengkap ..." />
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" id="" class="form-select form-control  @error('jk') is-invalid @enderror">
                                        <option value="">--- Pilih ---</option>
                                        <option value="Laki-laki" @if ($list->jk == 'Laki-laki') selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if ($list->jk == 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                    @error('jk')
                                    <span class="float-right text-danger">{{ $message }}</span> 
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <x-input.input title="No.Telepon / Hp" name="tlp" value="{{ $list->tlp }}" type="text"
                                    placeholder="Masukan no.tlp/hp ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input title="Alamat" name="alamat" value="{{ $list->alamat }}" type="text"
                                    placeholder="Masukan alamat lengkap ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input title="Golongan Darah" name="gol_darah" value="{{ $list->gol_darah }}" type="text"
                                    placeholder="Masukan golongan darah ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input title="Kode Pendonor" name="kode_p" value="{{ $list->kode_p }}" type="number"
                                    placeholder="Masukan Kode Pendonor ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input title="Password" name="password" type="password"
                                    placeholder="Masukan password ..." />
                            </div>
                           
                            <div class="col-md-4">
                                <x-input.input title="Foto / Gambar" name="foto" type="file"
                                    placeholder="Masukan password ..." />
                            </div>
                            <div class="col-md-12">
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
