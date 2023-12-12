<x-app>
    <div class="card">
     <div class="card-header">
         <div class="card-title text-dark">Detail Stok Darah</div>
         {{-- <a href="{{ url('admin/produk',$produk->id) }}/edit" class="btn btn-warning float-right">
             <i class="fas fa-edit"></i>
             Edit
         </a> --}}
     </div>
     <div class="card-body">
         <div class="row">
             <div class="col-md-6">
                 <dl>
                     <dt>Golongan Darah</dt>
                     <dd>{{$darah->jenis_gol}}</dd>
                     <dt>Stok Darah</dt>
                     <dd>{{$darah->stok_darah}}</dd>
                 </dl>
                 
             </div>
             {{-- <div class="col-md-6">
                 <img src="{{$info->foto}}" alt="" style="width:100% ">
             </div> --}}
         </div>
     </div>
    </div>
  </x-app>