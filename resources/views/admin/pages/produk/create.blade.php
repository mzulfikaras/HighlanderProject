@extends('admin.master-admin')
@section('title', 'Form Produk')
@section('produk', 'active')
@section('main')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Produk Baru</h1>
            <hr>
            <form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" name="code" id="code"  class="form-control @error('title') is-invalid @enderror">
                    @error('code')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('title') is-invalid @enderror">
                    @error('nama')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="merk">Merek Produk</label>
                    <select class="form-control" id="merk" name="merk_id">
                        <option disabled="disabled" selected="selected">Pilih Merk</option>
                        @foreach ($merk as $m)
                            <option value="{{$m->id}}" {{(old('merk_id') == "$m->id") ? 'selected' : ''}}>
                                {{$m->nama_merk}}
                            </option>
                        @endforeach
                    </select>
                    @error('merk')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control @error('title') is-invalid @enderror">
                    @error('harga')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="standbypower">Stand By Power</label>
                    <input type="text" name="standbypower" id="standbypower" class="form-control @error('title') is-invalid @enderror">
                    @error('standbypower')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="primepower">Prime Power</label>
                    <input type="text" name="primepower" id="primepower" class="form-control @error('title') is-invalid @enderror">
                    @error('primepower')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="enginemodel">Engine Model</label>
                    <input type="text" name="enginemodel" id="enginemodel" class="form-control @error('title') is-invalid @enderror">
                    @error('enginemodel')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fuelcosumption">Fuel Cosumption</label>
                    <input type="text" name="fuelcosumption" id="fuelcosumption" class="form-control @error('title') is-invalid @enderror">
                    @error('fuelcosumption')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cylinder">Cylinder</label>
                    <input type="text" name="cylinder" id="cylinder" class="form-control @error('title') is-invalid @enderror">
                    @error('cylinder')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="enginedata">Engine Data</label>
                    <input type="text" name="enginedata" id="enginedata" class="form-control @error('title') is-invalid @enderror">
                    @error('enginedata')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" name="size" id="size" class="form-control @error('title') is-invalid @enderror">
                    @error('size')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar produk</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    @error('gambar')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
