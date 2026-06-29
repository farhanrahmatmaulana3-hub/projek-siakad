@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dosen.css') }}">
@endsection

@section('content')
    <div class="container py-4"> 
        <div class="modern-content-wrapper">
            
            <!-- Header Section -->
            <div class="table-header-section mb-4">
                <div class="header-title">
                    <h1 class="h3 font-weight-bold mb-1">Data Jadwal</h1>
                    <p class="text-muted small">Kelola data jadwal perkuliahan.</p>
                </div>
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('jadwal.create') }}" class="btn-primary-modern">
                        <i class="fa-solid fa-plus"></i> Tambah Jadwal
                    </a>
                @endif
            </div>

            <!-- Table Card Wrapper -->
            <div class="table-card-modern">
                <div class="table-responsive">
                    <table class="table modern-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 50px;" class="text-center">No</th>
                                <th>Kode MK</th>
                                <th>Mata Kuliah</th>
                                <th>Nama Dosen</th>
                                <th>Kelas</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                @if (auth()->user()->role === 'admin')
                                    <th style="width: 120px;" class="text-center">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataJadwal as $jadwal)
                                <tr>
                                    <td class="text-center font-weight-bold align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-muted align-middle font-mono">{{ $jadwal->kode_matakuliah }}</td>
                                    <td class="align-middle text-dark">{{ $jadwal->matakuliah->nama_matakuliah ?? '-' }}</td>
                                    <td class="align-middle text-dark">{{ $jadwal->dosen->nama ?? '-' }}</td>
                                    <td class="align-middle text-dark">{{ $jadwal->kelas }}</td>
                                    <td class="align-middle text-dark">{{ $jadwal->hari }}</td>
                                    <td class="align-middle text-dark">{{ $jadwal->jam }}</td>
                                    @if (auth()->user()->role === 'admin')
                                        <td class="align-middle text-center">
                                            <div class="action-buttons-wrapper">
                                                <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn-action-modern btn-edit-modern" title="Edit Data">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-action-modern btn-delete-modern" title="Hapus Data">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ auth()->user()->role === 'admin' ? 8 : 7 }}" class="text-center py-5 text-muted">
                                        <i class="fa-solid fa-folder-open fa-2x mb-2 d-block"></i>
                                        Belum ada data jadwal yang tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
