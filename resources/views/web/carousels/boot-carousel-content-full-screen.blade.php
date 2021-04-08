<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
















		
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

@foreach($result['slides'] as $key=>$slides_data)
  <ol class="carousel-indicators" data-slide-to="{{ $key }}" class="@if($key==0) active @endif">
  @endforeach

  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  @foreach($result['slides'] as $key=>$slides_data)
        <div class="carousel-item  @if($key==0) active @endif">
          @if($slides_data->type == 'category')
            <a href="{{ URL::to('/shop?category='.$slides_data->url)}}">
          @elseif($slides_data->type == 'product')
            <a href="{{ URL::to('/product-detail/'.$slides_data->url)}}">
          @elseif($slides_data->type == 'mostliked')
            <a href="{{ URL::to('shop?type=mostliked')}}">
          @elseif($slides_data->type == 'topseller')
            <a href="{{ URL::to('shop?type=topseller')}}">
          @elseif($slides_data->type == 'deals')
            <a href="{{ URL::to('shop?type=deals')}}">
          @endif
    <div class="carousel-item active">
      <img src="{{asset('images/banner.jpg')}}" class="d-block w-100" src="..." alt="First slide">
    </div>
    <!-- <div class="carousel-item">
      <img src="https://lokalkw.com/images/media/2021/02/lu1A109902.jpg" class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="https://lokalkw.com/images/media/2021/02/lu1A109902.jpg" class="d-block w-100" src="..." alt="Third slide">
    </div> -->
  </div>
  @endforeach
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   