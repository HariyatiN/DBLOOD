<x-app>

    <div class="row">
     <div class="col-md-12 p-5">
         <div class="card mt-5">
             <div class="card-header d-flex align-items-center justify-content-between">
                 <h2 class="card-title text-dark">Data Donor</h2>
                 <a href="{{ url('admin/donor/tambah') }}" class="btn btn-success">
                     Tambah Data
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
                                     <center>Pendonor Id</center>
                                 </th>
                                 <th>
                                     <center>Darah Id</center>
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
                                            <a href="##" class="btn btn-warning">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ url('admin/pendonor/edit', $x->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {{-- <a href="#" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}

                                            <x-button.delete id="{{ $x->id  }}"  />
                                        </div>
                                    </center>
                                </td>

                                <td>
                                    <center>{{ $x->pendonor_id }}</center>
                                </td>
                                <td>
                                    <center>{{ $x->darah_id }}</center>
                                </td>

                            </tr>

                            <x-utils.modal-delete action=" {{ url('admin/info', $x->id) }}" />
                     @endforeach

                      </tbody>

                     </table>
                 </div>
             </div>
         </div>
     </div>
    </div>
 </x-app>
