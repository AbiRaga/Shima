<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Jomie</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('home')}}">Home</a>
          </li>{{--
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('admin.produk')}}">Produk</a>
          </li>--}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Makanan</a></li>
              <li><a class="dropdown-item" href="#">Minuman</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Lainnya</a></li>
            </ul>
          </li>
          {{--
            <li class="nav-item">
            <a class="nav-link text-white" href="{{route('pelanggan.keranjang')}}" tabindex="-1" aria-disabled="true">Keranjang</a>
          </li>
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('pelanggan.summary')}}" tabindex="-1" aria-disabled="true">Summary</a>
          </li>
            <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Checkout</a>
          </li>--}}
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('login')}}}" tabindex="-1" aria-disabled="true">Login</a>
          </li>
          {{--<li class="nav-item">
            <a class="nav-link text-white" href="{{route('logout')}}" tabindex="-1" aria-disabled="true">Logout</a>
          </li>--}}
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>