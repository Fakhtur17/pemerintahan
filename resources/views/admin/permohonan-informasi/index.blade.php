@extends('admin.layouts.app')

@section('title', 'Permohonan Informasi')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">
                Permohonan Informasi
            </h4>

            <p class="text-muted mb-0">
                Kelola data permohonan informasi dari masyarakat.
            </p>
        </div>

        <a
            href="{{ route('admin.permohonan-informasi.create') }}"
            class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>
            Tambah Permohonan
        </a>

    </div>


    {{-- SUCCESS --}}
    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        <i class="fas fa-check-circle me-2"></i>

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- ERROR --}}
    @if(session('error'))

    <div class="alert alert-danger alert-dismissible fade show">

        <i class="fas fa-exclamation-circle me-2"></i>

        {{ session('error') }}

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

                    <thead class="table-light">

                        <tr>

                            <th width="50">
                                No
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                No HP
                            </th>

                            <th>
                                Informasi yang Diminta
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Tanggal
                            </th>

                            <th
                                width="150"
                                class="text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($permohonans as $item)

                        <tr>

                            {{-- NO --}}
                            <td>
                                {{ $permohonans->firstItem() + $loop->index }}
                            </td>


                            {{-- NAMA --}}
                            <td>

                                <strong>
                                    {{ $item->nama }}
                                </strong>

                                <br>

                                <small class="text-muted">
                                    NIK: {{ $item->nik }}
                                </small>

                            </td>


                            {{-- EMAIL --}}
                            <td>
                                {{ $item->email }}
                            </td>


                            {{-- NO HP --}}
                            <td>
                                {{ $item->no_hp }}
                            </td>


                            {{-- INFORMASI DIMINTA --}}
                            <td>

                                <span
                                    title="{{ $item->informasi_diminta }}">
                                    {{ \Illuminate\Support\Str::limit(
                                            $item->informasi_diminta,
                                            60
                                        ) }}
                                </span>

                            </td>


                            {{-- STATUS --}}
                            <td>

                                @if($item->status === 'baru')

                                <span class="badge bg-primary">
                                    Baru
                                </span>

                                @elseif($item->status === 'diproses')

                                <span class="badge bg-warning text-dark">
                                    Diproses
                                </span>

                                @elseif($item->status === 'selesai')

                                <span class="badge bg-success">
                                    Selesai
                                </span>

                                @elseif($item->status === 'ditolak')

                                <span class="badge bg-danger">
                                    Ditolak
                                </span>

                                @else

                                <span class="badge bg-secondary">
                                    {{ ucfirst($item->status) }}
                                </span>

                                @endif

                            </td>


                            {{-- TANGGAL --}}
                            <td>

                                {{ $item->created_at
                                        ? $item->created_at->format('d/m/Y')
                                        : '-' }}

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex justify-content-center gap-1">

                                    {{-- DETAIL --}}
                                    <a
                                        href="{{ route(
                                                'admin.permohonan-informasi.show',
                                                $item
                                            ) }}"
                                        class="btn btn-sm btn-info text-white"
                                        title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>


                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route(
                                                'admin.permohonan-informasi.edit',
                                                $item
                                            ) }}"
                                        class="btn btn-sm btn-warning"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route(
                                                'admin.permohonan-informasi.destroy',
                                                $item
                                            ) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus permohonan ini?')"
                                        class="d-inline">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger"
                                            title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="8"
                                class="text-center py-5">

                                <i
                                    class="fas fa-inbox fa-3x text-muted mb-3"></i>

                                <h6>
                                    Belum ada permohonan informasi.
                                </h6>

                                <p class="text-muted mb-3">
                                    Data permohonan dari masyarakat
                                    akan muncul di sini.
                                </p>

                                <a
                                    href="{{ route(
                                            'admin.permohonan-informasi.create'
                                        ) }}"
                                    class="btn btn-primary">

                                    <i class="fas fa-plus me-1"></i>

                                    Tambah Permohonan

                                </a>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            {{-- PAGINATION --}}
            @if($permohonans->hasPages())

            <div class="mt-4">

                {{ $permohonans->links() }}

            </div>

            @endif

        </div>

    </div>

</div>

@endsection