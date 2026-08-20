@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            <div class="text-muted small mb-2">
                Kontak
            </div>

            <h4 class="fw-bold mb-1">
                Pengaturan Kontak
            </h4>

            <p class="text-muted mb-0">
                Kelola informasi kontak yang ditampilkan pada halaman publik.
            </p>
        </div>

        <a
            href="{{ route('admin.contact.create') }}"
            class="btn btn-primary">

            <i class="fas fa-plus me-1"></i>
            Tambah Kontak

        </a>

    </div>


    {{-- ALERT SUCCESS --}}
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

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th width="60">
                                #
                            </th>

                            <th>
                                Alamat
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Telepon
                            </th>

                            <th>
                                Judul Form
                            </th>

                            <th width="180">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($contacts as $contact)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $contact->alamat ?? '-' }}
                            </td>

                            <td>
                                {{ $contact->email ?? '-' }}
                            </td>

                            <td>
                                {{ $contact->telepon ?? '-' }}
                            </td>

                            <td>
                                {{ $contact->form_judul ?? '-' }}
                            </td>

                            <td>

                                <div class="d-flex gap-2">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route(
                                                'admin.contact.edit',
                                                $contact
                                            ) }}"
                                        class="btn btn-sm btn-warning">

                                        <i class="fas fa-edit"></i>
                                        Edit

                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route(
                                                'admin.contact.destroy',
                                                $contact
                                            ) }}"
                                        method="POST"
                                        onsubmit="return confirm(
                                                'Yakin ingin menghapus data kontak ini?'
                                            )">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger">

                                            <i class="fas fa-trash"></i>
                                            Hapus

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="6"
                                class="text-center py-5 text-muted">

                                Belum ada pengaturan kontak.

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