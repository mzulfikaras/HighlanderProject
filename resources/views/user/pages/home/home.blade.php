@extends('user.master-user')
@section('title', 'Home | Highlander.co.id')
@section('home','active')

@section('main')
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">

        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">

        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">

        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Featured Products</h2>
            <a href="{{route('user.product')}}">view more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        @foreach ($dataProduk as $data)
         <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.html"><img src="{{Storage::url($data->gambar)}}" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4 class="text-center">{{$data->nama}}</h4></a>
                <h6 class="text-center">Rp.{{number_format($data->harga)}}</h6>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            Genset HIGHLANDER hadir untuk membantu memecahkan masalah kebutuhan akan Generator Set/ Genset di Indonesia Perusahaan kami adalah salah satu distributor mesin genset di Indonesia, kami melayani penjualan Diesel Genset, Layanan Sewa/Rental Genset, Layanan Service Genset, Layanan Service Genset,
            serta layanan purna Jual, Semua kami berikan dengan harga murah. <br>
            <a href="{{route('user.about')}}" class="filled-button">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="{{asset('assets/user/images/home-3.JPG')}}" width="540" height="400" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="happy-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Happy Clients</h2>

            <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel text-center">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('assets/user/images/brand/BNI.png')}}" width="150" height="200" alt="">
              </div>
              <div class="down-content">
                <h4>Bank BNI</h4>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <img src="{{asset('assets/user/images/brand/permata.png')}}" width="150" height="200" alt="">
              </div>
              <div class="down-content">
                <h4>Bank Permata</h4>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <img src="{{asset('assets/user/images/brand/lotte-mart.png')}}" width="150" height="200" alt="">
              </div>
              <div class="down-content">
                <h4>Lotte Mart</h4>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <img src="{{asset('assets/user/images/brand/PLN1.png')}}" width="150" height="200" alt="">
              </div>
              <div class="down-content">
                <h4>PLN</h4>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <img src="{{asset('assets/user/images/brand/pemda-prabumulih.png')}}" width="150" height="200" alt="">
              </div>
              <div class="down-content">
                <h4>Pemda Prabumulih</h4>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <img src="{{asset('assets/user/images/brand/unlibanon1.png')}}" width="150" height="200" alt="">
              </div>
              <div class="down-content">
                <h4>UN Libanon</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                <h4>Apakah Anda Tertarik Dengan Kami?</h4>
                <p>Silahkan Contact Kepada Tim Kami Jika Anda Mempunyai Pertanyaan Tentang Kami Ataupun Produk Kami</p>
              </div>
              <div class="col-lg-4 col-md-6 text-right">
                <a href="{{route('user.contact')}}" class="filled-button">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
