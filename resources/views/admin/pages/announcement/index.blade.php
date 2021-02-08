@extends('admin.master-admin')
@section('title', 'Announcement')

@section('main')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <a href="{{ route('announcements.create') }}" class="btn btn-primary">Tambah Announcement</a>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                @if (session('hapus'))
                    <div class="alert alert-danger">
                        {{ session('hapus') }}
                    </div>
                @endif
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Announcement</th>
                            <th>Picture</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($announcements as $announcement)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $announcement->judul_announce }}</td>
                                <td>
                                    <img src="{{ Storage::url($announcement->image) }}" alt="gambar" style="width: 150px">
                                </td>
                                <td>{{ $announcement->description }}</td>
                                <td>{{ $announcement->status }}</td>
                                <td>

                                        <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-primary">Edit Data</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
