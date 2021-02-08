@extends('user.master-user')
@section('title', 'Product | HighLander.co.id')
@section('product','active')

@section('main')
<div class="page-heading about-heading header-text" style="background-image: url(../assets/user/images/Group-451.png);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h2>Our Products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-4">
            <form action="{{route('user.product.cari')}}" method="GET" style="margin-top: 20px;">
                @csrf
                <select name="merk" class="form-control mb-3">
                    <option value="0">All Merk</option>
                    @foreach ($merk as $m)
                        <option value="{{$m->id}}" {{(old('merk') == "$m->id") ? 'selected' : ''}}>
                            {{$m->nama_merk}}
                        </option>
                    @endforeach
                </select>
                <input type="submit" class="btn btn-danger btn-sm" value="Filter Merk">
              </form>
          </div>
      </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">
        @foreach ($dataProduk as $data)
            <div class="col-md-4">
              <div class="product-item">
                <a href="{{route('user.product.details', $data->id)}}"><img src="{{Storage::url($data->gambar)}}" alt=""></a>
                <div class="down-content">
                  <a href="product-details.html"><h4 class="text-center">{{$data->nama}}</h4></a>
                  <h6 class="text-center">Rp. {{number_format($data->harga)}}</h6>
                </div>
              </div>
            </div>
         @endforeach

        <div class="col-md-12">
            {{ $dataProduk->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection
