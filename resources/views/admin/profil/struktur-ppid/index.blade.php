@extends('admin.layouts.app')

@section('title', 'Struktur PPID')

@section('content')

{{-- HEADER --}}
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h3 class="fw-bold mb-1">
            Struktur PPID
        </h3>

        <p class="text-muted mb-0">
            Kelola gambar struktur organisasi PPID.
        </p>

    </div>


    <a
        href="{{ route('admin.profil.struktur-ppid.create') }}"
        class="btn btn-primary">

        <i class="bi bi-plus-lg me-1"></i>

        Tambah Struktur

    </a>

</div>


{{-- SUCCESS --}}
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


{{-- TABLE --}}
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>

                        <th width="70">
                            No
                        </th>

                        <th width="150">
                            Gambar
                        </th>

                        <th>
                            Judul
                        </th>

                        <th>
                            Deskripsi
                        </th>

                        <th>
                            Tanggal
                        </th>

                        <th
                            width="200"
                            class="text-center">
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


                        {{-- GAMBAR --}}

                        <td>

                            <div
                                style="
                                        width: 120px;
                                        height: 80px;
                                        overflow: hidden;
                                        border-radius: 8px;
                                        border: 1px solid #dee2e6;
                                    ">

                                <img
                                    src="{{ asset('storage/' . $item->gambar) }}"
                                    alt="{{ $item->judul }}"
                                    style="
                                            width: 100%;
                                            height: 100%;
                                            object-fit: cover;
                                        ">

                            </div>

                        </td>


                        {{-- JUDUL --}}

                        <td>

                            <div class="fw-semibold">
                                {{ $item->judul }}
                            </div>

                        </td>


                        {{-- DESKRIPSI --}}

                        <td>

                            <div
                                class="text-muted"
                                style="max-width: 300px;">

                                {{ Str::limit($item->deskripsi, 100) }}

                            </div>

                        </td>


                        {{-- TANGGAL --}}

                        <td>

                            {{ $item->created_at->format('d M Y') }}

                        </td>


                        {{-- AKSI --}}

                        <td>

                            <div
                                class="d-flex justify-content-center gap-2">

                                {{-- LIHAT --}}

                                <a
                                    href="{{ asset('storage/' . $item->gambar) }}"
                                    target="_blank"
                                    class="btn btn-sm btn-outline-primary"
                                    title="Lihat Gambar">

                                    <i class="bi bi-eye"></i>

                                </a>


                                {{-- EDIT --}}

                                <a
                                    href="{{ route('admin.profil.struktur-ppid.edit', $item->id) }}"
                                    class="btn btn-sm btn-outline-warning"
                                    title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- DELETE --}}

                                <form
                                    action="{{ route('admin.profil.struktur-ppid.destroy', $item->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus Struktur PPID ini?')">

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
                            colspan="6"
                            class="text-center py-5">

                            <div class="mb-3">

                                <i
                                    class="bi bi-diagram-3"
                                    style="font-size:50px;"></i>

                            </div>


                            <h6 class="fw-bold">

                                Belum ada Struktur PPID

                            </h6>


                            <p class="text-muted mb-3">

                                Silakan tambahkan gambar Struktur PPID.

                            </p>


                            <a
                                href="{{ route('admin.profil.struktur-ppid.create') }}"
                                class="btn btn-primary">

                                Tambah Struktur

                            </a>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection