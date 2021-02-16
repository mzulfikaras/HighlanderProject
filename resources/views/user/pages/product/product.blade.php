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
                <div class="down-content text-center">
                  <a href="{{route('user.product.details', $data->id)}}"><h4>{{$data->merk->nama_merk}}</h4></a>
                  <p>{{$data->enginetype}}</p>
                  @if ($data->harga == 0)
                    <a
                    href="https://api.whatsapp.com/send?phone=+6287886380705&text=Hallo%20Kami%20Dari%20Highlander%20ada%20yang%20bisa%20kami%20bantu?"
                    class="btn btn-primary">Contact Sales</a>
                  @else
                    <h6><strong style="color: red">Starts from -></strong> Rp. {{number_format($data->harga)}}</h6>
                  @endif
                </div>
              </div>
            </div>
         @endforeach

        @if(!request()->routeIs('user.product.cari'))
         <div class="col-md-12">
            {{ $dataProduk->links() }}
         </div>
        @endif
      </div>
    </div>
  </div>
@endsection
