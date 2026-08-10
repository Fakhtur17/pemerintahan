@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Tupoksi PPID | Niotech')
@section('meta_description', 'Tugas Pokok dan Fungsi PPID | Niotech')

@section('content')


{{-- =========================================================
BREADCRUMB
========================================================= --}}

<div class="breadcumb-section fix">

    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">

        <div class="container">

            {{-- Shape 1 --}}

            <div class="shape1">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}"
                    alt="shape">
            </div>

            {{-- Shape 2 --}}

            <div class="shape2">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}"
                    alt="shape">
            </div>

            {{-- Breadcrumb --}}

            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>
                        Tupoksi PPID
                    </h1>

                    <div class="links">

                        <a href="{{ route('home') }}">
                            Home
                            <span class="slash">/</span>
                        </a>

                        <a href="#">
                            Profil
                            <span class="slash">/</span>
                        </a>

                        Tupoksi PPID

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
TUPoksi PPID SECTION
========================================================= --}}

<section class="tupoksi-ppid-section section-padding fix">

    <div class="container">

        @if($tupoksiPpid)


        {{-- =================================================
        JUDUL
        ================================================== --}}

        <div class="section-title text-center mxw-800 mx-auto mb-5">

            <div
                class="subtitle wow fadeInUp"
                data-wow-delay=".2s">

                Tugas Pokok dan Fungsi PPID

                <img
                    src="{{ asset('assets/images/icon/fireIcon.svg') }}"
                    alt="icon">

            </div>

            <h2
                class="title wow fadeInUp"
                data-wow-delay=".4s">
                {{ $tupoksiPpid->judul }}
            </h2>

        </div>



        {{-- =================================================
        PDF VIEWER
        ================================================== --}}

        <div
            class="tupoksi-pdf-wrapper wow fadeInUp"
            data-wow-delay=".5s">

            <div class="tupoksi-pdf-card">


                {{-- =========================================
                PDF CONTAINER

                URL PDF disimpan di data-pdf-url
                supaya tidak ada di JavaScript
                ========================================== --}}

                <div
                    id="pdf-container"
                    class="pdf-container"
                    data-pdf-url="{{ asset('storage/' . $tupoksiPpid->file_pdf) }}">

                    {{-- Canvas PDF --}}

                    <canvas id="pdf-canvas"></canvas>


                    {{-- Loading --}}

                    <div
                        id="pdf-loading"
                        class="pdf-loading">

                        <div
                            class="spinner-border"
                            role="status"></div>

                        <p class="mt-3 mb-0">
                            Memuat dokumen...
                        </p>

                    </div>


                    {{-- Error --}}

                    <div
                        id="pdf-error"
                        class="pdf-error"
                        style="display: none;">

                        <div class="text-center">

                            <i class="fa-solid fa-circle-exclamation"></i>

                            <h4>
                                Gagal Memuat Dokumen
                            </h4>

                            <p>
                                Dokumen PDF tidak dapat ditampilkan.
                            </p>

                            <a
                                href="{{ asset('storage/' . $tupoksiPpid->file_pdf) }}"
                                target="_blank"
                                class="theme-btn">
                                Buka PDF
                            </a>

                        </div>

                    </div>

                </div>



                {{-- =========================================
                NAVIGASI PDF
                ========================================== --}}

                <div class="pdf-navigation">


                    {{-- Tombol Sebelumnya --}}

                    <button
                        type="button"
                        id="prev-page"
                        class="pdf-nav-btn">

                        <i class="fa-solid fa-chevron-left"></i>

                        <span>
                            Sebelumnya
                        </span>

                    </button>



                    {{-- Nomor halaman --}}

                    <div class="pdf-page-info">

                        <span>
                            Halaman
                        </span>

                        <strong id="page-num">
                            1
                        </strong>

                        <span>
                            dari
                        </span>

                        <strong id="page-count">
                            -
                        </strong>

                    </div>



                    {{-- Tombol Selanjutnya --}}

                    <button
                        type="button"
                        id="next-page"
                        class="pdf-nav-btn">

                        <span>
                            Selanjutnya
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </button>

                </div>

            </div>

        </div>



        {{-- =================================================
        TOMBOL BUKA PDF
        ================================================== --}}

        <div class="text-center mt-4">

            <a
                href="{{ asset('storage/' . $tupoksiPpid->file_pdf) }}"
                target="_blank"
                class="theme-btn">

                <i class="fa-solid fa-file-pdf me-2"></i>

                Buka Dokumen PDF

            </a>

        </div>


        @else


        {{-- =================================================
        BELUM ADA DATA
        ================================================== --}}

        <div class="text-center py-5">

            <div class="tupoksi-empty-icon mb-4">

                <i class="fa-regular fa-file-pdf"></i>

            </div>

            <h3 class="mb-3">
                Dokumen Tupoksi PPID Belum Tersedia
            </h3>

            <p class="text-muted mb-0">

                Dokumen Tugas Pokok dan Fungsi PPID
                belum tersedia saat ini.

            </p>

        </div>


        @endif

    </div>

</section>



{{-- =========================================================
PDF VIEWER STYLE
========================================================= --}}

<style>
    /*
    |--------------------------------------------------------------------------
    | PDF WRAPPER
    |--------------------------------------------------------------------------
    */

    .tupoksi-pdf-wrapper {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
    }


    /*
    |--------------------------------------------------------------------------
    | PDF CARD
    |--------------------------------------------------------------------------
    */

    .tupoksi-pdf-card {

        width: 100%;

        background: #f4f5f7;

        padding: 20px;

        border-radius: 15px;

        box-shadow:
            0 10px 35px rgba(0, 0, 0, 0.08);
    }


    /*
    |--------------------------------------------------------------------------
    | PDF CONTAINER
    |--------------------------------------------------------------------------
    */

    .pdf-container {

        position: relative;

        width: 100%;

        min-height: 750px;

        padding: 25px;

        background: #e9ecef;

        border-radius: 10px;

        display: flex;

        justify-content: center;

        align-items: center;

        overflow: auto;
    }


    /*
    |--------------------------------------------------------------------------
    | PDF CANVAS
    |--------------------------------------------------------------------------
    */

    #pdf-canvas {

        display: block;

        max-width: 100%;

        height: auto;

        background: #ffffff;

        box-shadow:
            0 5px 25px rgba(0, 0, 0, 0.15);

        border-radius: 2px;
    }


    /*
    |--------------------------------------------------------------------------
    | LOADING
    |--------------------------------------------------------------------------
    */

    .pdf-loading {

        position: absolute;

        inset: 0;

        z-index: 10;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        background: #f4f5f7;

        border-radius: 10px;
    }


    .pdf-loading .spinner-border {

        width: 45px;

        height: 45px;
    }


    .pdf-loading p {

        color: #555;

        font-size: 15px;
    }


    /*
    |--------------------------------------------------------------------------
    | ERROR
    |--------------------------------------------------------------------------
    */

    .pdf-error {

        position: absolute;

        inset: 0;

        z-index: 20;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #f4f5f7;

        border-radius: 10px;
    }


    .pdf-error i {

        display: block;

        margin-bottom: 20px;

        font-size: 55px;

        color: #dc3545;
    }


    .pdf-error h4 {

        margin-bottom: 10px;
    }


    .pdf-error p {

        color: #777;

        margin-bottom: 20px;
    }


    /*
    |--------------------------------------------------------------------------
    | NAVIGATION
    |--------------------------------------------------------------------------
    */

    .pdf-navigation {

        margin-top: 20px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;
    }


    /*
    |--------------------------------------------------------------------------
    | NAVIGATION BUTTON
    |--------------------------------------------------------------------------
    */

    .pdf-nav-btn {

        border: none;

        outline: none;

        background: #6f42f5;

        color: #ffffff;

        padding: 12px 22px;

        border-radius: 8px;

        font-size: 15px;

        font-weight: 600;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 9px;

        cursor: pointer;

        transition: all .3s ease;
    }


    .pdf-nav-btn:hover {

        background: #5931d9;

        transform: translateY(-2px);
    }


    /*
    |--------------------------------------------------------------------------
    | DISABLED BUTTON
    |--------------------------------------------------------------------------
    */

    .pdf-nav-btn:disabled {

        background: #adb5bd;

        opacity: .6;

        cursor: not-allowed;

        transform: none;
    }


    /*
    |--------------------------------------------------------------------------
    | PAGE INFO
    |--------------------------------------------------------------------------
    */

    .pdf-page-info {

        display: flex;

        align-items: center;

        justify-content: center;

        gap: 7px;

        color: #555;

        font-size: 16px;

        white-space: nowrap;
    }


    .pdf-page-info strong {

        color: #111;

        font-weight: 700;

        min-width: 20px;

        text-align: center;
    }


    /*
    |--------------------------------------------------------------------------
    | EMPTY STATE
    |--------------------------------------------------------------------------
    */

    .tupoksi-empty-icon {

        width: 90px;

        height: 90px;

        margin-left: auto;

        margin-right: auto;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #f1f3f5;

        border-radius: 50%;
    }


    .tupoksi-empty-icon i {

        font-size: 45px;

        color: #adb5bd;
    }


    /*
    |--------------------------------------------------------------------------
    | TABLET
    |--------------------------------------------------------------------------
    */

    @media (max-width: 991px) {

        .pdf-container {

            min-height: 600px;

            padding: 15px;
        }

    }


    /*
    |--------------------------------------------------------------------------
    | MOBILE
    |--------------------------------------------------------------------------
    */

    @media (max-width: 768px) {

        .tupoksi-pdf-card {

            padding: 10px;

            border-radius: 10px;
        }


        .pdf-container {

            min-height: 500px;

            padding: 10px;
        }


        .pdf-navigation {

            flex-direction: column;

            gap: 12px;
        }


        .pdf-page-info {

            order: -1;
        }


        .pdf-nav-btn {

            width: 100%;

            padding: 11px 15px;
        }

    }


    /*
    |--------------------------------------------------------------------------
    | SMALL MOBILE
    |--------------------------------------------------------------------------
    */

    @media (max-width: 480px) {

        .pdf-container {

            min-height: 450px;
        }


        .pdf-page-info {

            font-size: 14px;
        }

    }
