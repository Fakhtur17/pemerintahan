@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between
                align-items-start mb-4">

        <div>

            <div class="text-muted small mb-2">
                Potensi Kecamatan
            </div>

            <h4 class="fw-bold mb-1">
                Potensi Kecamatan
            </h4>

            <p class="text-muted mb-0">
                Kelola data potensi unggulan kecamatan.
            </p>

        </div>

        <a
            href="{{ route('admin.potensi-kecamatan.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>

            Tambah Potensi

        </a>

    </div>


    {{-- ALERT SUCCESS --}}
    @if(session('success'))

    <div
        class="alert alert-success alert-dismissible fade show"
        role="alert">

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- FILTER --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body">

            <form
                action="{{ route('admin.potensi-kecamatan.index') }}"
                method="GET">

                <div class="row g-3">

                    {{-- SEARCH --}}
                    <div class="col-md-5">

                        <label class="form-label fw-semibold">
                            Cari
                        </label>

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Cari judul atau lokasi..."
                            value="{{ request('search') }}">

                    </div>


                    {{-- JENIS --}}
                    <div class="col-md-3">

                        <label class="form-label fw-semibold">
                            Jenis Potensi
                        </label>

                        <select
                            name="jenis"
                            class="form-select">

                            <option value="">
                                Semua Jenis
                            </option>

                            @foreach($jenisOptions as $key => $label)

                            <option
                                value="{{ $key }}"
                                @selected(request('jenis')===$key)>

                                {{ $label }}

                            </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- STATUS --}}
                    <div class="col-md-2">

                        <label class="form-label fw-semibold">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="">
                                Semua
                            </option>

                            <option
                                value="1"
                                @selected(request('status')==='1' )>

                                Aktif

                            </option>

                            <option
                                value="0"
                                @selected(request('status')==='0' )>

                                Nonaktif

                            </option>

                        </select>

                    </div>


                    {{-- BUTTON --}}
                    <div class="col-md-2 d-flex align-items-end">

                        <button
                            type="submit"
                            class="btn btn-primary w-100">

                            <i class="bi bi-search me-1"></i>

                            Filter

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>


    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th
                                width="60"
                                class="text-center">

                                #

                            </th>

                            <th
                                width="100">

                                Gambar

                            </th>

                            <th>
                                Potensi
                            </th>

                            <th>
                                Jenis
                            </th>

                            <th>
                                Lokasi
                            </th>

                            <th>
                                Status
                            </th>

                            <th
                                width="150"
                                class="text-center">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($data as $potensi)

                        <tr>

                            <td class="text-center">

                                {{ $data->firstItem() + $loop->index }}

                            </td>


                            {{-- GAMBAR --}}
                            <td>

                                @if($potensi->gambar)

                                <img
                                    src="{{ $potensi->gambar_url }}"
                                    alt="{{ $potensi->judul }}"
                                    class="rounded"
                                    style="
                                                width: 75px;
                                                height: 55px;
                                                object-fit: cover;
                                            ">

                                @else

                                <div
                                    class="bg-light rounded
                                                   d-flex align-items-center
                                                   justify-content-center"
                                    style="
                                                width:75px;
                                                height:55px;
                                            ">

                                    <i
                                        class="bi bi-image
                                                       text-muted">
                                    </i>

                                </div>

                                @endif

                            </td>


                            {{-- JUDUL --}}
                            <td>

                                <div class="fw-semibold">

                                    {{ $potensi->judul }}

                                </div>

                                <div class="small text-muted">

                                    {{ $potensi->created_at?->format('d M Y') }}

                                </div>

                            </td>


                            {{-- JENIS --}}
                            <td>

                                <span
                                    class="badge bg-primary-subtle
                                               text-primary">

                                    {{ $potensi->jenis_label }}

                                </span>

                            </td>


                            {{-- LOKASI --}}
                            <td>

                                @if($potensi->lokasi)

                                <span class="text-muted">

                                    <i
                                        class="bi bi-geo-alt me-1">
                                    </i>

                                    {{ $potensi->lokasi }}

                                </span>

                                @else

                                <span class="text-muted">
                                    -
                                </span>

                                @endif

                            </td>


                            {{-- STATUS --}}
                            <td>

                                @if($potensi->is_active)

                                <span
                                    class="badge bg-success">

                                    Aktif

                                </span>

                                @else

                                <span
                                    class="badge bg-secondary">

                                    Nonaktif

                                </span>

                                @endif

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div
                                    class="d-flex
                                               justify-content-center
                                               gap-2">

                                    <a
                                        href="{{ route(
                                                'admin.potensi-kecamatan.edit',
                                                $potensi
                                            ) }}"
                                        class="btn btn-sm
                                                   btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <form
                                        action="{{ route(
                                                'admin.potensi-kecamatan.destroy',
                                                $potensi
                                            ) }}"
                                        method="POST"
                                        onsubmit="return confirm(
                                                'Yakin ingin menghapus potensi ini?'
                                            )">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm
                                                       btn-outline-danger">

                                            <i
                                                class="bi bi-trash">
                                            </i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="7"
                                class="text-center py-5">

                                <div class="text-muted">

                                    <i
                                        class="bi bi-inbox fs-2 d-block mb-2">
                                    </i>

                                    Belum ada data potensi.

                                </div>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        @if($data->hasPages())

        <div class="card-footer bg-white">

            {{ $data->links() }}

        </div>

        @endif

    </div>

</div>

@endsection