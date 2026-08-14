@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}

    <div class="d-flex justify-content-between
                align-items-start mb-4">

        <div>

            <div class="text-muted small mb-2">

                Informasi Publik
                <span class="mx-1">/</span>
                Informasi Berkala

            </div>

            <h4 class="fw-bold mb-1">
                Informasi Berkala
            </h4>

            <p class="text-muted mb-0">
                Daftar jenis informasi yang tersedia
                dalam Informasi Berkala.
            </p>

        </div>


        <a href="{{ route(
            'admin.informasi-publik.informasi-berkala.jenis.create'
        ) }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>

            Tambah Jenis Informasi

        </a>

    </div>


    {{-- ALERT SUCCESS --}}

    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        <i class="bi bi-check-circle me-2"></i>

        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- TABLE --}}

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white border-0 py-3">

            <div class="d-flex justify-content-between
                        align-items-center">

                <h6 class="fw-bold mb-0">
                    Daftar Jenis Informasi
                </h6>

                <span class="text-muted small">

                    Total {{ $jenisInformasi->total() }} jenis

                </span>

            </div>

        </div>


        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover
                              align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th class="text-center"
                                style="width:70px;">
                                No
                            </th>

                            <th>
                                Jenis Informasi
                            </th>

                            <th style="width:160px;">
                                Jumlah Data
                            </th>

                            <th style="width:120px;">
                                Status
                            </th>

                            <th class="text-center"
                                style="width:190px;">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse(
                        $jenisInformasi
                        as $item
                        )

                        <tr>

                            <td class="text-center">

                                {{
                                        $jenisInformasi->firstItem()
                                        + $loop->index
                                    }}

                            </td>


                            <td>

                                <div class="fw-semibold">

                                    {{ $item->nama_jenis }}

                                </div>


                                @if($item->deskripsi)

                                <small class="text-muted">

                                    {{ Str::limit(
                                                $item->deskripsi,
                                                100
                                            ) }}

                                </small>

                                @endif

                            </td>


                            <td>

                                <span class="badge
                                                 rounded-pill
                                                 bg-primary-subtle
                                                 text-primary px-3 py-2">

                                    {{ $item->data_count }}

                                    Data

                                </span>

                            </td>


                            <td>

                                @if($item->aktif)

                                <span class="badge bg-success">

                                    Aktif

                                </span>

                                @else

                                <span class="badge bg-secondary">

                                    Nonaktif

                                </span>

                                @endif

                            </td>


                            <td class="text-center">

                                {{-- KELOLA --}}

                                <a href="{{ route(
                                        'admin.informasi-publik.informasi-berkala.data.index',
                                        $item
                                    ) }}"
                                    class="btn btn-sm btn-primary"
                                    title="Kelola Data">

                                    <i class="bi bi-folder2-open"></i>

                                    Kelola

                                </a>


                                {{-- EDIT --}}

                                <a href="{{ route(
                                        'admin.informasi-publik.informasi-berkala.jenis.edit',
                                        $item
                                    ) }}"
                                    class="btn btn-sm
                                           btn-outline-warning"
                                    title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- HAPUS --}}

                                <form action="{{ route(
                                        'admin.informasi-publik.informasi-berkala.jenis.destroy',
                                        $item
                                    ) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm(
                                        'Hapus jenis informasi ini? Semua data di dalamnya juga akan terhapus.'
                                    )">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                        class="btn btn-sm
                                                       btn-outline-danger">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="5"
                                class="text-center py-5">

                                <i class="bi bi-inbox
                                              fs-1 text-muted">
                                </i>

                                <p class="text-muted mt-2 mb-1">

                                    Belum ada jenis informasi.

                                </p>

                                <small class="text-muted">

                                    Silakan tambahkan jenis
                                    informasi terlebih dahulu.

                                </small>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        @if($jenisInformasi->hasPages())

        <div class="card-footer bg-white">

            {{ $jenisInformasi->links() }}

        </div>

        @endif

    </div>


    <div class="mt-3">

        <a href="{{ route(
            'admin.informasi-publik.index'
        ) }}"
            class="text-decoration-none">

            <i class="bi bi-arrow-left me-1"></i>

            Kembali ke Informasi Publik

        </a>

    </div>

</div>

@endsection