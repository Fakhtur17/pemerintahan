@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            <div class="text-muted small mb-2">
                Berita
            </div>

            <h4 class="fw-bold mb-1">
                Berita Kecamatan
            </h4>

            <p class="text-muted mb-0">
                Kelola berita dan informasi kegiatan kecamatan.
            </p>
        </div>

        <a
            href="{{ route('admin.berita.create') }}"
            class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>
            Tambah Berita
        </a>

    </div>


    {{-- ALERT --}}
    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- VALIDATION ERROR --}}
    @if($errors->any())

    <div class="alert alert-danger">

        <strong>
            Terdapat kesalahan:
        </strong>

        <ul class="mb-0 mt-2">

            @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif


    {{-- FILTER --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body">

            <form
                method="GET"
                action="{{ route('admin.berita.index') }}">

                <div class="row g-3">

                    {{-- SEARCH --}}
                    <div class="col-md-4">

                        <label class="form-label">
                            Cari Judul
                        </label>

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Cari judul berita..."
                            value="{{ request('search') }}">

                    </div>


                    {{-- JENIS --}}
                    <div class="col-md-3">

                        <label class="form-label">
                            Jenis Berita
                        </label>

                        <select
                            name="jenis"
                            class="form-select">

                            <option value="">
                                Semua Jenis
                            </option>

                            @foreach($jenisBerita as $jenis)

                            <option
                                value="{{ $jenis }}"
                                @selected(request('jenis')===$jenis)>
                                {{ $jenis }}
                            </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- STATUS --}}
                    <div class="col-md-2">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="">
                                Semua
                            </option>

                            <option
                                value="draft"
                                @selected(request('status')==='draft' )>
                                Draft
                            </option>

                            <option
                                value="terbit"
                                @selected(request('status')==='terbit' )>
                                Terbit
                            </option>

                        </select>

                    </div>


                    {{-- TANGGAL DARI --}}
                    <div class="col-md-3">

                        <label class="form-label">
                            Tanggal Dari
                        </label>

                        <input
                            type="date"
                            name="tanggal_dari"
                            class="form-control"
                            value="{{ request('tanggal_dari') }}">

                    </div>


                    {{-- TANGGAL SAMPAI --}}
                    <div class="col-md-3">

                        <label class="form-label">
                            Tanggal Sampai
                        </label>

                        <input
                            type="date"
                            name="tanggal_sampai"
                            class="form-control"
                            value="{{ request('tanggal_sampai') }}">

                    </div>


                    {{-- BUTTON --}}
                    <div class="col-md-9 d-flex align-items-end gap-2">

                        <button
                            type="submit"
                            class="btn btn-primary">
                            <i class="bi bi-search me-1"></i>
                            Filter
                        </button>

                        <a
                            href="{{ route('admin.berita.index') }}"
                            class="btn btn-light border">
                            Reset
                        </a>

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

                            <th class="px-3" width="60">
                                No
                            </th>

                            <th width="100">
                                Gambar
                            </th>

                            <th>
                                Berita
                            </th>

                            <th width="180">
                                Jenis
                            </th>

                            <th width="130">
                                Tanggal
                            </th>

                            <th width="100">
                                Status
                            </th>

                            <th width="170">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($berita as $item)

                        <tr>

                            <td class="px-3">
                                {{ $berita->firstItem() + $loop->index }}
                            </td>


                            {{-- GAMBAR --}}
                            <td>

                                @if($item->gambar)

                                <img
                                    src="{{ asset('storage/' . $item->gambar) }}"
                                    alt="{{ $item->judul }}"
                                    class="rounded"
                                    style="
                                                width: 80px;
                                                height: 60px;
                                                object-fit: cover;
                                            ">

                                @else

                                <div
                                    class="bg-light rounded d-flex align-items-center justify-content-center"
                                    style="
                                                width: 80px;
                                                height: 60px;
                                            ">
                                    <i class="bi bi-image text-muted fs-4"></i>
                                </div>

                                @endif

                            </td>


                            {{-- BERITA --}}
                            <td>

                                <div class="fw-semibold">
                                    {{ $item->judul }}
                                </div>

                                @if($item->ringkasan)

                                <div class="text-muted small mt-1">

                                    {{ \Illuminate\Support\Str::limit(
                                                strip_tags($item->ringkasan),
                                                100
                                            ) }}

                                </div>

                                @endif

                            </td>


                            {{-- JENIS --}}
                            <td>

                                <span class="badge bg-light text-dark border">
                                    {{ $item->jenis }}
                                </span>

                            </td>


                            {{-- TANGGAL --}}
                            <td>

                                {{ $item->tanggal->format('d-m-Y') }}

                            </td>


                            {{-- STATUS --}}
                            <td>

                                @if($item->status === 'terbit')

                                <span class="badge bg-success">
                                    Terbit
                                </span>

                                @else

                                <span class="badge bg-warning text-dark">
                                    Draft
                                </span>

                                @endif

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex gap-1">

                                    <a
                                        href="{{ route(
                                                'admin.berita.show',
                                                $item
                                            ) }}"
                                        class="btn btn-sm btn-outline-secondary"
                                        title="Lihat">
                                        <i class="bi bi-eye"></i>
                                    </a>


                                    <a
                                        href="{{ route(
                                                'admin.berita.edit',
                                                $item
                                            ) }}"
                                        class="btn btn-sm btn-outline-primary"
                                        title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>


                                    <form
                                        action="{{ route(
                                                'admin.berita.destroy',
                                                $item
                                            ) }}"
                                        method="POST"
                                        onsubmit="return confirm(
                                                'Yakin ingin menghapus berita ini?'
                                            )">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus">
                                            <i class="bi bi-trash"></i>
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

                                    <i class="bi bi-newspaper fs-1 d-block mb-3"></i>

                                    Belum ada berita.

                                </div>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        {{-- PAGINATION --}}
        @if($berita->hasPages())

        <div class="card-footer bg-white border-0">

            {{ $berita->links() }}

        </div>

        @endif

    </div>

</div>

@endsection