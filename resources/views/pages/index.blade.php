@extends('layouts.index')
@section('home', 'current')
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
<div class="page-section pt-120-b-100-cont pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-4 pb-20">
        <h2 class="section-title wow fadeIn main-border-color">TENTANG <span class="bold main-text-color">KAMI</span></h2>
        <a href="{{ url('about') }}" class="button medium gray" style="border-radius: 0">SELENGKAPNYA</a>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-12">
            <div class="fes6-box wow fadeIn" >
              <div class="icon icon-basic-globe"></div>
              <h3>
                <span class="bold main-text-color">PT. LIMA BANGUN</span> PERSADA MERUPAKAN PERUSAHAAN YANG BERGERAK DALAM JASA KOTRUKSI, INSTALASI DEKORASI INTERIOR, PEMANGANGAN PERANCAH DAN SEBAGAI BENTUK INDONESIA MEMBANGUN YANG AMAN DENGAN PENGALAMAN-PENGALAMAN KAMI.
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="divider divider-center mt-0"><i class="fa fa-square"></i></div>
<div class="page-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 wow fadeInLeft equal-height ">
        <div class="fes2-main-text-cont">
          <div class="title-fs-45">
            VISI<br>
            <span class="bold main-text-color">KAMI</span>
          </div>
          <div class="line-3-70"></div>
          <div class="fes2-text-cont">
            <a href="{{ url('about#visi-misi') }}" class="button medium gray" style="border-radius: 0">SELENGKAPNYA</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="fes2-img equal-height">
            <img src="{{ asset('images/visi.jpg') }}" alt="visi">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-50 wow fadeInRight equal-height">
        <div class="fes2-main-text-cont">
          <div class="title-fs-45">
            MISI<br>
            <span class="bold main-text-color">KAMI</span>
          </div>
          <div class="line-3-100"></div>
          <div class="fes2-text-cont">
            <a href="{{ url('about#visi-misi') }}" class="button medium gray" style="border-radius: 0">SELENGKAPNYA</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 right-50">
        <div class="row">
          <div class="fes3-img equal-height">
            <img src="{{ asset('images/misi.jpg') }}" alt="misi">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection