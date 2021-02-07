@extends('admin.master-admin')
@section('title', 'Create-Merk')

@section('main')
 <form action="{{route('admin.merk.store')}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="nama_merk">Nama Merk</label>
      <input type="text" class="form-control" id="nama_merk" name="nama_merk">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
