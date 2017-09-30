@extends('layouts.layout')

@section('content')
<!-- BRAND -->
<section class="brand">
  <div class="container-fluid">
    <div class="row">
      <div class="col ml-auto mr-auto">
        <span class="brand-logo">
          <img src="img/logo_small.svg">
        </span>
        <span class="brand-name">
          Спецкомбинат
          <em>Отель</em>
        </span><!-- brand-name -->
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>
<!-- /BRAND -->

<!-- BOOKING -->
<section class="booking">
  <div class="container">
    <div class="row">

      <div class="col-md-7 booking-title align-self-center">
            <h2>Гостиница, в которой хочется остаться!</h2>
      </div><!-- booking-title -->

      <div class="col-md-5">
        <div class="booking-form">
          <h4>Booking</h4>

          @if($flash = session('message'))
              <div class="booking-message">
                  {{ $flash }}
              </div><!-- booking-message -->
          @else
              <form method="POST" action="ticket/store">
                  {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div><!-- form-group name -->
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div><!-- form-group phone -->
                <div class="form-group row">
                  <label for="checkin" class="col-sm-4 col-form-label">Check in</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="checkin" id="checkin">
                  </div>
                </div><!-- form-group checkin -->
                <div class="form-group row">
                  <label for="checkout" class="col-sm-4 col-form-label">Check out</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="checkout" id="checkout">
                  </div>
                </div><!-- form-group checkout -->
                <div class="form-group">
                  <input type="text" class="form-control" name="adults" placeholder="Adults">
                </div><!-- form-group -->
                <button type="submit" class="form-control">find room</button>
              </form>

              @if($errors->any())
              <div class="alert alert-danger booking-alert">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div><!-- booking alert -->
              @endif

              <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          @endif

        </div><!-- booking-form -->

      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>
<!-- /BOOKING -->

<!-- WELCOME -->
<section class="welcome">
  <div class="container-fluid">
      <h2>Добро пожаловать в наш отель</h2>
      <h3>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</h3>
      <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididun.</p>
  </div><!-- container-fluid -->
</section>
<!-- /WELCOME -->

<!-- ABOUT -->
<section class="about">
  <div class="container">
    <h2>О нас</h2>
    <div class="row">
      <div class="col-md-6 d-none d-md-block">
        <img src="img/demo02.jpg" class="img-fluid rounded-circle">
      </div><!-- col -->
      <div class="col-md-6">
        <div class="row about-item">
          <div class="col-4 about-item-icon"><i class="fa fa-wifi fa-4x"></i></div>
          <div class="col-8 about-item-desc">
            <h4>morbi ac</h4>
            <p>Proin et finibus tortor. Donec in sapien scelerisque, molestie sapien.</p>
          </div>
        </div><!-- about-item -->
        <div class="row about-item">
          <div class="col-4 about-item-icon"><i class="fa fa-television fa-4x"></i></div>
          <div class="col-8 about-item-desc">
            <h4>etiam eu</h4>
            <p>Cras convallis eros lectus, id egestas ex scelerisque vitae. Mauris.</p>
          </div>
        </div><!-- about-item -->
        <div class="row about-item">
          <div class="col-4 about-item-icon"><i class="fa fa-bath fa-4x"></i></div>
          <div class="col-8 about-item-desc">
            <h4>in sollicitudin</h4>
            <p>Proin in volutpat ex. Donec turpis enim, viverra non augue.</p>
          </div>
        </div><!-- about-item -->
        <div class="row about-item">
          <div class="col-4 about-item-icon"><i class="fa fa-bed fa-4x"></i></div>
          <div class="col-8 about-item-desc">
            <h4>nulla ultricies</h4>
            <p>Nulla laoreet sed felis vitae eleifend. Morbi imperdiet faucibus leo.</p>
          </div>
        </div><!-- about-item -->
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>
<!-- /ABOUT -->

<!-- GALLERY -->
<section class="gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <a href="img/gallery01_full.jpg">
          <img src="img/gallery01_full.jpg" class="img-fluid img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/gallery02_full.jpg">
          <img src="img/gallery02_full.jpg" class="img-fluid img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/gallery03_full.jpg">
          <img src="img/gallery03_full.jpg" class="img-fluid img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/gallery04_full.jpg">
          <img src="img/gallery04_full.jpg" class="img-fluid img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/gallery05_full.jpg">
          <img src="img/gallery05_full.jpg" class="img-fluid img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/gallery06_full.jpg">
          <img src="img/gallery06_full.jpg" class="img-fluid img-thumbnail">
        </a>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</section>
<!-- /GALLERY -->

<!-- CONTACTS -->
<section class="contacts">
  <div class="container">
    <div class="row">
      <div class="col ml-auto mr-auto">
        <span class="brand-logo">
          <img src="img/logo_small.svg">
        </span>
        <span class="brand-name">
          Спецкомбинат
          <em>Отель</em>
        </span><!-- brand-name -->
        <p class="contacts-address">Чернобыль, улица Кирова, дом 88</p>
        <p class="contacts-phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;800-2345-6789</p>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>
<!-- /CONTACTS -->

<!-- MAP -->
<div class="map" id="map"></div>
<!-- /MAP -->

<script>
  function initMap() {
    var hotel = {lat: 51.273831, lng: 30.230136};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: hotel,
      mapTypeId: 'hybrid'
    });
    var marker = new google.maps.Marker({
      position: hotel,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATAPRjHSGvveO0Lpj5xl6CZnreVs0jfQk&callback=initMap">
</script>
@endsection
