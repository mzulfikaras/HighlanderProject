@extends('admin.master-admin')
@section('title', 'Announcement')

@section('main')
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Edit Announcement</h1>
                    <hr>
                    <form action="{{ route('announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label for="judul_announce">Judul Announcement</label>
                            <input type="text" name="judul_announce" id="judul_announce" class="form-control @error('judul_announce')is-invalid @enderror" value="{{ old('judul_announce') ?? $announcement->judul_announce }}">
                            @error('judul_announce')
                                <div class="alert alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Picture</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror"> 
                        </div>

                        <div class="form-group">
                            <label for="description">Description :</label>
                            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ??$announcement->description }}">
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div> 
                            @enderror
                        </div>    

                        <div class="form-group">
                            <label for="status">Status :</label>
                            <select class="form-control" id="status" name="status">
                                <option value="aktif" {{old('status') == 'aktif' ? 'selected' : ''}}>
                                    Aktif
                                </option>
                                <option value="non-aktif" {{old('status') == 'non-aktif' ? 'selected' : ''}}>
                                    Non-aktif
                                </option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>  
                            @enderror
                            <button type="submit" class="btn btn-primary mb-3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection