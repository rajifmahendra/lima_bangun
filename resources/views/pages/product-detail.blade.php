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
<div class="page-section pt-110-b-30-cont pt-40">
  <div class="container">    
    <div class="mb-50">
      <h2 class="section-title pr-0"><span class="bold main-text-color">PRODUCT 1</span></h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-12 mb-50">
        <div class="post-prev-img popup-gallery">
          <a href="/template/html/images/shop/items/1.jpg"><img src="/template/html/images/shop/items/1.jpg" alt="img"></a>
        </div>
        <div class="row">
          <div class="popup-gallery">
            <div class="col-xs-4 post-prev-img">
              <a href="/template/html/images/shop/items/1-1.jpg"><img src="/template/html/images/shop/items/1-1-box.jpg" alt="img"></a>
            </div>
            <div class="col-xs-4 post-prev-img">
              <a href="/template/html/images/shop/items/1-2.jpg"><img src="/template/html/images/shop/items/1-2-box.jpg" alt="img"></a>
            </div>
            <div class="col-xs-4 post-prev-img">
              <a href="/template/html/images/shop/items/1-3.jpg"><img src="/template/html/images/shop/items/1-3-box.jpg" alt="img"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">
        <div class="row">
          <div class="col-xs-6  mt-0 mb-30">
            <del>$130.00</del>
            <strong class="item-price">$98.55</strong>
          </div>
          <div class="col-xs-6 text-right">
            <span class="font-black"><i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i></span>
            <small><span class="slash-divider">/</span> 21 <span class="display-none-767">reviews</span> </small>
          </div>
        </div>
        <hr class="mt-0 mb-30">
        <div class="mb-30">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, molestias, nesciunt quis et excepturi deserunt repellendus libero sit obcaecati enim maiores molestiae eaque. Pariatur, quam nihil rerum unde sed beatae
        </div>
        <hr class="mt-0 mb-30">
        <div class="row">
          <div class="col-sm-6 mb-30">
            <form method="post" action="#" class="form">
              <select class="select-md input-border w-100">
                  <option>Select size</option>
                  <option>XXL</option>
                  <option>XL</option>
                  <option>L</option>
                  <option>M</option>
                  <option>S</option>
              </select>
            </form>
          </div>
          <div class="col-sm-6 mb-30">
            <form method="post" action="#" class="form">
              <select class="select-md input-border w-100">
                <option>Select color</option>
                <option>Black</option>
                <option>Blue</option>
                <option>White</option>
              </select>
            </form>
          </div>
        </div>
        <hr class="mt-0 mb-30">
        <div class="font-12 lh-20 mb-30">
          <div>SKU: 8084</div>
          <div>Category: <a class="a-dark" href="#"> WOMEN'S SHOESs</a></div>
          <div>Tags: <a class="a-dark" href="#">WOMEN'S SHOES</a>, <a class="a-dark" href="#">blue shirt</a>, <a class="a-dark" href="#">men</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection