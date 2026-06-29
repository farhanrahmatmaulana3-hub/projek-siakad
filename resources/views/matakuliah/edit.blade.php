@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
    <div class="form-page">
        <div class="form-wrapper">
            <a href="{{ route('matakuliah.index') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Matakuliah
            </a>
            <div class="form-card">
                <h1>Edit Matakuliah</h1>
                <form action="{{ route('matakuliah.update', $dataMatakuliah->kode_matakuliah) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_matakuliah">Kode Matakuliah</label>
                        <input type="text" name="kode_matakuliah" id="kode_matakuliah" value="{{ $dataMatakuliah->kode_matakuliah }}" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_matakuliah">Nama Matakuliah</label>
                        <input type="text" name="nama_matakuliah" id="nama_matakuliah" placeholder="Masukan matakuliah" value="{{ old('nama_matakuliah', $dataMatakuliah->nama_matakuliah) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="number" name="sks" id="sks" placeholder="Masukan SKS" value="{{ old('sks', $dataMatakuliah->sks) }}" required min="1" max="6">
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Edit Matakuliah
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
