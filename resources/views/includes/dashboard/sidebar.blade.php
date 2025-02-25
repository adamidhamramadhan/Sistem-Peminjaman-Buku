<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  @if (Auth::user()->role_id == 2 )
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-person"></i>
        <span>Pendaftaran</span>
      </a>
    </li><!-- End Profile Page Nav -->
  @endif

  @if (Auth::user()->role_id == 1 )
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Data Pendaftaran Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data Pendaftar</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Tidak Lolos Berkas</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Lolos Berkas</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="bi bi-journal"></i>
        <span>Laporan</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="ri-account-pin-circle-line"></i>
        <span>Manajemen Users</span>
      </a>
    </li><!-- End Dashboard Nav -->
  @endif
</ul>

</aside><!-- End Sidebar-->