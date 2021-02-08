@extends('admin.master-admin')
@section('title','Contact Us')

@section('main')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $contact->nama }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->telepon }}</td>
                            <td>{{ $contact->pesan }}</td>
                            <td>
                                <form action="{{route('contact.delete', $contact->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <td colspan="6" class="text-center">Data kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
