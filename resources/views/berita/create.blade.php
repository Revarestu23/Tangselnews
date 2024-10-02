@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Tambah Berita</h3>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Ada masalah dengan input Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('berita.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="content">Konten</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Masukkan konten...">{{ old('content') }}</textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Submit</button>
                <a href="{{ route('berita.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>

@include('partials.footer') <!-- Pastikan Anda memiliki partial untuk footer -->
@endsection
