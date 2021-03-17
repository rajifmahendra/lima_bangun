@extends('layouts.index')
@section('contact', 'current')
@section('page-title')
@endsection
@section('content')
<div class="page-section main-bg-color" style="padding-top: 100px">
  <div class="container-fluid">
    <div class="row" style="background: #fff">
      <div class="col-md-6">
        <div class="row">
          <div data-latitude="37.792888" data-longitude="-122.404041" id="google-map"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-form-cont">
          <div class="mb-40">
            <h2 class="section-title">CONTACT <span class="bold main-text-color">US</span></h2>
          </div>
          <div>
          <form id="contact-form" action="{{ route('store.contact') }}" method="POST">
              @csrf
              <input type="hidden" name="web_url" value="{{ url('/') }}">
              <div class="row">
                <div class="col-md-12 mb-30">
                  <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-30">
                  <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required="">
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-30">
                  <input type="number" value="" data-msg-required="Please enter your phone number" data-msg-email="Please enter a valid phone number" maxlength="100" class="controled" name="phone" id="phone" placeholder="PHONE NUMBER Contoh: 6282123456789" required="">
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-30">
                  <select name="category" class="controled">
                    <option value="other">Other</option>
                    <option value="kritik">Kritik dan Saran</option>
                    <option value="daftar">Daftar Mitra Kerja PT. LIMA BANGUN PERSADA</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-40">
                  <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required=""></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center-xxs">
                  <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="checkbox small">
                    <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required="">I agree to the terms of service</label>
                  </div>
                </div>
              </div>
            </form>
            <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
              Thanks, your message has been sent to us.
            </div>
            <div class="alert alert-danger hidden animated shake" id="contactError">
              <strong>Error!</strong> There was an error sending your message.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
<script src="{{ asset('template/html/js/gmap3.min.js') }}"></script>
{{--<script src="{{ asset('template/html/js/jquery.validate.min.js') }}"></script>--}}
<script src="{{ asset('template/html/js/contact-form-validation.js') }}"></script>
@endsection
