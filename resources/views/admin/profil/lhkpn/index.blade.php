@extends('admin.layouts.app')

@section('title', 'LHKPN')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                LHKPN
            </h3>

            <p class="text-muted mb-0">
                Kelola data Laporan Harta Kekayaan Penyelenggara Negara.
            </p>
        </div>

        <a
            href="{{ route('admin.profil.lhkpn.create') }}"
            class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>
            Tambah LHKPN
        </a>

    </div>


    {{-- ALERT --}}
    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        <i class="fas fa-check-circle me-2"></i>

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>

    </div>

    @endif


    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th width="60">
                                No
                            </th>

                            <th>
                                Tahun
                            </th>

                            <th>
                                Nama SKPD/Badan Publik
                            </th>

                            <th>
                                Tanggal Upload
                            </th>

                            <th>
                                File PDF
                            </th>

                            <th>
                                Keterangan
                            </th>

                            <th width="150">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($data as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $item->tahun }}
                            </td>

                            <td>
                                {{ $item->nama_skpd }}
                            </td>

                            <td>
                                {{ $item->tanggal_upload?->format('d-m-Y') }}
                            </td>

                            <td>

                                @if($item->file_pdf)

                                <a
                                    href="{{ asset('storage/' . $item->file_pdf) }}"
                                    target="_blank"
                                    class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-file-pdf me-1"></i>
                                    Lihat PDF
                                </a>

                                @else

                                <span class="text-muted">
                                    Tidak ada file
                                </span>

                                @endif

                            </td>

                            <td>
                                {{ $item->keterangan }}
                            </td>

                            <td>

                                <div class="d-flex gap-1">

                                    <a
                                        href="{{ route('admin.profil.lhkpn.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>


                                    <form
                                        action="{{ route('admin.profil.lhkpn.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data LHKPN ini?')">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger"
                                            title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="7"
                                class="text-center py-4 text-muted">
                                Belum ada data LHKPN.

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