@extends('admin.layouts.app')

@section('title', 'Visi & Misi')

@section('content')

<div class="container-fluid">

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle me-1"></i>
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>
        </div>
    @endif


    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Visi & Misi
            </h3>

            <p class="text-muted mb-0">
                Kelola informasi visi dan misi Kabupaten Brebes.
            </p>
        </div>

        <a
            href="{{ route('admin.profil.visi-misi.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>
            Tambah Visi / Misi

        </a>

    </div>


    {{-- CARD --}}
    <div class="card shadow-sm border-0">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th width="70">
                                No
                            </th>

                            <th width="100">
                                Jenis
                            </th>

                            <th>
                                Isi
                            </th>

                            <th width="120">
                                Gambar
                            </th>

                            <th width="90">
                                Urutan
                            </th>

                            <th width="100">
                                Status
                            </th>

                            <th width="140">
                                Update
                            </th>

                            <th width="130">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($data as $item)

                            <tr>

                                {{-- NO --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                {{-- JENIS --}}
                                <td>

                                    @if($item->jenis === 'visi')

                                        <span class="badge bg-primary">
                                            VISI
                                        </span>

                                    @else

                                        <span class="badge bg-success">
                                            MISI
                                        </span>

                                    @endif

                                </td>


                                {{-- ISI --}}
                                <td>

                                    <strong>
                                        {{ strtoupper($item->jenis) }}
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        {{ Str::limit(strip_tags($item->isi), 150) }}
                                    </small>

                                </td>


                                {{-- GAMBAR --}}
                                <td>

                                    @if($item->gambar)

                                        <img
                                            src="{{ asset('storage/' . $item->gambar) }}"
                                            width="80"
                                            height="60"
                                            style="object-fit: cover;"
                                            class="img-thumbnail"
                                            alt="{{ $item->jenis }}">

                                    @else

                                        <span class="badge bg-secondary">
                                            Tidak ada
                                        </span>

                                    @endif

                                </td>


                                {{-- URUTAN --}}
                                <td>
                                    {{ $item->urutan }}
                                </td>


                                {{-- STATUS --}}
                                <td>

                                    @if($item->aktif)

                                        <span class="badge bg-success">
                                            Aktif
                                        </span>

                                    @else

                                        <span class="badge bg-secondary">
                                            Nonaktif
                                        </span>

                                    @endif

                                </td>


                                {{-- UPDATE --}}
                                <td>

                                    {{ $item->updated_at->format('d M Y') }}

                                    <br>

                                    <small class="text-muted">
                                        {{ $item->updated_at->format('H:i') }}
                                    </small>

                                </td>


                                {{-- AKSI --}}
                                <td>

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('admin.profil.visi-misi.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm"
                                        title="Edit">

                                        <i class="bi bi-pencil-square"></i>

                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route('admin.profil.visi-misi.destroy', $item->id) }}"
                                        method="POST"
                                        class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            title="Hapus"
                                            onclick="return confirm('Yakin ingin menghapus {{ strtoupper($item->jenis) }}?')">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="8"
                                    class="text-center py-5">

                                    <h5 class="fw-bold">
                                        Belum Ada Data
                                    </h5>

                                    <p class="text-muted">
                                        Silakan tambahkan Visi dan Misi Kabupaten Brebes.
                                    </p>

                                    <a
                                        href="{{ route('admin.profil.visi-misi.create') }}"
                                        class="btn btn-primary">

                                        <i class="bi bi-plus-circle me-1"></i>
                                        Tambah Visi / Misi

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