</style>



{{-- =========================================================
PDF.JS
========================================================= --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {


        /*
        |--------------------------------------------------------------------------
        | PDF CONTAINER
        |--------------------------------------------------------------------------
        */

        const pdfContainer =
            document.getElementById('pdf-container');


        /*
        |--------------------------------------------------------------------------
        | JIKA TIDAK ADA DATA PDF
        |--------------------------------------------------------------------------
        */

        if (!pdfContainer) {

            return;

        }


        /*
        |--------------------------------------------------------------------------
        | URL PDF
        |--------------------------------------------------------------------------
        |
        | URL diambil dari:
        |
        |
        | Jadi tidak menggunakan  di JavaScript.
        |
        |--------------------------------------------------------------------------
        */

        const pdfUrl =
            pdfContainer.dataset.pdfUrl;


        /*
        |--------------------------------------------------------------------------
        | ELEMENT
        |--------------------------------------------------------------------------
        */

        const canvas =
            document.getElementById('pdf-canvas');

        const ctx =
            canvas.getContext('2d');

        const loading =
            document.getElementById('pdf-loading');

        const errorBox =
            document.getElementById('pdf-error');

        const prevButton =
            document.getElementById('prev-page');

        const nextButton =
            document.getElementById('next-page');

        const pageNumElement =
            document.getElementById('page-num');

        const pageCountElement =
            document.getElementById('page-count');


        /*
        |--------------------------------------------------------------------------
        | VARIABLE
        |--------------------------------------------------------------------------
        */

        let pdfDoc = null;

        let pageNum = 1;

        let pageRendering = false;

        let pageNumPending = null;


        /*
        |--------------------------------------------------------------------------
        | PDF.JS WORKER
        |--------------------------------------------------------------------------
        */

        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';


        /*
        |--------------------------------------------------------------------------
        | RENDER PAGE
        |--------------------------------------------------------------------------
        */

        function renderPage(num) {

            pageRendering = true;


            pdfDoc.getPage(num).then(function(page) {


                /*
                | Lebar container
                */

                const containerWidth =
                    pdfContainer.clientWidth - 50;


                /*
                | Viewport awal
                */

                const viewport =
                    page.getViewport({
                        scale: 1
                    });


                /*
                | Hitung ukuran berdasarkan container
                */

                let scale =
                    containerWidth / viewport.width;


                /*
                | Batas minimum
                */

                if (scale < 0.5) {

                    scale = 0.5;

                }


                /*
                | Batas maksimum
                */

                if (scale > 1.8) {

                    scale = 1.8;

                }


                /*
                | Viewport final
                */

                const scaledViewport =
                    page.getViewport({
                        scale: scale
                    });


                /*
                | Set ukuran canvas
                */

                canvas.width =
                    scaledViewport.width;

                canvas.height =
                    scaledViewport.height;


                /*
                | Render context
                */

                const renderContext = {

                    canvasContext: ctx,

                    viewport: scaledViewport

                };


                /*
                | Render PDF
                */

                const renderTask =
                    page.render(renderContext);


                renderTask.promise.then(function() {

                    pageRendering = false;


                    /*
                    | Jika ada halaman menunggu
                    */

                    if (pageNumPending !== null) {

                        renderPage(pageNumPending);

                        pageNumPending = null;

                    }

                });

            });


            /*
            | Update nomor halaman
            */

            pageNumElement.textContent =
                num;


            /*
            | Update tombol
            */

            updateButtons();

        }


        /*
        |--------------------------------------------------------------------------
        | QUEUE RENDER
        |--------------------------------------------------------------------------
        */

        function queueRenderPage(num) {

            if (pageRendering) {

                pageNumPending = num;

            } else {

                renderPage(num);

            }

        }


        /*
        |--------------------------------------------------------------------------
        | PREVIOUS
        |--------------------------------------------------------------------------
        */

        function onPrevPage() {

            if (pageNum <= 1) {

                return;

            }


            pageNum--;

            queueRenderPage(pageNum);

        }


        /*
        |--------------------------------------------------------------------------
        | NEXT
        |--------------------------------------------------------------------------
        */

        function onNextPage() {

            if (!pdfDoc) {

                return;

            }


            if (pageNum >= pdfDoc.numPages) {

                return;

            }


            pageNum++;

            queueRenderPage(pageNum);

        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE BUTTON
        |--------------------------------------------------------------------------
        */

        function updateButtons() {

            if (!pdfDoc) {

                prevButton.disabled = true;

                nextButton.disabled = true;

                return;

            }


            /*
            | Halaman pertama
            */

            prevButton.disabled =
                pageNum <= 1;


            /*
            | Halaman terakhir
            */

            nextButton.disabled =
                pageNum >= pdfDoc.numPages;

        }


        /*
        |--------------------------------------------------------------------------
        | LOAD PDF
        |--------------------------------------------------------------------------
        */

        pdfjsLib
            .getDocument(pdfUrl)
            .promise

            .then(function(pdf) {


                /*
                | Simpan PDF
                */

                pdfDoc = pdf;


                /*
                | Total halaman
                */

                pageCountElement.textContent =
                    pdf.numPages;


                /*
                | Hilangkan loading
                */

                loading.style.display =
                    'none';


                /*
                | Render halaman pertama
                */

                renderPage(pageNum);

            })


            .catch(function(error) {


                /*
                | Tampilkan error di console
                */

                console.error(
                    'Gagal memuat PDF:',
                    error
                );


                /*
                | Hilangkan loading
                */

                loading.style.display =
                    'none';


                /*
                | Tampilkan error box
                */

                errorBox.style.display =
                    'flex';

            });


        /*
        |--------------------------------------------------------------------------
        | BUTTON PREVIOUS
        |--------------------------------------------------------------------------
        */

        prevButton.addEventListener(
            'click',
            onPrevPage
        );


        /*
        |--------------------------------------------------------------------------
        | BUTTON NEXT
        |--------------------------------------------------------------------------
        */

        nextButton.addEventListener(
            'click',
            onNextPage
        );


        /*
        |--------------------------------------------------------------------------
        | KEYBOARD
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'keydown',
            function(event) {


                /*
                | Arrow kiri
                */

                if (event.key === 'ArrowLeft') {

                    onPrevPage();

                }


                /*
                | Arrow kanan
                */

                if (event.key === 'ArrowRight') {

                    onNextPage();

                }

            }
        );


        /*
        |--------------------------------------------------------------------------
        | RESPONSIVE
        |--------------------------------------------------------------------------
        */

        let resizeTimer;


        window.addEventListener(
            'resize',
            function() {


                clearTimeout(resizeTimer);


                resizeTimer = setTimeout(
                    function() {


                        if (pdfDoc) {

                            renderPage(pageNum);

                        }


                    },
                    250
                );

            }
        );


    });
</script>


@endsection