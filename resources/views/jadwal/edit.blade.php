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
                <h1>Edit Jadwal</h1>
                <form action="{{ route('jadwal.update', $dataJadwal->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_matakuliah">Kode Matakuliah</label>
                        <select name="kode_matakuliah" id="kode_matakuliah" required>
                            <option value="" disabled>Pilih Kode Matakuliah</option>
                            @foreach ($dataMatakuliah as $matakuliah)
                                <option value="{{ $matakuliah->kode_matakuliah }}" {{ old('kode_matakuliah', $dataJadwal->kode_matakuliah) == $matakuliah->kode_matakuliah ? 'selected' : '' }}>{{ $matakuliah->nama_matakuliah }} ({{ $matakuliah->kode_matakuliah }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nidn">Dosen</label>
                        <select name="nidn" id="nidn" required>
                            <option value="" disabled>Pilih Dosen</option>
                            @foreach ($dataDosen as $dosen)
                                <option value="{{ $dosen->nidn }}" {{ old('nidn', $dataJadwal->nidn) == $dosen->nidn ? 'selected' : '' }}>{{ $dosen->nama }} ({{ $dosen->nidn }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" placeholder="Masukkan Kelas" value="{{ old('kelas', $dataJadwal->kelas) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select name="hari" id="hari" required>
                            <option value="" disabled>Pilih Hari</option>
                            <option value="Senin" {{ old('hari', $dataJadwal->hari) == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ old('hari', $dataJadwal->hari) == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ old('hari', $dataJadwal->hari) == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ old('hari', $dataJadwal->hari) == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ old('hari', $dataJadwal->hari) == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                            <option value="Sabtu" {{ old('hari', $dataJadwal->hari) == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="time" name="jam" id="jam" placeholder="Masukkan Jam" value="{{ old('jam', $dataJadwal->jam) }}" required>
                    </div>
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i> Edit Jadwal
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
