@extends('layouts.index')
@section('gallery', 'current')
@section('page-title')
<div class="page-title-cont page-title-small main-bg-color">
  <div class="relative container align-left">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-title" style="color: #fff">GALLERY</h1>
      </div>
      <div class="col-md-4">
        <div class="breadcrumbs">
          <a href="/" style="color: #fff">Home</a><span class="slash-divider" style="color: #fff">/</span><span class="bread-current" style="color: #fff">GALLERY</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
<div class="main-bg-color plr-30 plr-0-767 clearfix">
  <div class="white-bg plr-30 pt-50 pb-30">
    <div class="relative">        
      <div class="port-filter text-center text-left-767">
        <a href="#" class="filter active" data-filter="*">All Projects</a>
        <a href="#" class="filter" data-filter=".development">Development</a>
        <a href="#" class="filter" data-filter=".design">Design</a>
        <a href="#" class="filter" data-filter=".photography">Photography</a>
      </div>
      <ul class="port-grid port-grid-5 masonry clearfix" id="items-grid">
        <li class="port-item mix design lightbox" href="{{ asset('template/html/images/portfolio/projects-2-big.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-2-big.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">CALENDAR</a></h3>
              <span><a href="javascript;">photography</a><span class="slash-divider">/</span><a href="javascript:;">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-2-big.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography lightbox" href="{{ asset('template/html/images/portfolio/projects-3.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-3.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">EYES OF THE CAR</a></h3>
              <span><a href="javascript:;">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-3.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix design lightbox" href="{{ asset('template/html/images/portfolio/projects-7.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-7.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">EYES OF THE CAR</a></h3>
              <span><a href="javascript:;">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-7.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix design lightbox" href="{{ asset('template/html/images/portfolio/projects-6-big.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-6-big.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">CALENDAR</a></h3>
              <span><a href="javascript:;">photography</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-6-big.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography lightbox" href="{{ asset('template/html/images/portfolio/projects-1.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-1.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">EYES OF THE CAR</a></h3>
              <span><a href="javascript:;">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-1.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography lightbox" href="{{ asset('template/html/images/portfolio/projects-4.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-4.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">EYES OF THE CAR</a></h3>
              <span><a href="javascript:;">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-4.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix development lightbox" href="{{ asset('template/html/images/portfolio/projects-5-big.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5-big.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">NOW IS NOW</a></h3>
              <span><a href="javascript:;">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5-big.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography lightbox" href="{{ asset('template/html/images/portfolio/projects-5.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-5.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">LOVE</a></h3>
              <span><a href="javascript:;">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-5.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix development lightbox" href="{{ asset('template/html/images/portfolio/projects-9.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-9.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">MINIMALISM BOOKS</a></h3>
              <span><a href="javascript:;">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-9.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography lightbox" href="{{ asset('template/html/images/portfolio/projects-10.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-10.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">EYES OF THE CAR</a></h3>
              <span><a href="javascript:;">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-10.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix photography lightbox" href="{{ asset('template/html/images/portfolio/projects-11.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-11.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">LOVE</a></h3>
              <span><a href="javascript:;">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-11.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
        <li class="port-item mix development lightbox" href="{{ asset('template/html/images/portfolio/projects-12.jpg') }}">
          <a href="javascript:;">
            <div class="port-img-overlay">
              <img class="port-main-img" src="{{ asset('template/html/images/portfolio/projects-12.jpg') }}" alt="img" >
            </div>
          </a>
          <div class="port-overlay-cont">
            <div class="port-title-cont">
              <h3><a href="javascript:;">MINIMALISM BOOKS</a></h3>
              <span><a href="javascript:;">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
            </div>
            <div class="port-btn-cont">
              <a href="{{ asset('template/html/images/portfolio/projects-12.jpg') }}" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection