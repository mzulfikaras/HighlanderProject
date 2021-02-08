<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{route('user.home')}}"><img src="{{asset('assets/user/images/Highlander-Logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item @yield('home')">
                  <a class="nav-link" href="{{route('user.home')}}">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>

              <li class="nav-item @yield('product')"><a class="nav-link" href="{{route('user.product')}}">Products</a></li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle @yield('more')" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('user.about')}}">About Us</a>
                    <a class="dropdown-item" href="{{route('user.client')}}">Clients</a>
                  </div>
              </li>

              {{-- <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li> --}}

              <li class="nav-item @yield('contact')"><a class="nav-link" href="{{route('user.contact')}}">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
