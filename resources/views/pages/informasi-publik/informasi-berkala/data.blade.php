@extends('layouts.app')

@section('content')


{{-- =========================================================
    BREADCRUMB / HERO
========================================================= --}}

<div class="breadcumb-section fix">

    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">

        <div class="container">

            <div class="shape1">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}"
                    alt="shape">
            </div>

            <div class="shape2">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}"
                    alt="shape">
            </div>

            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>
                        {{ $jenisInformasiBerkala->nama_jenis }}
                    </h1>

                    <p>
                        Informasi publik yang wajib disediakan
                        dan diumumkan secara berkala.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    DATA INFORMASI BERKALA
========================================================= --}}

<section class="regulasi-section">

    <div class="container">


        {{-- =================================================
            BREADCRUMB MINI
        ================================================= --}}

        <div class="mb-4">

            <div class="text-muted small">

                <a
                    href="{{ route('informasi-publik.index') }}"
                    class="text-decoration-none text-muted">
                    Informasi Publik
                </a>

                <span class="mx-2">/</span>

                <a
                    href="{{ route(
                        'informasi-publik.informasi-berkala.index'
                    ) }}"
                    class="text-decoration-none text-muted">
                    Informasi Berkala
                </a>

                <span class="mx-2">/</span>

                <span>
                    {{ $jenisInformasiBerkala->nama_jenis }}
                </span>

            </div>

        </div>
        {{-- =================================================
            TABLE
        ================================================= --}}

        <div class="card border-0 shadow-sm">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table
                        class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th class="px-4">
                                    No
                                </th>

                                <th>
                                    Nama Informasi
                                </th>

                                <th>
                                    Tahun
                                </th>

                                <th>
                                    OPD
                                </th>

                                <th>
                                    Tanggal
                                </th>

                                <th class="text-center">
                                    Dokumen
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($data as $item)

                            <tr>

                                {{-- NO --}}

                                <td class="px-4">

                                    {{ $data->firstItem() + $loop->index }}

                                </td>


                                {{-- NAMA INFORMASI --}}

                                <td>

                                    <div class="fw-semibold">

                                        {{ $item->nama_file ?? '-' }}

                                    </div>

                                    @if($item->keterangan)

                                    <div class="small text-muted">

                                        {{ $item->keterangan }}

                                    </div>

                                    @endif

                                </td>


                                {{-- TAHUN --}}

                                <td>

                                    {{ $item->tahun ?? '-' }}

                                </td>


                                {{-- OPD --}}

                                <td>

                                    {{ $item->nama_skpd ?? '-' }}

                                </td>


                                {{-- TANGGAL --}}

                                <td>

                                    @if($item->tanggal_upload)

                                    {{ $item->tanggal_upload->format('d/m/Y') }}

                                    @else

                                    -

                                    @endif

                                </td>


                                {{-- DOKUMEN --}}

                                <td class="text-center">

                                    @if(
                                    $item->tipe_dokumen === 'file'
                                    && $item->file_path
                                    )

                                    <a
                                        href="{{ $item->dokumen_url }}"
                                        target="_blank"
                                        class="btn btn-sm btn-primary">

                                        <i
                                            class="bi bi-file-earmark-pdf me-1"></i>

                                        Lihat

                                    </a>


                                    @elseif(
                                    $item->tipe_dokumen === 'link'
                                    && $item->link_url
                                    )

                                    <a
                                        href="{{ $item->link_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="btn btn-sm btn-outline-primary">

                                        <i
                                            class="bi bi-box-arrow-up-right me-1"></i>

                                        Buka Link

                                    </a>


                                    @else

                                    <span class="text-muted small">

                                        Tidak tersedia

                                    </span>

                                    @endif

                                </td>

                            </tr>


                            @empty

                            {{-- =================================
                                DATA KOSONG
                            ================================= --}}

                            <tr>

                                <td
                                    colspan="6"
                                    class="text-center py-5">

                                    <i
                                        class="bi bi-file-earmark-x fs-1 text-muted"></i>

                                    <div class="fw-semibold mt-3">

                                        Belum Ada Dokumen

                                    </div>

                                    <div class="text-muted small">

                                        Belum terdapat dokumen untuk
                                        kategori informasi ini.

                                    </div>

                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        {{-- =================================================
            PAGINATION
        ================================================= --}}

        @if($data->hasPages())

        <div class="mt-4">

            {{ $data->links() }}

        </div>

        @endif


    </div>

</section>


@endsection