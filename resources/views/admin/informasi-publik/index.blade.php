@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    <div class="mb-4">

        <div class="text-muted small mb-2">
            Informasi Publik
        </div>

        <h4 class="fw-bold mb-1">
            Informasi Publik
        </h4>

        <p class="text-muted mb-0">
            Kelola informasi publik yang disediakan oleh PPID.
        </p>

    </div>


    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        <i class="bi bi-check-circle me-2"></i>

        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white border-0 py-3">

            <h6 class="fw-bold mb-0">
                Daftar Informasi Publik
            </h6>

        </div>


        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover
                              align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th class="text-center"
                                style="width:70px;">
                                No
                            </th>

                            <th>
                                Informasi Publik
                            </th>

                            <th style="width:180px;">
                                Jumlah Jenis Informasi
                            </th>

                            <th class="text-center"
                                style="width:130px;">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($kategori as $index => $item)

                        <tr>

                            <td class="text-center">
                                {{ $index + 1 }}
                            </td>

                            <td>
                                <span class="fw-semibold">
                                    {{ $item['nama'] }}
                                </span>
                            </td>

                            <td>

                                <span class="badge
                                                 bg-primary-subtle
                                                 text-primary
                                                 rounded-pill
                                                 px-3 py-2">

                                    {{ $item['jumlah'] }}

                                    Jenis

                                </span>

                            </td>

                            <td class="text-center">

                                @if($item['route'] !== '#')

                                <a href="{{ route(
                                            $item['route']
                                        ) }}"
                                    class="btn btn-sm btn-primary">

                                    <i class="bi bi-folder2-open me-1"></i>

                                    Kelola

                                </a>

                                @else

                                <button type="button"
                                    class="btn btn-sm
                                                       btn-secondary"
                                    disabled>

                                    Kelola

                                </button>

                                @endif

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection