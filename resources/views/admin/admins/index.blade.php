<x-app>
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card mt-3">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2 class="card-title text-dark">Data Admin</h2>
                    <a href="{{ url('admin/admins/tambah') }}" class="btn btn-success">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                   
                        <table class="table table-striped table-responsive" id="table">
                            <thead >
                                <tr>
                                    <th>
                                        <center>No.</center>
                                    </th>
                                    <th>
                                        <center>
                                           Action
                                        </center>
                                    </th>
                                    <th>
                                        <center>Foto</center>
                                    </th>
                                    <th>
                                        <center>Nama</center>
                                    </th>
                                    <th>
                                        <center>Email</center>
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
                                                <a href="#" class="btn btn-warning">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ url('admin/admin/edit', $x->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <x-button.delete id="{{ $x->id }}"   />
    
                                            </div>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <img src="{{ url('public') }}/{{ $x->foto }}" alt="" style="width: 35px;height:35px;border-radius:100%;maring-right: 12px !important">
                                        </center>
                                    </td>
                                    <td>
    
                                        <center>
                                          
                                            <span style="display: inline-block;margin-left: 12px !important">  {{ $x->nama }}</span>
                                        </center>
                                    </td>
                                    <td>
                                        <center>{{ $x->email }}</center>
                                    </td>
                                    
                                </tr>
                         @endforeach
                            </tbody>
                        </table>
                  
                </div>
            </div>
        </div>
       </div>
       @push('style')
       <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    @endpush
    
    @push('script')
      <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
      <script>
           const table = new DataTable('#table')
      </script>
    @endpush
</x-app>