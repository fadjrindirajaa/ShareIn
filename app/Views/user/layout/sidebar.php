<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/beranda" style="text-decoration:none" class="brand-link">
      <img src="<?= base_url('assets/img/Logo-Tangan2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">ShareIn</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>
          <li class="nav-item menu-open">
            <a href="/beranda" class="nav-link <?php if($title === "Beranda") echo "active"?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barangada" class="nav-link <?php if($title === "Barang Tersedia") echo "active"?>">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Barang Tersedia
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barangbutuh" class="nav-link <?php if($title === "Barang Dibutuhkan") echo "active"?>">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Barang Dibutuhkan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link <?php if($title === "Tentang Kami") echo "active"?>">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Tentang Kami
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>