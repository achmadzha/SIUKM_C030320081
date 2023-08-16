  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
      <img src="{{ asset('adminlte/img/logo_poliban.png') }}" alt="POLIBAN Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin POLIBAN</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('mahasiswa') }}" class="nav-link">
                  <!-- <i class="nav-icon fas fa-book"></i> -->
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('ukm') }}" class="nav-link">
                  <!-- <i class="nav-icon fas fa-book"></i> -->
                  <p>Data Unit Kegiatan Mahasiswa</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{ url('pendaftaran_anggota') }}" class="nav-link">
                  <p>Data Pendaftaran Anggota</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ url('anggota_ukm') }}" class="nav-link">
                  <!-- <i class="nav-icon fas fa-book"></i> -->
                  <p>Data Anggota UKM</p>
                </a>
              </li>
              
            </ul>
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>