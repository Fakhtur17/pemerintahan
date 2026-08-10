@extends('admin.layouts.app')

@section('title', 'Tupoksi PPID')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Tupoksi PPID
            </h3>

            <p class="text-muted mb-0">
                Kelola dokumen Tugas Pokok dan Fungsi PPID.
            </p>
        </div>

        <a
            href="{{ route('admin.profil.tupoksi-ppid.create') }}"
            class="btn btn-primary"
        >
            <i class="bi bi-plus-lg me-1"></i>
            Tambah Tupoksi
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

                            <th>
                                Judul
                            </th>

                            <th>
                                File PDF
                            </th>

                            <th>
                                Tanggal
                            </th>

                            <th
                                width="200"
                                class="text-center"
                            >
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

                                    <div class="fw-semibold">
                                        {{ $item->judul }}
                                    </div>

                                </td>


                                <td>

                                    <span class="badge bg-danger">

                                        <i class="bi bi-file-earmark-pdf"></i>

                                        PDF

                                    </span>

                                </td>


                                <td>

                                    {{ $item->created_at->format('d M Y') }}

                                </td>


                                <td>

                                    <div
                                        class="d-flex justify-content-center gap-2"
                                    >

                                        {{-- LIHAT --}}

                                        <a
                                            href="{{ asset('storage/' . $item->file_pdf) }}"
                                            target="_blank"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Lihat PDF"
                                        >

                                            <i class="bi bi-eye"></i>

                                        </a>


                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route('admin.profil.tupoksi-ppid.edit', $item->id) }}"
                                            class="btn btn-sm btn-outline-warning"
                                            title="Edit"
                                        >

                                            <i class="bi bi-pencil"></i>

                                        </a>


                                        {{-- DELETE --}}

                                        <form
                                            action="{{ route('admin.profil.tupoksi-ppid.destroy', $item->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus Tupoksi PPID ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Hapus"
                                            >

                                                <i class="bi bi-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="5"
                                    class="text-center py-5"
                                >

                                    <div class="mb-3">

                                        <i
                                            class="bi bi-file-earmark-pdf"
                                            style="font-size:50px;"
                                        ></i>

                                    </div>

                                    <h6 class="fw-bold">
                                        Belum ada Tupoksi PPID
                                    </h6>

                                    <p class="text-muted mb-3">
                                        Silakan tambahkan dokumen Tupoksi PPID.
                                    </p>

                                    <a
                                        href="{{ route('admin.profil.tupoksi-ppid.create') }}"
                                        class="btn btn-primary"
                                    >
                                        Tambah Tupoksi
                                    </a>

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