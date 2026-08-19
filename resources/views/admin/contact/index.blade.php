@extends('admin.layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">
                Contact
            </h4>

            <p class="text-muted mb-0">
                Kelola informasi kontak yang ditampilkan pada halaman publik.
            </p>
        </div>

        <a href="{{ route('admin.contact.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>
            Tambah Contact

        </a>

    </div>


    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

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
                                Form
                            </th>

                            <th width="160">
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
                                {{ $contact->alamat ?: '-' }}
                            </td>

                            <td>
                                {{ $contact->email ?: '-' }}
                            </td>

                            <td>
                                {{ $contact->telepon ?: '-' }}
                            </td>

                            <td>
                                {{ $contact->form_judul ?: '-' }}
                            </td>

                            <td>

                                <div class="d-flex gap-1">

                                    <a
                                        href="{{ route('admin.contact.edit', $contact) }}"
                                        class="btn btn-sm btn-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <form
                                        action="{{ route('admin.contact.destroy', $contact) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus contact ini?')">

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

                            <td colspan="6"
                                class="text-center py-5 text-muted">

                                Belum ada data contact.

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