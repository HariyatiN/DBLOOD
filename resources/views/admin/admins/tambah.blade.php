<x-app>

    <div class="row">
        <div class="col-md-12 p-5">
            <form action="{{ url('admin/admins/tambah') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title text-dark">Form Tambah Admin</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <x-input.input title="Nama lengkap" name="nama" type="text"
                                    placeholder="Masukan nama lengkap ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="Email" name="email" type="email"
                                    placeholder="Masukan Email ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input title="Password" name="password" type="password"
                                    placeholder="Masukan password ..." />
                            </div>
                           
                            <div class="col-md-6">
                                <x-input.input title="Foto/Gambar" name="foto" type="file"
                                    placeholder="Masukan password ..." />
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ url('admin/admin') }}" class="btn btn-warning">BATAL</a>
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
