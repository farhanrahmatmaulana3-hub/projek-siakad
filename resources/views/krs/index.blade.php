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
                    <h1 class="h3 font-weight-bold mb-1">Data KRS</h1>
                    <p class="text-muted small">Kelola kartu rencana studi mahasiswa.</p>
                </div>
                <div class="action-buttons-wrapper d-flex gap-2">
                    <a href="{{ route('krs.create') }}" class="btn-primary-modern">
                        <i class="fa-solid fa-plus"></i> Tambah KRS
                    </a>
                    <a href="{{ route('krs.export') }}" class="btn-action-modern btn-edit-modern">
                        <i class="fa-solid fa-file-arrow-up"></i> Export PDF
                    </a>
                </div>
            </div>

            <!-- Table Card Wrapper -->
            <div class="table-card-modern">
                <div class="table-responsive">
                    <table class="table modern-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;" class="text-center">No</th>
                                <th>NPM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Matakuliah</th>
                                <th style="width: 120px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataKrs as $krs)
                                <tr>
                                    <td class="text-center font-weight-bold align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-muted align-middle font-mono">{{ $krs->npm }}</td>
                                    <td class="align-middle text-dark">{{ $krs->mahasiswa->nama ?? '-' }}</td>
                                    <td class="align-middle text-dark">{{ $krs->matakuliah->nama_matakuliah ?? '-' }}</td>
                                    <td class="align-middle text-center">
                                        <form action="{{ route('krs.destroy', $krs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action-modern btn-delete-modern" title="Hapus Data">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="fa-solid fa-folder-open fa-2x mb-2 d-block"></i>
                                        Belum ada data KRS yang tersedia.
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
