<x-app>
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card mt-5">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2 class="card-title text-dark">Stok Darah</h2>
                    <a href="{{ url('admin/darah/tambah') }}" class="btn btn-success">
                        Tambah Produk
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        <center>
                                            No.
                                        </center>
                                    </th>
                                    <th>
                                        <center>
                                            Action
                                        </center>
                                    </th>
                                    <th>
                                        <center>Produk</center>
                                    </th>
                                    <th>
                                        <center>A+</center>
                                    </th>
                                    <th>
                                        <center>B+</center>
                                    </th>
                                    <th>
                                        <center>O+</center>
                                    </th>
                                    <th>
                                        <center>AB+</center>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $x)
                                <tr>

                                    <td>
                                        <center>{{ $loop->iteration }}</center>
                                    </td>
                                     <td>
                                        <center>
                                            <div class="btn-group">

                                                <a href="{{ url('admin/darah/edit', $x->id) }}" class="btn btn-secondary">
                                                    Ubah Stok
                                                </a>

                                            </div>
                                        </center>
                                    </td>
                                    <td>
                                        <center>

                                            <span style="display: inline-block;margin-left: 12px !important"> {{ $x->produk->produk}}</span>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->A }}</span>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->B }}</span>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->O }}</span>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->AB }}</span>
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
