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
                    <h1 class="h3 font-weight-bold mb-1">Data Matakuliah</h1>
                    <p class="text-muted small">Kelola data induk matakuliah.</p>
                </div>
                <a href="{{ route('matakuliah.create') }}" class="btn-primary-modern">
                    <i class="fa-solid fa-plus"></i> Tambah Matakuliah
                </a>
            </div>

            <!-- Table Card Wrapper -->
            <div class="table-card-modern">
                <div class="table-responsive">
                    <table class="table modern-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;" class="text-center">No</th>
                                <th style="width: 150px;">Kode</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th style="width: 120px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataMatakuliah as $matakuliah)
                                <tr>
                                    <td class="text-center font-weight-bold align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-muted align-middle font-mono">{{ $matakuliah->kode_matakuliah }}</td>
                                    <td class="align-middle font-weight-bold text-dark">{{ $matakuliah->nama_matakuliah }}</td>
                                    <td class="align-middle text-dark">{{ $matakuliah->sks }}</td>
                                    <td class="align-middle text-center">
                                        <div class="action-buttons-wrapper">
                                            <a href="{{ route('matakuliah.edit', $matakuliah->kode_matakuliah) }}" class="btn-action-modern btn-edit-modern" title="Edit Data">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('matakuliah.destroy', $matakuliah->kode_matakuliah) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-action-modern btn-delete-modern" title="Hapus Data">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="fa-solid fa-folder-open fa-2x mb-2 d-block"></i>
                                        Belum ada data matakuliah yang tersedia.
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
