<x-app>
    <div class="card m-5">
     <div class="card-header">
         <div class="card-title">Detail Data Pendonor</div>
         {{-- <a href="{{ url('admin/produk',$produk->id) }}/edit" class="btn btn-warning float-right">
             <i class="fas fa-edit"></i>
             Edit
         </a> --}}
     </div>
     <div class="card-body">
         <div class="row">
             <div class="col-md-6">
                 <dl>
                     <dt>Nama</dt>
                     <dd>{{$pendonor->nama}}</dd>
                     <dt>Kode Pendonor</dt>
                     <dd>{{$pendonor->kode_p}}</dd>
                     <dt>Jenis Kelamin</dt>
                     <dd>{{$pendonor->jk}}</dd>
                     <dt>Telepon</dt>
                     <dd>{{$pendonor->tlp}}</dd>
                     <dt>Alamat</dt>
                     <dd>{{$pendonor->alamat}}</dd>
                     <dt>Golongan Darah</dt>
                     <dd>{{$pendonor->gol_darah}}</dd>
        
                 </dl>
                 
             </div>
             <div class="col-md-6">
                 <dt>Foto</dt>
                <img src="{{ asset('public/app/pendonor/' . basename($pendonor->foto)) }}" alt="Foto" style="width: 60%">
             </div> 
         </div>
     </div>
    </div>
  </x-app>