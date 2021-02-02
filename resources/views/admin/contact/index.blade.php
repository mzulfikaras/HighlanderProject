<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h2>Tabel Data Karyawan</h2>
                @can('create', App\Karyawan::class)
                    <a href="{{ Route('karyawans.create') }}" class="btn btn-primary">Tambah Data Makanan
                @endcan
            </a>
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Gambar</th>
                        <th>Category</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{-- CARA1 --}}
                            {{-- <td><a href="{{ route('karyawans.show', ['karyawan' => $karyawan->id]) }}">{{ $karyawan->nik }}</a></td> --}}
                            {{-- CARA2 --}}
        
                            <td>{{ $contact->nama }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->telepon }}</td>
                            <td>{{ $contact->pesan }}</td>
                           
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