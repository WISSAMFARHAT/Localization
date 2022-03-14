@extends("master")

@section("main")
<div class="slideShowContainer">
  @if(App::isLocale('ar'))
    <div class="slideShow show1">
    </div>
  @endif
    <div class="slideShow show2">
    </div>
    <div class="slideShow show3">
    </div>
    <div class="slideButtonNext" onclick="slidenext()">

    </div>
    <div class="slideButtonPreview" onclick="slidepreview()">
    </div>
</div>

<div class="container-fluid m-4">
  <div class="row">
    <div class="col-md-8   col-xs-12 p-4" style="background:#f8f8f8">
      <div class="row">
        <h3 class="title">{{ __('body.title1') }}</h3>
      </div>
      <div class="row">
        <div class="col" style="place-self: center;">
          <img src="https://sabaa.org/data/homepagecontent/1.png" class="img-fluid"   width="200px" height="200px" />
        </div>
        <div class="col">
          <p>
            {{ __('body.p1') }}
          </p>
        </div>
      </div>
      <div class="row">
        <img src="https://sabaa.org/data/homepagecontent/1.jpg" class="img-fluid" height="641" width="959"/>
      </div>
    </div>

    <div class="col-md-3 col-xs-12 p-4 " style="background:#f8f8f8;margin-right:40px;margin-left:40px">
      <div class="row">
        <h3 class="title">{{ __('body.title2') }}</h3>
      </div>
      <div style="height:300px">
      </div>
      <div class="row">
        <h3 class="title">{{ __('body.title3') }}</h3>
      </div>
      <div style="height:300px">
      </div>
    </div>
  </div>
</div>
@endsection




@section("script")
<script script src="{{asset('/js/slide.js')}}"></script>
@endsection
