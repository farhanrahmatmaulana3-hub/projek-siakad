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
                    <h1 class="h3 font-weight-bold mb-1">Data Dosen</h1>
                    <p class="text-muted small">Kelola data induk dosen.</p>
                </div>
                <a href="{{ route('dosen.create') }}" class="btn-primary-modern">
                    <i class="fa-solid fa-plus"></i> Tambah Dosen
                </a>
            </div>

            <!-- Table Card Wrapper -->
            <div class="table-card-modern">
                <div class="table-responsive">
                    <table class="table modern-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;" class="text-center">No</th>
                                <th style="width: 150px;">NIDN</th>
                                <th>Nama Lengkap</th>
                                <th style="width: 120px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataDosen as $dosen)
                                <tr>
                                    <td class="text-center font-weight-bold align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-muted align-middle font-mono">{{ $dosen->nidn }}</td>
                                    <td class="align-middle font-weight-bold text-dark">{{ $dosen->nama }}</td>
                                    <td class="align-middle text-center">
                                        <div class="action-buttons-wrapper">
                                            <a href="{{ route('dosen.edit', $dosen->nidn) }}" class="btn-action-modern btn-edit-modern" title="Edit Data">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('dosen.destroy', $dosen->nidn) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        <i class="fa-solid fa-folder-open fa-2x mb-2 d-block"></i>
                                        Belum ada data dosen yang tersedia.
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
