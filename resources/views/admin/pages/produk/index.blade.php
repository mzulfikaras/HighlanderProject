@extends('admin.master-admin')
@section('title', 'Data Produk')
@section('produk', 'active')
@section('main')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <a href="{{route('produks.create')}}" class="btn btn-primary">Tamabahkan Produk</a>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{session('pesan')}}
                    </div>
                @endif
                @if (session('hapus'))
                <div class="alert alert-danger">
                    {{session('hapus')}}
                </div>
            @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Merk</th>
                            <th>Engine Type</th>
                            <th>Gambar</th>
                            <th>KVA</th>
                            <th>Geno</th>
                            <th>Type</th>
                            <th>Harga</th>
                            <th>Kondisi</th>
                            <th>Warna</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $produk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$produk->merk->nama_merk}}</td>
                                <td>{{$produk->enginetype}}</td>
                                <td>
                                    <img src="{{Storage::url($produk->gambar)}}" alt="gambar" style="width: 150px;">
                                </td>
                                <td>{{$produk->kva}}</td>
                                <td>{{$produk->geno}}</td>
                                <td>{{$produk->type}}</td>
                                <td>{{$produk->harga}}</td>
                                <td>{{$produk->kondisi}}</td>
                                <td>{{$produk->warna}}</td>
                                <td class="pt-3 d-flex justify-content-end">
                                    <a href="{{route('produks.edit',$produk->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('produks.destroy', $produk->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="15" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
