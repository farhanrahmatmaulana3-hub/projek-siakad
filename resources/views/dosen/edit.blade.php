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
                <h1>Edit Dosen</h1>
                <form action="{{ route('dosen.update', $dataDosen->nidn) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nidn">Nidn</label>
                        <input type="text" name="nidn" id="nidn" value="{{ $dataDosen->nidn }}" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama', $dataDosen->nama) }}" required>
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Edit Dosen
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
