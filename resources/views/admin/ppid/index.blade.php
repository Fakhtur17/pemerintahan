@extends('admin.layouts.app')

@section('title', 'PPID')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h4 class="mb-1">
                SK PPID Pelaksana
            </h4>

            <p class="text-muted mb-0">
                Kelola dokumen Surat Keputusan PPID Pelaksana.
            </p>

        </div>


        <a
            href="{{ route('admin.ppid.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg"></i>

            Tambah SK PPID

        </a>

    </div>


    {{-- ALERT --}}

    @if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

    @endif


    {{-- CARD --}}

    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th width="60">
                                No
                            </th>

                            <th>
                                Judul
                            </th>

                            <th>
                                File
                            </th>

                            <th>
                                Status
                            </th>

                            <th width="230">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($ppids as $index => $ppid)

                        <tr>

                            <td>
                                {{ $ppids->firstItem() + $index }}
                            </td>


                            <td>

                                <strong>
                                    {{ $ppid->judul }}
                                </strong>

                                @if($ppid->deskripsi)

                                <div class="small text-muted mt-1">

                                    {{ Str::limit($ppid->deskripsi, 100) }}

                                </div>

                                @endif

                            </td>


                            <td>

                                <a
                                    href="{{ $ppid->file_url }}"
                                    target="_blank"
                                    class="text-decoration-none">

                                    <i class="bi bi-file-earmark-pdf text-danger"></i>

                                    Lihat PDF

                                </a>

                            </td>


                            <td>

                                @if($ppid->aktif)

                                <span class="badge bg-success">
                                    Aktif
                                </span>

                                @else

                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>

                                @endif

                            </td>


                            <td>

                                <div class="d-flex gap-2">

                                    <a
                                        href="{{ route('admin.ppid.edit', $ppid) }}"
                                        class="btn btn-sm btn-warning">

                                        <i class="bi bi-pencil"></i>

                                        Edit

                                    </a>


                                    <form
                                        action="{{ route('admin.ppid.destroy', $ppid) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus dokumen ini?')">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger">

                                            <i class="bi bi-trash"></i>

                                            Hapus

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="5"
                                class="text-center py-5 text-muted">

                                <i
                                    class="bi bi-file-earmark-text fs-2 d-block mb-2"></i>

                                Belum ada dokumen SK PPID Pelaksana.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        @if($ppids->hasPages())

        <div class="card-footer bg-white">

            {{ $ppids->links() }}

        </div>

        @endif

    </div>

</div>

@endsection