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
                            <th>Code</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Merk</th>
                            <th>Harga</th>
                            <th>Stand By Power</th>
                            <th>Prime Power</th>
                            <th>Engine Model</th>
                            <th>Fuel Cosumption</th>
                            <th>Cylinder</th>
                            <th>Engine Data</th>
                            <th>Size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $produk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><a href="">{{$produk->code}}</a></td>
                                <td>
                                    <img src="{{Storage::url($produk->gambar)}}" alt="gambar" style="width: 150px;">
                                </td>
                                <td>{{$produk->nama}}</td>
                                <td>{{$produk->merk->nama_merk}}</td>
                                <td>{{$produk->harga}}</td>
                                <td>{{$produk->standbypower}}</td>
                                <td>{{$produk->primepower}}</td>
                                <td>{{$produk->enginemodel}}</td>
                                <td>{{$produk->fuelcosumption}}</td>
                                <td>{{$produk->cylinder}}</td>
                                <td>{{$produk->enginedata}}</td>
                                <td>{{$produk->size}}</td>
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
