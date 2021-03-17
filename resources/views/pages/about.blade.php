@extends('layouts.index')
@section('about', 'current')
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
<div id="izin" class="page-section grey-light-bg clearfix">
  <div class="fes7-img-cont col-md-5">
    <div class="fes7-img" style="background-image: url({{ asset('images/about-us.jpg') }})"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
        <h1><span class="font-light">IZIN PERUSAHAAN</span></h1>
        <div class="mb-30">
          <p class="bold main-text-color">
            SIUP (Surat Ijin Usaha Perdagangan)
          </p>
          <p class="mb-0">No SIUP: 912001841824</p>
          <p class="mb-0">Tangga: 12 Oktober 2019</p>
          <p class="mb-0">Masa Berlaku: Seumur Hidup</p>
          <p class="mb-0">Instansi Pemberi Ijin Usaha: Lembaga Pengelola dan Penyelenggara OSS</p>
        </div>
        <div class="mb-30">
          <p class="bold main-text-color">
            NIB (Nomor Induk Berusaha)
          </p>
          <p class="mb-0">No NIB: 912001841824</p>
          <p class="mb-0">Tangga: 12 Oktober 2019</p>
          <p class="mb-0">Masa Berlaku: Seumur Hidup</p>
          <p class="mb-0">Instansi Pemberi Ijin Usaha: Lembaga Pengelola dan Penyelenggara OSS</p>
        </div>
        <div class="mb-30">
          <p class="bold main-text-color">
            SPPKP (Surat Pengakuan Pengusaha kena Pajak)
          </p>
          <p class="mb-0">No SPPKP: 912001841824</p>
          <p class="mb-0">Tangga: 12 Oktober 2019</p>
          <p class="mb-0">Masa Berlaku: Seumur Hidup</p>
          <p class="mb-0">Instansi Pemberi Ijin Usaha: Lembaga Pengelola dan Penyelenggara OSS</p>
        </div>
        <div class="mb-30">
          <p class="bold main-text-color">
            SKT (Surat Keterangan Terdaftar)
          </p>
          <p class="mb-0">No SKT: 912001841824</p>
          <p class="mb-0">Tangga: 12 Oktober 2019</p>
          <p class="mb-0">Masa Berlaku: Seumur Hidup</p>
          <p class="mb-0">Instansi Pemberi Ijin Usaha: Lembaga Pengelola dan Penyelenggara OSS</p>
        </div>
        <div class="mb-60">
          <p class="bold main-text-color">
            NPWP (Nomor Pokok Wajib Pajak)
          </p>
          <p class="mb-0">No NPWP: 912001841824</p>
        </div>
      </div>
    </div>
  </div>
</div>
<hr class="mt-0 mb-0">
<div id="visi-misi" class="page-section p-80-cont">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="bold main-text-color mt-0">VISI</h1>
        <p>
            {{ isset($aboutContents['about_visi'])?$aboutContents['about_visi']:'' }}
        </p>
      </div>
      <div class="col-md-6">
        <h1 class="bold main-text-color mt-0">MISI</h1>
        <p>
            {{ isset($aboutContents['about_misi'])?$aboutContents['about_misi']:'' }}
        </p>
      </div>
    </div>
  </div>
</div>
<div class="divider divider-center mt-0"><i class="fa fa-square"></i></div>
<div id="klien" class="page-section" id="klien-kami">
  <div class="container">
    <div class="row">
      <h1 class="bold text-center" style="margin-bottom: 0">KLIEN KAMI</h1>
      <div class="col-md-12 text-center" style="padding: 20px 0">
        <div class="row">
            @if($clients->IsNotEmpty())
                @foreach($clients as $client)
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <img src="{{ $client->media_link }}" alt="bkkbn">
                    </div>
                @endforeach
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
