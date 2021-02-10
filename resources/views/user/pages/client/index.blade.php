@extends('user.master-user')
@section('title','Clients | Highlander.co.id')
@section('more','active')

@section('main')
<div class="page-heading about-heading header-text" style="background-image: url(../assets/user/images/Group-451.png);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>All Clients</h4>
            <h2>Our Happy Clients</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section-background">
    <div class="container">
      <div class="row">
        @foreach ($dataClient as $data)
        <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <img src="{{Storage::url($data->image)}}" alt="">
                </div>
                <div class="down-content">
                  <h4>{{$data->nama_client}}</h4>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
