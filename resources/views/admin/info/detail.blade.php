<x-app>
  <div class="card">
   <div class="card-header">
       <div class="card-title text-dark">Detail Info</div>
       {{-- <a href="{{ url('admin/produk',$produk->id) }}/edit" class="btn btn-warning float-right">
           <i class="fas fa-edit"></i>
           Edit
       </a> --}}
   </div>
   <div class="card-body">
       <div class="row">
           <div class="col-md-6">
               <dl>
                   <dt>Judul</dt>
                   <dd>{{$info->judul}}</dd>
                   <dt>Thumbnail</dt>
                   <img src="{{ asset('public/app/info/' . basename($info->thumbnail)) }}" alt="Thumbnail" style="width: 100%">
                   <dt>Deskripsi</dt>
                   <dd>{!! nl2br($info->deskripsi) !!}</dd>
               </dl>
               
           </div>
           {{-- <div class="col-md-6">
               <img src="{{$info->foto}}" alt="" style="width:100% ">
           </div> --}}
       </div>
   </div>
  </div>
</x-app>