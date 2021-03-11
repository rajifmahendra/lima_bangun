<div class="header-transporent-bg-black main-bg-color">
  <header id="nav" class="header header-1 black-header">
    <div class="header-wrapper">
      <div class="container-m-30 clearfix">
        <div class="logo-row">
          <div class="logo-container-2">
            <div class="logo-2">
              <a href="index.html" class="clearfix">
                <img src="{{ asset('images/logo.png') }}" class="logo-img" alt="Logo">
              </a>
            </div>
          </div> 
          <div class="menu-btn-respons-container">
            <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
              <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="main-menu-container">
        <div class="container-m-30 clearfix">
          <div id="main-menu">
            <div class="navbar navbar-default" role="navigation">
              <nav class="collapse collapsing navbar-collapse nav-center">
                <ul class="nav navbar-nav">
                  <li class="parent @yield('home')">
                    <a href="/"><div class="main-menu-title">HOME</div></a>
                  </li>
                  <li class="parent @yield('about')">
                    <a href="javascript:;"><div class="main-menu-title">ABOUT</div></a>
                    <ul class="sub">
                      <li><a href="{{ url('about#izin') }}">IZIN PERUSAHAAN</a></li>
                      <li><a href="{{ url('about#visi-misi') }}">VISI & MISI</a></li>
                      <li><a href="{{ url('about#klien') }}">KLIEN</a></li>
                    </ul>
                  </li>
                  <li class="parent @yield('product')">
                    <a href="{{ url('product') }}"><div class="main-menu-title">PRODUCT</div></a>
                  </li>
                  <li class="parent @yield('price-list')">
                    <a href="{{ url('price-list') }}"><div class="main-menu-title">PRICE LIST</div></a>
                  </li>
                  <li class="parent @yield('gallery')">
                    <a href="{{ url('gallery') }}"><div class="main-menu-title">GALLERY</div></a>
                  </li>
                  <li id="menu-contact-info-big" class="parent @yield('contact')">
                    <a href="{{ url('contact') }}"><div class="main-menu-title">CONTACT</div></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  @yield('page-title')
</div>