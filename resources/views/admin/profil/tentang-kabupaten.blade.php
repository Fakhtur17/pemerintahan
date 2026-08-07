@extends('admin.layouts.app')

@section('title', 'Tentang Kabupaten')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">
                Tentang Kabupaten
            </h3>
            <p class="text-muted mb-0">
                Kelola informasi sejarah, wilayah geografis, dan peta Kabupaten Brebes.
            </p>
        </div>

        <a href="{{ route('admin.profil.tentang-kabupaten.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Tambah Data
        </a>
    </div>

    <!-- Card -->
    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <div class="row">

                <div class="col-md-4">
                    <input type="text"
                           class="form-control"
                           placeholder="Cari Judul...">
                </div>

            </div>

        </div>

        <div class="card-body p-0">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>

                        <th width="60">No</th>

                        <th>Judul</th>

                        <th width="120">Gambar</th>

                        <th width="150">Terakhir Update</th>

                        <th width="150">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($data as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            <strong>{{ $item->judul }}</strong>

                            <br>

                            <small class="text-muted">

                                {{ Str::limit(strip_tags($item->isi),80) }}

                            </small>

                        </td>

                        <td>

                            @if($item->gambar)

                                <img src="{{ asset('storage/'.$item->gambar) }}"
                                     width="80"
                                     class="img-thumbnail">

                            @else

                                <span class="badge bg-secondary">

                                    Tidak Ada

                                </span>

                            @endif

                        </td>

                        <td>

                            {{ $item->updated_at->format('d M Y') }}

                        </td>

                        <td>

                            <a href="{{ route('admin.profil.tentang-kabupaten.edit',$item->id) }}"
                               class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('admin.profil.tentang-kabupaten.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus data ini?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center py-5">

                            <img src="{{ asset('images/empty.svg') }}"
                                 width="180">

                            <h5 class="mt-3">

                                Belum Ada Data

                            </h5>

                            <p class="text-muted">

                                Silakan tambahkan data pertama.

                            </p>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection