<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-secondary navbar-dark">
      <a href="index.html" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i img="logo darah.png"></i>DBLOOD</h3>
      </a>
      <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
              <img class="rounded-circle" src="{{ url('public/darkpan-1.0.0') }}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
              <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3 ">
              <h6 class="mb-0 " style="color: black !importand">Jhon Doe</h6>
              <span>Admin</span>
          </div>
      </div>
      <div class="navbar-nav w-100">
          
          <x-layout.sidebar.menu-item url="admin/dashboard" label="Dashboard" icon="fa fa-tachometer-alt me-2"  />
          <x-layout.sidebar.menu-item url="admin/pendonor" label="Pendonor" icon="fa fa-users"  />
          <x-layout.sidebar.menu-item url="admin/darah" label="Darah" icon="fa fa-tint"  />
          <x-layout.sidebar.menu-item url="admin/info" label="Info" icon="fa fa-info-circle"  />
         <x-layout.sidebar.menu-item url="admin/donor" label="Donor" icon="fas fa-hand-holding-heart"  />

     


  
          </div>
      </div>
  </nav>
</div>