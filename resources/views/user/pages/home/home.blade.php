@extends('user.master-user')
@section('title', 'Home | Highlander.co.id')
@section('home','active')

@section('modal')
@if ($dataAnnounce->status == 'aktif')
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
              <img src="{{asset('assets/user/images/Highlander-Logo.png')}}" alt=""> &nbsp;
              Announcement
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body text-center">
          <h3>{{$dataAnnounce->judul_announce}}</h3><br>
          <img src="{{Storage::url($dataAnnounce->image)}}" width="300" height="200" alt=""> <br><br>
          <p>{{$dataAnnounce->description}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endif
@endsection

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

            <a href="{{route('user.client')}}">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel text-center">
            @foreach ($dataClient as $data)
             <div class="service-item">
                <div class="icon">
                  <img src="{{Storage::url($data->image)}}" width="150" height="200" alt="">
                </div>
                <div class="down-content">
                  <h4>{{$data->nama_client}}</h4>
                </div>
              </div>
            @endforeach
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

@section('js')
  <script>
    $('#exampleModal').modal('show');
  </script>
@endsection
