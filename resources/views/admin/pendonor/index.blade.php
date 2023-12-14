<x-app>

   <div class="row">
    <div class="col-md-12 p-5">
        <div class="card mt-3">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h2 class="card-title text-dark">Data Pendonor</h2>
                <a href="{{ url('admin/pendonor/tambah') }}" class="btn btn-success">
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
                                    <center>Jenis Kelamin</center>
                                </th>
                                <th>
                                    <center>Telepon</center>
                                </th>
                                <th>
                                    <center>Alamat</center>
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
                                            <a href="{{ url('admin/pendonor/edit', $x->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                            {{-- <x-button.delete id="{{ $pendonor->id }}"  /> --}}

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
                                    <center>{{ $x->jk }}</center>
                                </td>
                                <td>
                                    <center>{{ $x->tlp }}</center>
                                </td>
                                <td>
                                    <center>{{ $x->alamat }}</center>
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