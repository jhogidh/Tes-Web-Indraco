<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="{{Vite::asset('resources/img/logonew.png')}}" alt="" width="100" height="" class="d-inline-block align-text-top">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Shop
          </a>
          <ul class="dropdown-menu p-5 container-fluid">
            <div class="row">
            @foreach($category as $item)
            <div class="col-3">
                <li><a class="dropdown-item" href="#"><h3>{{$item->category_name}}</h3></a></li>
                @foreach($item->product as $product)
                <li><a class="dropdown-item" href="#">{{$product->product_name}}</a></li>
                @endforeach
            </div>
            @endforeach
            <div class="col-3 text-center">
                <img src="{{ Vite::asset('resources/img/nav.avif') }}" alt="" class="img-fluid">
            </div>

        </div>

          </ul>
        </li> -->
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

            <div class="btn btn-warning">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" style="color:#fff;text-decoration:none;font-weight:bold">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
    </div>

  </div>
</nav>
