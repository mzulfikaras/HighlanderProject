@extends('user.master-user')
@section('title','Product Details | Highlander.co.id')
@section('product','active')

@section('main')
<div class="page-heading about-heading header-text" style="background-image: url({{Storage::url($produk->gambar)}})">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Product Details</h4>
            <h2>{{$produk->nama}}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div>
            <img src="{{Storage::url($produk->gambar)}}" alt="" class="img-fluid wc-image">
          </div>
        </div>

        <div class="col-md-8 col-xs-12">
            <h2>{{$produk->nama}}</h2>

            <br>

            <p class="lead">
              <strong class="text-primary">Rp. {{number_format($produk->harga)}}</strong>
            </p>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <h5>Produk Detail</h5>
                <br>
                <table border="2" style="width: 30rem">
                    <tbody>
                    <tr>
                        <th>Standby Power</th><th>KVA</th>
                        <td>{{$produk->standbypower}}</td>
                    </tr>
                    <tr>
                        <th>Prime Power</th><th>KVA</th>
                        <td>{{$produk->primepower}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">Engine Model</th>
                        <td>{{$produk->enginemodel}}</td>
                    </tr>
                    <tr>
                        <th>Fuel Consumption</th>
                        <th>g / kW.h</th>
                        <td>{{$produk->fuelcosumption}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">Cylinders</th>
                        <td>{{$produk->cylinder}}</td>
                    </tr>
                    <tr>
                        <th >Engine Data</th>
                        <th>Stroke (KG)</th>
                        <td>{{$produk->enginedata}}</td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Similar Products</h2>
            <a href="{{route('user.product')}}">view more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>

        @foreach ($similiarProduct as $s)
            <div class="col-md-4">
                <div class="product-item">
                  <a href="{{route('user.product.details', $s->id)}}"><img src="{{Storage::url($s->gambar)}}" alt=""></a>
                  <div class="down-content">
                    <a href="{{route('user.product.details', $s->id)}}"><h4>{{$s->nama}}</h4></a>
                    <h6>Rp. {{number_format($s->harga)}}</h6>
                  </div>
                </div>
            </div>
        @endforeach

      </div>
    </div>
  </div>

@endsection
