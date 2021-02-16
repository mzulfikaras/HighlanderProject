@extends('user.master-user')
@section('title','Product Details | Highlander.co.id')
@section('product','active')

@section('main')
<div class="page-heading about-heading header-text" style="background-image: url({{Storage::url($produk->gambar)}})">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h2>Product Details</h2>
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
            <h2>{{$produk->enginetype}}</h2>

            <br>

            <h5>{{$produk->merk->nama_merk}}</h5>

            <br>

            @if ($produk->harga == 0)
            <a
            href="https://api.whatsapp.com/send?phone=+6287886380705&text=Hallo%20Kami%20Dari%20Highlander%20ada%20yang%20bisa%20kami%20bantu?"
            class="btn btn-primary">Contact Sales</a>
            @else
              <h6><strong style="color: red">Starts from -></strong> Rp. {{number_format($produk->harga)}}</h6>
            @endif

            <br>
            <br>
            <div class="row">
              <div class="col-sm-12">
                <h5>Produk Detail</h5>
                <br>
                <table border="2" style="width: 30rem">
                    <tbody>
                    <tr>
                        <th>KVA</th>
                        <td>{{$produk->kva}}</td>
                    </tr>
                    <tr>
                        <th>Geno</th>
                        <td>{{$produk->geno}}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>{{$produk->type}}</td>
                    </tr>
                    <tr>
                        <th>Kondisi</th>
                        <td>{{$produk->kondisi}}</td>
                    </tr>
                    <tr>
                        <th >Warna</th>
                        <td>{{$produk->warna}}</td>
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
                <div class="product-item text-center">
                  <a href="{{route('user.product.details', $s->id)}}"><img src="{{Storage::url($s->gambar)}}" alt=""></a>
                  <div class="down-content">
                    <a href="{{route('user.product.details', $s->id)}}"><h4>{{$s->merk->nama_merk}}</h4></a>
                    <p>{{$s->enginetype}}</p>
                    @if ($s->harga == 0)
                    <a
                    href="https://api.whatsapp.com/send?phone=+6287886380705&text=Hallo%20Kami%20Dari%20Highlander%20ada%20yang%20bisa%20kami%20bantu?"
                    class="btn btn-primary">Contact Sales</a>
                    @else
                      <h6><strong style="color: red">Starts from -></strong> Rp. {{number_format($s->harga)}}</h6>
                    @endif
                  </div>
                </div>
            </div>
        @endforeach

      </div>
    </div>
  </div>

@endsection
