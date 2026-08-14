@extends('admin.layouts.app')

@section('title', 'SOP PPID')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">
                SOP PPID
            </h4>

            <p class="text-muted mb-0">
                Kelola dokumen SOP PPID Kabupaten Brebes.
            </p>
        </div>

        <a
            href="{{ route('admin.layanan.sop-ppid.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg"></i>

            Tambah SOP

        </a>

    </div>


    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th width="60">
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

                            <th width="200">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($sops as $sop)

                        <tr>

                            <td>
                                {{ $sops->firstItem() + $loop->index }}
                            </td>

                            <td>

                                <strong>
                                    {{ $sop->judul }}
                                </strong>

                            </td>

                            <td>

                                <a
                                    href="{{ asset('storage/' . $sop->file_pdf) }}"
                                    target="_blank"
                                    class="btn btn-sm btn-outline-danger">

                                    <i class="bi bi-file-earmark-pdf"></i>

                                    Lihat PDF

                                </a>

                            </td>

                            <td>

                                @if($sop->is_active)

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
                                        href="{{ route('admin.layanan.sop-ppid.edit', $sop) }}"
                                        class="btn btn-sm btn-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <form
                                        action="{{ route('admin.layanan.sop-ppid.destroy', $sop) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus SOP ini?')">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger">

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
                                class="text-center py-5">

                                <i class="bi bi-file-earmark-pdf fs-1 text-muted"></i>

                                <p class="text-muted mt-2 mb-0">
                                    Belum ada dokumen SOP PPID.
                                </p>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <div class="mt-3">

                {{ $sops->links() }}

            </div>

        </div>

    </div>

</div>

@endsection