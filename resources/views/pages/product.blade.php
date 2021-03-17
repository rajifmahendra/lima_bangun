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
            <div class="row">
                @if(count($contents) > 0)
                    @foreach($contents as $content)
                        <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70" data-wow-delay="600ms">
                            <div class="post-prev-img">
                                <a href="{{ url('product').'/'.$content->id }}"><img src="{{ $content->media_link }}" alt="img"></a>
                            </div>
                            <div class="post-prev-title mb-5">
                                <h3><a class="button medium gray btn-5 btn-5bb" href="{{ url('product').'/'.$content->id }}">{{ $content->name }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>@endsection
