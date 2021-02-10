@extends('admin.master-admin')
@section('title', 'Form Produk')
@section('produk', 'active')
@section('main')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Update Produk</h1>
            <hr>
            <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="merk">Merek Produk</label>
                    <select class="form-control" id="merk_id" name="merk_id">
                        @foreach ($merk as $m)
                            <option value="{{$m->id}}" {{(old('merk_id') ?? $produk->merk_id == $m->id) ? 'selected' : ""}}>
                                {{$m->nama_merk}}
                            </option>
                        @endforeach
                    </select>
                    @error('merk_id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="enginetype">Engine Type</label>
                    <input type="text" name="enginetype" id="enginetype"  class="form-control @error('enginetype') is-invalid @enderror" value="{{old('enginetype', $produk->enginetype)}}">
                    @error('enginetype')
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
                <div class="form-group">
                    <label for="kva">KVA</label>
                    <input type="text" name="kva" id="kva" class="form-control @error('kva') is-invalid @enderror" value="{{old('kva', $produk->kva)}}">
                    @error('kva')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="geno">GENO</label>
                    <input type="text" name="geno" id="geno" class="form-control @error('geno') is-invalid @enderror" value="{{old('geno', $produk->geno)}}">
                    @error('geno')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type', $produk->type)}}">
                    @error('type')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{old('harga', $produk->harga)}}">
                    @error('harga')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <input type="text" name="kondisi" id="kondisi" class="form-control @error('kondisi') is-invalid @enderror" value="{{old('kondisi', $produk->kondisi)}}">
                    @error('kondisi')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" name="warna" id="warna" class="form-control @error('warna') is-invalid @enderror" value="{{old('warna', $produk->warna)}}">
                    @error('warna')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
