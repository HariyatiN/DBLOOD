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
                     <table class="table table-bordered table-striped">
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
                                            <a href="#" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                <i class="fa fa-trash"></i>
                                            </a>
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