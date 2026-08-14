@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between
                align-items-start mb-4">

        <div>

            <div class="text-muted small mb-2">

                Informasi Publik
                /
                Informasi Berkala
                /
                {{ $jenisInformasiBerkala->nama_jenis }}

            </div>

            <h4 class="fw-bold mb-1">

                {{ $jenisInformasiBerkala->nama_jenis }}

            </h4>

            <p class="text-muted mb-0">

                Kelola data dan dokumen informasi.

            </p>

        </div>


        <a href="{{ route(
            'admin.informasi-publik.informasi-berkala.data.create',
            $jenisInformasiBerkala
        ) }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>

            Tambah Data

        </a>

    </div>


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


    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white border-0 py-3">

            <div class="d-flex justify-content-between">

                <h6 class="fw-bold mb-0">

                    Data Informasi

                </h6>

                <span class="text-muted small">

                    Total {{ $dataInformasi->total() }} data

                </span>

            </div>

        </div>


        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover
                              align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th class="text-center">
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
                                Jenis Informasi
                            </th>

                            <th>
                                Keterangan
                            </th>

                            <th class="text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse(
                        $dataInformasi
                        as $item
                        )

                        <tr>

                            <td class="text-center">

                                {{
                                        $dataInformasi->firstItem()
                                        + $loop->index
                                    }}

                            </td>


                            <td>
                                {{ $item->tahun }}
                            </td>


                            <td>

                                <span class="fw-semibold">

                                    {{ $item->nama_skpd }}

                                </span>

                            </td>


                            <td>

                                {{
                                        $item->tanggal_upload
                                            ->format('d-m-Y')
                                    }}

                            </td>


                            <td>

                                @if(
                                $item->tipe_dokumen === 'file'
                                )

                                <a href="{{ $item->dokumen_url }}"
                                    target="_blank"
                                    class="btn btn-sm btn-success">

                                    <i class="bi bi-download me-1"></i>

                                    Unduh

                                </a>

                                @else

                                <a href="{{ $item->dokumen_url }}"
                                    target="_blank"
                                    class="btn btn-sm btn-info text-white">

                                    <i class="bi bi-link-45deg me-1"></i>

                                    Link

                                </a>

                                @endif

                            </td>


                            <td>

                                {{ $item->keterangan ?: '-' }}

                            </td>


                            <td class="text-center">

                                <a href="{{ route(
                                        'admin.informasi-publik.informasi-berkala.data.show',
                                        [
                                            $jenisInformasiBerkala,
                                            $item
                                        ]
                                    ) }}"
                                    class="btn btn-sm
                                           btn-outline-info">

                                    <i class="bi bi-eye"></i>

                                </a>


                                <a href="{{ route(
                                        'admin.informasi-publik.informasi-berkala.data.edit',
                                        [
                                            $jenisInformasiBerkala,
                                            $item
                                        ]
                                    ) }}"
                                    class="btn btn-sm
                                           btn-outline-warning">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <form action="{{ route(
                                        'admin.informasi-publik.informasi-berkala.data.destroy',
                                        [
                                            $jenisInformasiBerkala,
                                            $item
                                        ]
                                    ) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm(
                                        'Yakin ingin menghapus data ini?'
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

                            <td colspan="7"
                                class="text-center py-5">

                                <i class="bi bi-inbox
                                              fs-1 text-muted">
                                </i>

                                <p class="text-muted mt-2">

                                    Belum ada data informasi.

                                </p>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        @if($dataInformasi->hasPages())

        <div class="card-footer bg-white">

            {{ $dataInformasi->links() }}

        </div>

        @endif

    </div>


    <div class="mt-3">

        <a href="{{ route(
            'admin.informasi-publik.informasi-berkala.index'
        ) }}"
            class="text-decoration-none">

            <i class="bi bi-arrow-left me-1"></i>

            Kembali ke Informasi Berkala

        </a>

    </div>

</div>

@endsection