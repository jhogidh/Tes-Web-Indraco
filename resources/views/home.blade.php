@extends('layouts.main')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="{{ Vite::asset('resources/img/1.avif') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Newest Pfoducts</h5>
        <p>What realeased on this weeks.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ Vite::asset('resources/img/2.avif') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Popular Products</h5>
        <p>Our Best Product</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ Vite::asset('resources/img/3.avif') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Old School Product</h5>
        <p>This Product Never Get Old</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="containter-fluid" style="background-color: #24202D; color:#fff">
        <div class="col-6 offset-3 text-center p-3">
            <h2>Fashion Item</h2>
        </div>
</div>

<div class="container">
    <div class="row text-center p-5">
        <div class="col-12">
            <h3>Product List</h3>
        </div>
        <!-- @foreach($category as $cat)
        <div class="col-4 mt-5">
            <img src="" alt="">
            <h5><a href="{{url('')}}/cat/{{$cat->id}}">{{$cat->category_name}}</a></h5>
        </div>
        @endforeach
        <div class="col-12">
            @if(isset($category_product))
            @foreach($category_product as $p)
            @foreach($p->product as $item)
            <div class="col-3">
                <h1>
                    {{$item->product_name}}
                </h1>
            </div>
            @endforeach
            @endforeach
            @endif
        </div> -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action=""  class="input-group" method="GET">
                    <input type="search" name="search" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($productresult as $p)
            <div class="col-4 text-center mt-4">
                <div class="card" >
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->

                    <div class="card-body">
                        <h5 class="card-title">{{$p->product_name}}</h5>
                        <p class="card-text">Harga</p>
                        <p class="card-text">Stok</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>


@endsection
