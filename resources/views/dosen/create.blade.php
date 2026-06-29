@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
    <div class="form-page">
        <div class="form-wrapper">
            <a href="{{ route('dosen.index') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Dosen
            </a>
            <div class="form-card">
                <h1>Tambah Dosen</h1>
                <form action="{{ route('dosen.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nidn">Nidn</label>
                        <input type="text" name="nidn" id="nidn" placeholder="Masukan Nidn" value="{{ old('nidn') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama') }}" required>
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Tambah Dosen
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
