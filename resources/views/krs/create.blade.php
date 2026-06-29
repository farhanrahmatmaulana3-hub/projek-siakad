@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
    <div class="form-page">
        <div class="form-wrapper">
            <a href="{{ route('krs.index') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar KRS
            </a>
            <div class="form-card">
                <h1>Tambah KRS</h1>
                <form action="{{ route('krs.store') }}" method="POST">
                    @csrf
                    @if (auth()->user()->role === 'admin')
                        <div class="form-group">
                            <label for="npm">Mahasiswa</label>
                            <select name="npm" id="npm" required>
                                <option value="" disabled selected>Pilih Mahasiswa</option>
                                @foreach ($dataMahasiswa as $mahasiswa)
                                    <option value="{{ $mahasiswa->npm }}" {{ old('npm') == $mahasiswa->npm ? 'selected' : '' }}>{{ $mahasiswa->nama }} ({{ $mahasiswa->npm }})</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <input type="hidden" name="npm" value="{{ auth()->user()->npm }}">
                        <div class="form-group">
                            <label>Mahasiswa</label>
                            <input type="text" value="{{ auth()->user()->name }}" disabled>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="kode_matakuliah">Matakuliah</label>
                        <select name="kode_matakuliah" id="kode_matakuliah" required>
                            <option value="" disabled selected>Pilih Matakuliah</option>
                            @foreach ($dataMatakuliah as $matakuliah)
                                <option value="{{ $matakuliah->kode_matakuliah }}" {{ old('kode_matakuliah') == $matakuliah->kode_matakuliah ? 'selected' : '' }}>{{ $matakuliah->nama_matakuliah }} ({{ $matakuliah->sks }} SKS)</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Tambah KRS
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
