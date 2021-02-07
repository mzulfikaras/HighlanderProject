@extends('admin.master-admin')
@section('title', 'Edit-Merk')

@section('main')
 <form action="{{route('admin.merk.update', $merk->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nama_merk">Nama Merk</label>
      <input type="text" class="form-control" id="nama_merk" name="nama_merk" value="{{old('nama_merk', $merk->nama_merk)}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
