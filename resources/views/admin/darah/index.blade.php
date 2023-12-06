<x-app>
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card mt-5">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2 class="card-title">Stok Darah</h2>
                    <a href="{{ url('admin/darah/tambah') }}" class="btn btn-success">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <center>
                                            Action
                                        </center>
                                    </th>
                                    <th>
                                        <center>
                                           No. 
                                        </center>
                                    </th>
                                    <th>
                                        <center>Golongan Darah</center>
                                    </th>
                                    <th>
                                        <center>Jumlah Stok Darah</center>
                                    </th>
                       
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $x)
                                <tr>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-warning">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ url('admin/darah/edit', $x->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </center>
                                    </td>
                                    <td>
                                        <center>{{ $loop->iteration }}</center>
                                    </td>
                                    <td>
                                        <center>
                                         
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->jenis_gol }}</span>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                         
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->stok_darah }}</span>
                                        </center>
                                       
                                    </td>
                             
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       </div>
</x-app>