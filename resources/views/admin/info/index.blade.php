<x-app>

    <div class="row mb-5">
     <div class="col-md-12 p-5">
         <div class="card mt-5">
             <div class="card-header d-flex align-items-center justify-content-between">
                 <h2 class="card-title text-dark">Info</h2>
                 <a href="{{ url('admin/info/tambah') }}" class="btn btn-success">
                     Tambah Data
                 </a>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table able-bordered table-striped" id="table">
                         <thead >
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
                                     <center>Judul</center>
                                 </th>
                                 <th>
                                     <center>Thumbnail</center>
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
                                            <a href="{{ url('admin/info/detail', $x->id) }}" class="btn btn-warning">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ url('admin/info/edit', $x->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation('{{ url('admin/info') }}/{{ $x->id }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </div>
                                    </center>
                                </td>
                                 <td>
                                     <center>

                                         <span style="display: inline-block;margin-left: 12px !important">  {{ $x->judul }}</span>
                                     </center>
                                 </td>
                                 <td>
                                    <center>
                                        <img src="{{ url('public') }}/{{ $x->thumbnail }}" alt="" style="width: 35px;height:35px;border-radius:100%;maring-right: 12px !important">
                                    </center>
                                 </td>
                                 <x-utils.modal-delete action=" {{ url('admin/info', $x->id) }}" />
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
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
