
    <x-app>
        <div class="card m-5">
         <div class="card-header">
             <div class="card-title text-dark">Detail Admin</div>

         </div>
         <div class="card-body">
             <div class="row">
                 <div class="col-md-6">
                     <dl>
                         <dt>Nama</dt>
                         <dd>{{$admin->nama}}</dd>
                         <dt>Email</dt>
                         <dd>{{ $admin->email }}</dd>
                     </dl>

                 </div>
                 <div class="col-md-6">
                  <dt>Foto</dt>
                  <img src="{{ url('public') }}/{{ $admin->foto }}" alt="" style="width:70%">
                 </div>
             </div>
         </div>
        </div>
      </x-app>

