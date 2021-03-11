@extends('layouts.index')
@section('product', 'current')
@section('page-title')
<div class="sm-img-bg-fullscr parallax-section" style="background-image: url(images/static-media/arc.jpg)" data-stellar-background-ratio="0.5">
  <div class="container sm-content-cont text-center js-height-fullscr">
    <div class="sm-cont-middle">
      <div class="opacity-scroll2">
        <div class="font-white light-72-wide sm-mb-15 sm-mt-20" >
          PT. LIMA <span class="bold">BANGUN PERSADA</span>
        </div>
        <div class="font-white norm-16-wide hide-0-736 sm-mb-50">
            KONSTRUKSI GEDUNG<span class="slash-divider-10">/</span>JARINGAN IRIGASI<span class="slash-divider-10">/</span>KOMUNIKASI<span class="slash-divider-10">/</span>LIMBAH<span class="slash-divider-10">/</span>BANGUNAN SIPIL DAN LAINNYA
        </div>
      </div>
    </div>
  </div>
  <div class="local-scroll-cont font-white">
    <a href="#about" class="scroll-down smooth-scroll">
      <div class="icon icon-arrows-down"></div>
    </a>  
  </div>
</div>
@endsection
@section('content')
<div class="main-bg-color plr-30 plr-0-767 clearfix">
  <div class="white-bg plr-30 pt-50 pb-20">
    <div class="relative mb-50">
      <h2 class="section-title main-text-color bold">PRODUCT KAMI</h2>
    </div>
    <div class="relative">
      <ul class="port-grid port-grid-gut clearfix" id="items-grid">
        <li class="port-item mix development">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay"><img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" ></div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">MINIMALISM BOOKS</a></h3>
              <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix design">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">CALENDAR</a></h3>
              <span><a href="#">photography</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">EYES OF THE CAR</a></h3>
              <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix development">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">NOW IS NOW</a></h3>
              <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix development">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">NOW IS NOW</a></h3>
              <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix development">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">NOW IS NOW</a></h3>
              <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix design">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">EYES OF THE CAR</a></h3>
              <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography">
          <a href="{{ url('product-detail/1') }}">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="{{ url('product-detail/1') }}">EYES OF THE CAR</a></h3>
              <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-box.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
              <a href="{{ url('product-detail/1') }}"><div aria-hidden="true" class="icon_link"></div></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection