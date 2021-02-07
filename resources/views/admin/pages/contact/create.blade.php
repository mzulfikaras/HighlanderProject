@extends('admin.master-admin')
@section('title','Contact Us')

@section('main')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Data Karyawan</h1>
            <hr>
            <form action="{{ route('contact.store') }}" method="POST"> 
               @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div> 
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div> 
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telepon">Nomer Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control @error('telepon') is-invalid @enderror">
                    @error('telepon')
                        <div class="alert alert-danger">{{ $message }}</div> 
                    @enderror
                </div>
                
                
                    @error('bagian')
                        <div class="alert alert-danger">{{ $message }}</div>  
                    @enderror
                    <div class="form-group">
                        <label for="pesan">pesan</label>
                        <textarea name="pesan" id="pesan" rows="3" class="form-control">{{ old('pesan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection