@extends('admin.master-admin')
@section('title', 'Edit Client')

@section('main')
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Edit Client</h1>
                    <hr>
                    <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label for="nama_client">Nama Client</label>
                            <input type="text" name="nama_client" id="nama_client" class="form-control @error('nama_client')is-invalid @enderror" value="{{ old('nama_client') ?? $client->nama_client }}">
                            @error('nama_client')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Picture</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                        </div>

                        <div class="form-group">
                            <label for="description">Description :</label>
                            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $client->description }}" placeholder="BOLEH DIKOSONGKAN">
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
