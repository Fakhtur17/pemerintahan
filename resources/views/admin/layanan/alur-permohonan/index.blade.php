@extends('admin.layouts.app')

@section('title', 'Alur Permohonan')

@section('content')

<div class="container-fluid">

    {{-- =========================================================
        HEADER
    ========================================================== --}}

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">
                Alur Permohonan Informasi Publik
            </h4>

            <p class="text-muted mb-0">
                Kelola dokumen Alur Permohonan Informasi Publik.
            </p>
        </div>

        <a
            href="{{ route('admin.layanan.alur-permohonan.create') }}"
            class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>
            Tambah Alur Permohonan
        </a>

    </div>


    {{-- =========================================================
        ALERT
    ========================================================== --}}

    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        <i class="bi bi-check-circle me-2"></i>

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>

    </div>

    @endif


    {{-- =========================================================
        TABLE
    ========================================================== --}}

    <div class="card border-0 shadow-sm">


        <div class="card-body p-0">

            @if($alurPermohonans->count())

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th width="70">
                                No
                            </th>

                            <th>
                                Judul
                            </th>

                            <th>
                                File PDF
                            </th>

                            <th>
                                Status
                            </th>

                            <th width="250">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($alurPermohonans as $index => $alurPermohonan)

                        <tr>

                            <td>
                                {{ $alurPermohonans->firstItem() + $index }}
                            </td>


                            <td>

                                <div class="d-flex align-items-center">

                                    <div
                                        class="bg-danger bg-opacity-10 rounded p-2 me-3">

                                        <i
                                            class="bi bi-file-earmark-pdf-fill text-danger fs-4"></i>

                                    </div>

                                    <div>

                                        <div class="fw-semibold">
                                            {{ $alurPermohonan->judul }}
                                        </div>

                                        <small class="text-muted">
                                            {{ $alurPermohonan->created_at->format('d M Y') }}
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="text-muted">

                                    <i class="bi bi-file-earmark-pdf me-1"></i>

                                    Dokumen PDF

                                </span>

                            </td>


                            <td>

                                @if($alurPermohonan->is_active)

                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>
                                    Aktif
                                </span>

                                @else

                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>

                                @endif

                            </td>


                            <td>

                                {{-- Preview --}}
                                <a
                                    href="{{ asset('storage/' . $alurPermohonan->file_pdf) }}"
                                    target="_blank"
                                    class="btn btn-sm btn-outline-primary"
                                    title="Lihat PDF">
                                    <i class="bi bi-eye"></i>
                                </a>


                                {{-- Edit --}}
                                <a
                                    href="{{ route(
                                                'admin.layanan.alur-permohonan.edit',
                                                $alurPermohonan
                                            ) }}"
                                    class="btn btn-sm btn-outline-warning"
                                    title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>


                                {{-- Delete --}}
                                <form
                                    action="{{ route(
                                                'admin.layanan.alur-permohonan.destroy',
                                                $alurPermohonan
                                            ) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus dokumen ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


            {{-- Pagination --}}

            <div class="p-3">

                {{ $alurPermohonans->links() }}

            </div>

            @else

            <div class="text-center py-5">

                <i
                    class="bi bi-file-earmark-pdf text-muted"
                    style="font-size: 60px;"></i>

                <h5 class="fw-bold mt-3">
                    Belum Ada Dokumen
                </h5>

                <p class="text-muted">
                    Belum ada dokumen Alur Permohonan yang ditambahkan.
                </p>

                <a
                    href="{{ route('admin.layanan.alur-permohonan.create') }}"
                    class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i>
                    Tambah Dokumen
                </a>

            </div>

            @endif

        </div>

    </div>

</div>

@endsection