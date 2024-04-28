<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ url('/') }}" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2">PoulStore</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="{{ url('/') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>

    <!-- Penjadwalan -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Penjadwalan</span></li>
    <!-- Trip -->
    <li @class(['menu-item', 'active' => $selected_menu == 'trip'])>
      <a href="{{ url('/trip') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div>Trip</div>
      </a>
    </li>
    <!-- Aktifitas -->
    <li @class(['menu-item', 'active' => $selected_menu == 'activity'])>
      <a href="{{ url('/activity') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div>Aktifitas</div>
      </a>
    </li>

    <!-- Sumber Daya -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Sumber Daya</span></li>
    <!-- Karyawan -->
    <li @class([
      'menu-item', 
      'active' => $selected_menu == 'employee' || $selected_menu == 'salary',
      'open' => $selected_menu == 'employee' || $selected_menu == 'salary',
      ])">
      <a class="menu-link menu-toggle cursor-pointer">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Karyawan</div>
      </a>

      <ul class="menu-sub">
        <li @class(['menu-item', 'active' => $selected_menu == 'employee'])>
          <a href="{{ url('/employee') }}" class="menu-link">
            <div>Daftar Karyawan</div>
          </a>
        </li>
        <li @class(['menu-item', 'active' => $selected_menu == 'salary'])>
          <a href="{{ url('salary') }}" class="menu-link">
            <div>Gaji</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- Mobil -->
    <li @class(['menu-item', 'active' => $selected_menu == 'car'])>
      <a href="{{ url('/car') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div>Mobil</div>
      </a>
    </li>

    <!-- Mitra -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Mitra</span></li>
    <!-- Mitra -->
    <li @class(['menu-item', 'active' => $selected_menu == 'partner'])>
      <a href="{{ url('partner') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div>Mitra</div>
      </a>
    </li>

  </ul>
</aside>
