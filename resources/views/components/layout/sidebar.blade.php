<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-secondary navbar-dark">
      <a href="index.html" class="navbar-brand mx-4 mb-3 " style="display: flex !importand; width:110rem !importand; display:flex; object-fit: contain !important; justify-content:space-around">
        <img src="{{ url('public/logo_darah.png') }}" alt=""  style="width: 40px; height: 40px;  !important; margin-right:10px; margin-top:-2px !important;" >
      
          <h3 class="text-primary"><i img="logo darah.png"></i>DBLOOD</h3>
      </a>
      <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
              <img class="rounded-circle" src="{{ url('public/darkpan-1.0.0') }}/img/kucing.jpeg" alt="" style="width: 40px; height: 40px; bject-fit: contain !important;">
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
         {{-- <x-layout.sidebar.menu-item url="admin/donor" label="Donor" icon="fas fa-hand-holding-heart"  /> --}}
         <x-layout.sidebar.menu-item url="admin/admin" label="Admin" icon="fas  fa-user"  />

     


  
          </div>
      </div>
  </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    // Get the current URL path
    var path = window.location.pathname.split("/").pop();

    // Check each sidebar link and add the "active" class if the href matches the current path
    $(".navbar-nav a").each(function() {
      var href = $(this).attr("href").split("/").pop();
      if (href === path) {
        $(this).addClass("active");
      }
    });
  });
</script>