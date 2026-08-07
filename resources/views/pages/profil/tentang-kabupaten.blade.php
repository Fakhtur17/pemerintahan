@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Tentang Kabupaten | Niotech')
@section('meta_description', 'Tentang Kabupaten Brebes | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Tentang Kabupaten</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Tentang Kabupaten
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Artikel Tentang Kabupaten S T A R T -->
    <section class="section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">

                    @forelse($bagian as $item)

                        <div class="mb-50">

                            @if($item->gambar)
                                <div class="mb-30">
                                    <img src="{{ asset('storage/'.$item->gambar) }}"
                                         alt="{{ $item->judul }}"
                                         class="w-100 rounded"
                                         style="max-height:420px;object-fit:cover;">
                                </div>
                            @endif

                            <h4 class="article-heading">{{ $item->judul }}</h4>

                            <div class="article-content">
                                {!! nl2br(e($item->isi)) !!}
                            </div>

                            <p class="text-muted mt-3" style="font-size:13px;">
                                Terakhir diperbarui: {{ $item->updated_at->translatedFormat('d F Y') }}
                            </p>

                        </div>

                        @if(!$loop->last)
                            <hr class="my-5">
                        @endif

                    @empty

                        <div class="text-center py-5">
                            <h4>Data belum tersedia</h4>
                            <p class="text-muted">Informasi tentang Kabupaten Brebes belum ditambahkan.</p>
                        </div>

                    @endforelse

                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
    .article-heading {
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 15px;
        color: #1a1a1a;
    }

    .article-content {
        text-align: justify;
        line-height: 1.9;
        font-size: 16px;
        color: #333;
    }
</style>
@endpush