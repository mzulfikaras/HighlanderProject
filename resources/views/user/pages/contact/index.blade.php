@extends('user.master-user')
@section('title','Contact | Highlander.co.id')
@section('contact','active')

@section('main')
<div class="page-heading contact-heading header-text" style="background-image: url(../assets/user/images/Group-451.png)">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="find-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Location on Maps</h2>
          </div>
        </div>
        <div class="col-md-8">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.839842583474!2d106.75939461476872!3d-6.152198695545718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7c5aaaaaaab%3A0x965cabda42f339e5!2sHighlander%20Genset!5e0!3m2!1sid!2sid!4v1612690402201!5m2!1sid!2sid" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>          </div>
        </div>
        <div class="col-md-4">
          <div class="left-content">
            <h4>About our office</h4>
            <p>Pergudangan Prima Centre 1, Jl. Pool PPD Jl. Pesing Poglar, RT.9/RW.2, Kedaung Kali Angke, <br><br>Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11710</p>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="tel:02154365000"><i class="fa fa-phone"></i></a> 021-54365000</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Send us a Message</h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
            @endif
            @if (session('hapus'))
            <div class="alert alert-danger">
                {{ session('hapus') }}
            </div>
            @endif
            <form id="contact" action="{{route('user.store.contact')}}" method="post">
                @csrf

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="nama" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="telepon" type="text" class="form-control" id="subject" placeholder="No Telepon" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="pesan" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="text-center" style="margin-top: 15px; margin-left: 50px">Our Whatapp (Click On Icon)</h5>
          <a
          href="https://api.whatsapp.com/send?phone=+6287886380705&text=Hallo%20Kami%20Dari%20Highlander%20ada%20yang%20bisa%20kami%20bantu?"
          class="nav-link text-white" style="margin-left: 90px; margin-top: 50px;"
          >
          <img src="{{asset('assets/user/images/whatsapp.png')}}" class="img-fluid" alt="" style="width: 10rem;" >
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
