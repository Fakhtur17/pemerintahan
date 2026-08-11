@extends('admin.layouts.app')

@section('title', 'Alamat Dinas')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">Alamat Dinas</h4>

            <p class="text-muted mb-0">
                Kelola informasi alamat dan lokasi kantor dinas.
            </p>
        </div>

        @if(!$data)

        <a href="{{ route('admin.profil.alamat-dinas.create') }}"
            class="btn btn-primary">

            <i class="fas fa-plus me-1"></i>
            Tambah Alamat Dinas

        </a>

        @endif

    </div>


    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif


    @if($data)

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-start mb-4">

                <div>

                    <h5 class="mb-1">
                        {{ $data->judul }}
                    </h5>

                    <small class="text-muted">
                        Diperbarui
                        {{ $data->updated_at->format('d M Y H:i') }}
                    </small>

                </div>

                <div class="d-flex gap-2">

                    <a
                        href="{{ route('admin.profil.alamat-dinas.edit', $data->id) }}"
                        class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>

                    <form
                        action="{{ route('admin.profil.alamat-dinas.destroy', $data->id) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus alamat dinas ini?')">

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                            Hapus
                        </button>

                    </form>

                </div>

            </div>


            @if($data->deskripsi)

            <div class="mb-4">

                <h6>Deskripsi</h6>

                <p class="text-muted mb-0">
                    {{ $data->deskripsi }}
                </p>

            </div>

            @endif


            <div class="mb-4">

                <h6>Alamat</h6>

                <div class="bg-light p-3 rounded">

                    {{ $data->alamat }}

                </div>

            </div>


            @if($data->google_maps_url)

            <div>

                <h6>Lokasi Google Maps</h6>

                <a
                    href="{{ $data->google_maps_url }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn btn-outline-primary">

                    <i class="fas fa-map-marker-alt me-1"></i>

                    Buka Google Maps

                </a>

            </div>

            @endif

        </div>

    </div>

    @else

    <div class="card border-0 shadow-sm">

        <div class="card-body text-center py-5">

            <i class="fas fa-map-marker-alt fa-3x text-muted mb-3"></i>

            <h5>
                Belum Ada Alamat Dinas
            </h5>

            <p class="text-muted">
                Silakan tambahkan informasi alamat kantor dinas.
            </p>

            <a
                href="{{ route('admin.profil.alamat-dinas.create') }}"
                class="btn btn-primary">

                <i class="fas fa-plus me-1"></i>

                Tambah Alamat Dinas

            </a>

        </div>

    </div>

    @endif

</div>

@endsection