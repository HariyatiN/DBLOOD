<x-app>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user fa-3x text-primary"></i>

                <div class="ms-3">
                    <p class="mb-2">Total Admin</p>
                    <h6 class="mb-0 text-dark">{{ $totalAdmins }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-primary"></i>

                <div class="ms-3">

                    <p class="mb-2">Total Pendonor</p>
                    <h6 class="mb-0 text-dark">{{ $totalPendonor }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-tint fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Produk Darah</p>
                    <h6 class="mb-0 text-dark">{{ $totalDarah }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-info-circle fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Info</p> 
                    <h6 class="mb-0 text-dark">{{ $totalInfo }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        @foreach ($totalStock as $item)
            <div class="col-sm-12 col-xl-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="mb-0 text-dark">{{ $item['product']->produk }}</h3>
                        <a href="{{ url('/admin/darah') }}">Details</a>
                    </div>
                    
                    <p>Total Stok Darah </p>
                    <h6 class="mb-0 text-dark">{{ $item['total'] }}</h6>
                </div>
            </div>
        @endforeach
    </div>
</div>


</x-app>
