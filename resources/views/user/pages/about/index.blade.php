@extends('user.master-user')
@section('title', 'About us | Highlander.co.id')
@section('more', 'active')

@section('main')
<div class="page-heading about-heading header-text" style="background-image: url(../assets/user/images/Group-451.png);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>about us</h4>
            <h2>our company</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="text-align: center">Highlander Company Video</h2>
          </div>
        </div>
        <div class="col-md-12" style="text-align: center">
          {{-- <div class="right-image"> --}}
            <iframe width="800" height="500" src="https://www.youtube.com/embed/izGgRanzAFQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          {{-- </div> --}}
        </div>
      </div>
    </div>
  </div>


  <div class="team-members">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Highlander Genset.</h2>
          </div>

          <p>Genset HIGHLANDER hadir untuk membantu memecahkan masalah kebutuhan akan Generator Set/ Genset di Indonesia Perusahaan kami adalah salah satu distributor mesin genset di Indonesia, kami melayani penjualan Diesel Genset, Layanan Sewa/Rental Genset, Layanan Service Genset, Layanan Service Genset, serta layanan purna Jual, Semua kami berikan dengan harga murah. Kami menyediakan kebutuhan anda untuk genset Open type, Genset Silent type, Genset trailer, dan Genset Portable, dengan kapasitas mulai dari 1 KVA sampai 2000 KVA dengan harga murah tetapi dengan kualitas yang tinggi</p><br>

          <p>Genset HIGHLANDER merupakan salah satu Perusahaan Genset di Indonesia. Perusahaan kami merupakan Perusahaan Manufacturing dan Assembling Genset, dan akan siap memenuhi kebutuhan Genset Rumah Tangga, Genset untuk Mall/Supermarket, Genset Industry, Genset untuk perkantoran, dan masih banyak lagi dan kami memberikan Harga genset yang sangat murah. Untuk engine seperti Perkins, Yanmar, Cummins, Mitsubishi, Volvo, Lovol, Doosan, Foton, dan lain-lain. Untuk Alternator Kami menggunakan Stamford, LeroySomer, MAreli, dll.</p><br>

          <p>Genset HIGHLANDER dirancang dengan tujuan memberikan kenyamanan bagi pengguna Mesin Genset di Indonesia</p>
        </div>
      </div>
    </div>
  </div>
@endsection
