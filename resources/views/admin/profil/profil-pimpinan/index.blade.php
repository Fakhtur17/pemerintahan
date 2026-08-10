@extends('admin.layouts.app')

@section('title', 'Profil Pimpinan')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Profil Pimpinan
            </h3>

            <p class="text-muted mb-0">
                Kelola data profil pimpinan Kabupaten Brebes.
            </p>
        </div>

        <a href="{{ route('admin.profil.profil-pimpinan.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>
            Tambah Pimpinan

        </a>

    </div>


    {{-- SUCCESS --}}
    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show"
        role="alert">

        <i class="bi bi-check-circle me-2"></i>

        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- ERROR --}}
    @if(session('error'))

    <div class="alert alert-danger alert-dismissible fade show"
        role="alert">

        <i class="bi bi-exclamation-circle me-2"></i>

        {{ session('error') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- CARD --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">

            <div class="d-flex justify-content-between align-items-center">

                <h5 class="fw-bold mb-0">
                    Daftar Profil Pimpinan
                </h5>

                <span class="badge bg-primary">
                    {{ $data->count() }} Data
                </span>

            </div>

        </div>


        <div class="card-body">

            @if($data->count() > 0)

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th width="60">
                                No
                            </th>

                            <th width="100">
                                Foto
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Jabatan
                            </th>

                            <th>
                                Tempat/Tanggal Lahir
                            </th>

                            <th width="180">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($data as $item)

                        <tr>

                            {{-- NO --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>


                            {{-- FOTO --}}
                            <td>

                                @if($item->foto)

                                <img
                                    src="{{ asset('storage/' . $item->foto) }}"
                                    alt="{{ $item->nama }}"
                                    style="
                                                    width:70px;
                                                    height:85px;
                                                    object-fit:cover;
                                                    border-radius:8px;
                                                ">

                                @else

                                <div
                                    class="d-flex align-items-center justify-content-center bg-light"
                                    style="
                                                    width:70px;
                                                    height:85px;
                                                    border-radius:8px;
                                                ">

                                    <i class="bi bi-person fs-3 text-muted"></i>

                                </div>

                                @endif

                            </td>


                            {{-- NAMA --}}
                            <td>

                                <div class="fw-semibold">
                                    {{ $item->nama }}
                                </div>

                                @if($item->nip)

                                <small class="text-muted">
                                    NIP: {{ $item->nip }}
                                </small>

                                @endif

                            </td>


                            {{-- JABATAN --}}
                            <td>

                                <span class="badge bg-primary-subtle text-primary">

                                    {{ $item->jabatan }}

                                </span>

                            </td>


                            {{-- TANGGAL LAHIR --}}
                            <td>

                                @if($item->tempat_lahir)
                                {{ $item->tempat_lahir }}
                                @else
                                -
                                @endif

                                @if($item->tanggal_lahir)

                                <br>

                                <small class="text-muted">

                                    {{ $item->tanggal_lahir->format('d-m-Y') }}

                                </small>

                                @endif

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex gap-1">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route(
                                                    'admin.profil.profil-pimpinan.edit',
                                                    $item->id
                                                ) }}"
                                        class="btn btn-sm btn-warning">

                                        <i class="bi bi-pencil-square"></i>

                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route(
                                                    'admin.profil.profil-pimpinan.destroy',
                                                    $item->id
                                                ) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus profil pimpinan ini?')">

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

                        @endforeach

                    </tbody>

                </table>

            </div>

            @else

            {{-- EMPTY --}}
            <div class="text-center py-5">

                <div class="mb-3">

                    <i class="bi bi-person-badge"
                        style="font-size:60px;color:#adb5bd;">
                    </i>

                </div>

                <h5 class="fw-bold">
                    Belum Ada Data Pimpinan
                </h5>

                <p class="text-muted">
                    Silakan tambahkan profil pimpinan terlebih dahulu.
                </p>

                <a
                    href="{{ route('admin.profil.profil-pimpinan.create') }}"
                    class="btn btn-primary">

                    <i class="bi bi-plus-lg me-1"></i>

                    Tambah Pimpinan

                </a>

            </div>

            @endif

        </div>

    </div>

</div>

@endsection