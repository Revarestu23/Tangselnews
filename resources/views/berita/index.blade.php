@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-inner">
        <!-- Header -->
        <div class="page-header">
            <h3 class="fw-bold mb-3">Berita</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Konten Profil</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Berita</a>
                </li>
            </ul>
        </div>

        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Pembuatan Berita -->
        <form action="{{ route('berita.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="mytextarea" name="content" rows="5" placeholder="Masukkan konten...">{{ old('content') }}</textarea>
            </div>
            @error('content')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="container-fluid d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('berita.index') }}" class="btn btn-danger ml-2">Cancel</a>
                <!-- Tombol "History Data" -->
                <button type="button" class="btn btn-info ml-2" id="toggleHistory">History Data</button>
            </div>
        </form>

        <!-- Section History Data -->
        <div class="mt-5" id="historySection" style="display: none;">
            <h3 class="fw-bold mb-3">History Data Berita</h3>

            @if ($beritas->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritas as $index => $item)
                            <tr>
                                <td>{{ $beritas->firstItem() + $index }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($item->content, 50) }}</td>
                                <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $beritas->links() }}
                </div>
            @else
                <p class="text-center">Tidak ada data berita.</p>
            @endif
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container-fluid d-flex justify-content-center">
        <nav class="pull-left">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Help </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Licenses </a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            2024, PortalTangsel
        </div>
    </div>
</footer>
@endsection

@section('scripts')
<script>
    document.getElementById('toggleHistory').addEventListener('click', function() {
        var historySection = document.getElementById('historySection');
        if (historySection.style.display === 'none') {
            historySection.style.display = 'block';
            this.textContent = 'Hide History';
        } else {
            historySection.style.display = 'none';
            this.textContent = 'History Data';
        }
    });
</script>
@endsection
