@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
    <div class="form-page">
        <div class="form-wrapper">
            <a href="{{ route('mahasiswa.index') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Mahasiswa
            </a>
            <div class="form-card">
                <h1>Tambah Mahasiswa</h1>
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" id="npm" placeholder="Masukkan NPM" value="{{ old('npm') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nidn">Wali Dosen</label>
                        <select name="nidn" id="nidn" required>
                            <option value="" disabled selected>Pilih Wali Dosen</option>
                            @foreach ($dataDosen as $dosen)
                                <option value="{{ $dosen->nidn }}" {{ old('nidn') == $dosen->nidn ? 'selected' : '' }}>{{ $dosen->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Tambah Mahasiswa
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
