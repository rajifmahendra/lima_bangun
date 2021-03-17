@extends('layouts.index')
@section('product', 'current')
@section('page-title')
<div class="page-title-cont page-title-small main-bg-color">
  <div class="relative container align-left">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-title" style="color: #fff">PRODUCT DETAIL</h1>
      </div>
      <div class="col-md-4">
        <div class="breadcrumbs">
          <a href="/" style="color: #fff">Home</a><span class="slash-divider" style="color: #fff">/</span><span class="bread-current" style="color: #fff">Product Detail</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
    <div class="main-bg-color plr-30 plr-0-767 clearfix">
        <div class="white-bg plr-30 pt-50 pb-20">
            <div class="relative">
                <div class="container">
                    @if(isset($contents))
                        <div class="mb-50">
                            <h2 class="section-title pr-0"><span class="bold main-text-color">PRODUCT DETAIL</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 mb-50">
                                <div class="post-prev-img popup-gallery">
                                    <a href="{{ $contents->media_link }}"><img src="{{ $contents->media_link }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">
                                <div class="row">
                                    <div class="col-xs-6  mt-0 mb-30">
                                        <strong class="item-price">{{ strtoupper($contents->name) }}</strong>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-30">
                                <div class="mb-30">
                                    <div>Description: <h6 class="a-dark">{{ $contents->description }}</h6>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-30">
                                <div class="font-12 lh-20 mb-30">
                                    <div>CATEGORY: <h6 class="a-dark">{{ strtoupper($contents->product_category->category) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @else
                    <h1 class="text-center">PRODUCTS UNAVAILABLE</h1>
                @endif
            </div>
        </div>
    </div>
@endsection
