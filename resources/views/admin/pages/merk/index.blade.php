@extends('admin.master-admin')
@section('title','Merk')

@section('main')
@php
    $no = 1;
@endphp
<a href="{{route('admin.merk.create')}}" class="btn btn-primary mb-2">Tambah Merk</a>

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Merk</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{$data->nama_merk}}</td>
            <td>
                <form action="{{route('admin.merk.delete', $data->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{route('admin.merk.edit', $data->id)}}" class="btn btn-secondary">Edit</a>
                    <button type="submit" class="btn btn-warning">Hapus</button>
                </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
