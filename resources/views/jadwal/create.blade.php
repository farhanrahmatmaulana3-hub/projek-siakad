@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
    <div class="form-page">
        <div class="form-wrapper">
            <a href="{{ route('jadwal.index') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Jadwal
            </a>
            <div class="form-card">
                <h1>Tambah Jadwal</h1>
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_matakuliah">Kode Matakuliah</label>
                        <select name="kode_matakuliah" id="kode_matakuliah" required>
                            <option value="" disabled selected>Pilih Kode Matakuliah</option>
                            @foreach ($dataMatakuliah as $matakuliah)
                                <option value="{{ $matakuliah->kode_matakuliah }}" {{ old('kode_matakuliah') == $matakuliah->kode_matakuliah ? 'selected' : '' }}>{{ $matakuliah->nama_matakuliah }} ({{ $matakuliah->kode_matakuliah }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nidn">Dosen</label>
                        <select name="nidn" id="nidn" required>
                            <option value="" disabled selected>Pilih Dosen</option>
                            @foreach ($dataDosen as $dosen)
                                <option value="{{ $dosen->nidn }}" {{ old('nidn') == $dosen->nidn ? 'selected' : '' }}>{{ $dosen->nama }} ({{ $dosen->nidn }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" placeholder="Masukkan Kelas" value="{{ old('kelas') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select name="hari" id="hari" required>
                            <option value="" disabled selected>Pilih Hari</option>
                            <option value="Senin" {{ old('hari') == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ old('hari') == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ old('hari') == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ old('hari') == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ old('hari') == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                            <option value="Sabtu" {{ old('hari') == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="time" name="jam" id="jam" placeholder="Masukkan Jam" value="{{ old('jam') }}" required>
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Tambah Jadwal
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
