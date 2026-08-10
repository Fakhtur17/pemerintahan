@extends('admin.layouts.app')

@section('title', 'Tentang PPID')

@section('content')

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

{{-- Header --}}
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Tentang PPID
        </h3>

        <p class="text-muted mb-0">
            Kelola bagian-bagian informasi mengenai PPID Kabupaten Brebes.
        </p>
    </div>

    <a
        href="{{ route('admin.profil.tentang-ppid.create') }}"
        class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>
        Tambah Bagian
    </a>

</div>


{{-- Table --}}
<div class="card shadow-sm border-0">

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>

                        <th width="70">
                            No
                        </th>

                        <th width="80">
                            Urutan
                        </th>

                        <th>
                            Judul Bagian
                        </th>

                        <th width="120">
                            Gambar
                        </th>

                        <th width="150">
                            Update
                        </th>

                        <th width="150">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($data as $item)

                    <tr>

                        {{-- No --}}
                        <td>
                            {{ $data->firstItem() + $loop->index }}
                        </td>

                        {{-- Urutan --}}
                        <td>
                            {{ $item->urutan }}
                        </td>

                        {{-- Judul --}}
                        <td>

                            <strong>
                                {{ $item->judul }}
                            </strong>

                            <br>

                            <small class="text-muted">
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                            </small>

                        </td>

                        {{-- Gambar --}}
                        <td>

                            @if($item->gambar)

                            <img
                                src="{{ asset('storage/' . $item->gambar) }}"
                                width="80"
                                height="60"
                                style="object-fit: cover;"
                                class="img-thumbnail">

                            @endif

                        </td>

                        {{-- Update --}}
                        <td>

                            {{ $item->updated_at->format('d M Y') }}

                            <br>

                            <small class="text-muted">
                                {{ $item->updated_at->format('H:i') }}
                            </small>

                        </td>

                        {{-- Aksi --}}
                        <td>

                            <a
                                href="{{ route('admin.profil.tentang-ppid.edit', $item->id) }}"
                                class="btn btn-warning btn-sm"
                                title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form
                                action="{{ route('admin.profil.tentang-ppid.destroy', $item->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    title="Hapus"
                                    onclick="return confirm('Yakin ingin menghapus bagian ini?')">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td
                            colspan="6"
                            class="text-center py-5">

                            <h5>
                                Belum Ada Bagian
                            </h5>

                            <p class="text-muted">
                                Silakan tambahkan bagian pertama Tentang PPID.
                            </p>

                            <a
                                href="{{ route('admin.profil.tentang-ppid.create') }}"
                                class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i>
                                Tambah Bagian
                            </a>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>


    @if($data->hasPages())

    <div class="card-footer">
        {{ $data->links() }}
    </div>

    @endif

</div>

@endsection