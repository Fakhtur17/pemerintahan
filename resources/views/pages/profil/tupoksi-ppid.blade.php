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

            <div class="shape1">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}"
                    alt="shape">
            </div>

            <div class="shape2">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}"
                    alt="shape">
            </div>

            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>Tupoksi PPID</h1>

                    <div class="links">

                        <a href="{{ route('home') }}">
                            Home
                            <span class="slash">/</span>
                        </a>

                        Profil
                        <span class="slash">/</span>

                        Tupoksi PPID

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
TUPoksi PPID
========================================================= --}}

<section class="tupoksi-ppid-section">

    <div class="container tupoksi-pdf-content">

        @if($tupoksiPpid)

        {{-- =================================================
            PDF VIEWER
            ================================================== --}}

        <div
            class="tupoksi-pdf-wrapper wow fadeInUp"
            data-wow-delay=".5s">

            <div class="tupoksi-pdf-card">

                {{-- =================================================
                    PDF CONTAINER
                    ================================================== --}}

                <div
                    id="pdf-container"
                    class="pdf-container"
                    data-pdf-url="{{ asset('storage/' . $tupoksiPpid->file_pdf) }}">

                    <canvas id="pdf-canvas"></canvas>


                    {{-- LOADING --}}

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


                    {{-- ERROR --}}

                    <div
                        id="pdf-error"
                        class="pdf-error"
                        style="display: none;">

                        <div class="text-center">

                            <div class="pdf-error-icon">
                                <i class="fa-solid fa-file-circle-xmark"></i>
                            </div>

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

                                <i class="fa-solid fa-file-pdf me-2"></i>

                                Buka PDF

                            </a>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    NAVIGASI PDF
                    ================================================== --}}

                <div class="pdf-navigation">

                    <button
                        type="button"
                        id="prev-page"
                        class="pdf-nav-btn">

                        <i class="fa-solid fa-chevron-left"></i>

                        <span>
                            Sebelumnya
                        </span>

                    </button>


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
            BUTTON BUKA PDF
            ================================================== --}}

        <div class="text-center tupoksi-download">

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
            BELUM ADA DOKUMEN
            ================================================== --}}

        <div class="tupoksi-empty text-center">

            <div class="tupoksi-empty-icon">

                <i class="fa-regular fa-file-pdf"></i>

            </div>

            <h3>
                Dokumen Tupoksi PPID Belum Tersedia
            </h3>

            <p>
                Dokumen Tugas Pokok dan Fungsi PPID
                belum tersedia saat ini.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
STYLE
========================================================= --}}

<style>
    /* =========================================================
   SECTION UTAMA

   Jarak dari breadcrumb ke konten diperkecil di sini.
   ========================================================= */

    .tupoksi-ppid-section {
        padding: 20px 0 80px !important;
        background: #ffffff;
    }


    /* =========================================================
   CONTAINER PDF
   ========================================================= */

    .tupoksi-pdf-content {
        padding-top: 0 !important;
    }


    /* =========================================================
   JUDUL

   Jarak judul ke PDF juga diperkecil.
   ========================================================= */

    .tupoksi-heading {
        margin-bottom: 20px !important;
    }


    /* =========================================================
   PDF WRAPPER
   ========================================================= */

    .tupoksi-pdf-wrapper {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }


    /* =========================================================
   PDF CARD
   ========================================================= */

    .tupoksi-pdf-card {
        width: 100%;
        background: #f1f2f4;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
        padding: 14px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.07);
    }


    /* =========================================================
   PDF AREA
   ========================================================= */

    .pdf-container {
        position: relative;

        width: 100%;

        min-height: 720px;

        padding: 25px;

        background: #e7e8eb;

        border-radius: 8px;

        display: flex;

        justify-content: center;

        align-items: flex-start;

        overflow: auto;
    }


    /* =========================================================
   CANVAS PDF
   ========================================================= */

    #pdf-canvas {
        display: block;

        width: auto;

        max-width: 100%;

        height: auto;

        background: #ffffff;

        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.15);
    }


    /* =========================================================
   LOADING
   ========================================================= */

    .pdf-loading {
        position: absolute;

        inset: 0;

        z-index: 10;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        background: #e7e8eb;

        border-radius: 8px;
    }


    .pdf-loading .spinner-border {
        width: 42px;
        height: 42px;

        color: #6f42f5;
    }


    .pdf-loading p {
        margin: 14px 0 0;

        color: #666;

        font-size: 14px;
    }


    /* =========================================================
   ERROR
   ========================================================= */

    .pdf-error {
        position: absolute;

        inset: 0;

        z-index: 20;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #e7e8eb;

        border-radius: 8px;
    }


    .pdf-error-icon {
        margin-bottom: 15px;
    }


    .pdf-error-icon i {
        font-size: 55px;

        color: #dc3545;
    }


    .pdf-error h4 {
        margin-bottom: 8px;

        font-size: 20px;
    }


    .pdf-error p {
        color: #777;

        margin-bottom: 20px;
    }


    /* =========================================================
   NAVIGASI
   ========================================================= */

    .pdf-navigation {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;

        padding: 16px 4px 2px;
    }


    /* =========================================================
   BUTTON NAVIGASI
   ========================================================= */

    .pdf-nav-btn {
        min-width: 145px;

        border: none;

        outline: none;

        background: #6f42f5;

        color: #ffffff;

        padding: 11px 18px;

        border-radius: 7px;

        font-size: 14px;

        font-weight: 600;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 8px;

        cursor: pointer;

        transition:
            background 0.25s ease,
            transform 0.25s ease;
    }


    .pdf-nav-btn:hover {
        background: #5931d9;

        transform: translateY(-1px);
    }


    .pdf-nav-btn:disabled {
        background: #b9bcc2;

        opacity: 0.65;

        cursor: not-allowed;

        transform: none;
    }


    /* =========================================================
   INFORMASI HALAMAN
   ========================================================= */

    .pdf-page-info {
        display: flex;

        align-items: center;

        justify-content: center;

        gap: 7px;

        color: #666;

        font-size: 14px;

        white-space: nowrap;
    }


    .pdf-page-info strong {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        min-width: 30px;

        height: 30px;

        padding: 0 7px;

        background: #ffffff;

        border: 1px solid #ddd;

        border-radius: 6px;

        color: #222;

        font-weight: 700;
    }


    /* =========================================================
   DOWNLOAD
   ========================================================= */

    .tupoksi-download {
        margin-top: 20px;
    }


    /* =========================================================
   EMPTY
   ========================================================= */

    .tupoksi-empty {
        padding: 70px 20px;
    }


    .tupoksi-empty-icon {
        width: 85px;

        height: 85px;

        margin: 0 auto 22px;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #f1f2f4;

        border-radius: 50%;
    }


    .tupoksi-empty-icon i {
        font-size: 42px;

        color: #adb5bd;
    }


    .tupoksi-empty h3 {
        margin-bottom: 10px;

        font-size: 24px;
    }


    .tupoksi-empty p {
        color: #777;

        margin: 0;
    }


    /* =========================================================
   TABLET
   ========================================================= */

    @media (max-width: 991px) {

        .tupoksi-ppid-section {
            padding-top: 20px !important;
        }

        .pdf-container {
            min-height: 600px;

            padding: 18px;
        }

    }


    /* =========================================================
   MOBILE
   ========================================================= */

    @media (max-width: 768px) {

        .tupoksi-ppid-section {
            padding-top: 15px !important;

            padding-bottom: 60px !important;
        }

        .tupoksi-heading {
            margin-bottom: 18px !important;
        }

        .tupoksi-pdf-card {
            padding: 8px;

            border-radius: 9px;
        }

        .pdf-container {
            min-height: 500px;

            padding: 10px;
        }

        .pdf-navigation {
            flex-direction: column;

            gap: 10px;

            padding-top: 12px;
        }

        .pdf-page-info {
            order: -1;
        }

        .pdf-nav-btn {
            width: 100%;

            min-width: 0;
        }

    }


    /* =========================================================
   SMALL MOBILE
   ========================================================= */

    @media (max-width: 480px) {

        .tupoksi-ppid-section {
            padding-top: 10px !important;
        }

        .pdf-container {
            min-height: 430px;

            padding: 7px;
        }

    }
</style>


{{-- =========================================================
PDF.JS
========================================================= --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const pdfContainer =
            document.getElementById('pdf-container');

        if (!pdfContainer) {
            return;
        }


        const pdfUrl =
            pdfContainer.dataset.pdfUrl;


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


        let pdfDoc = null;

        let pageNum = 1;

        let pageRendering = false;

        let pageNumPending = null;


        /*
        |--------------------------------------------------------------------------
        | PDF WORKER
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

                const containerWidth =
                    pdfContainer.clientWidth - 50;


                const viewport =
                    page.getViewport({
                        scale: 1
                    });


                let scale =
                    containerWidth / viewport.width;


                if (scale < 0.5) {
                    scale = 0.5;
                }


                if (scale > 1.6) {
                    scale = 1.6;
                }


                const scaledViewport =
                    page.getViewport({
                        scale: scale
                    });


                canvas.width =
                    scaledViewport.width;


                canvas.height =
                    scaledViewport.height;


                const renderContext = {

                    canvasContext: ctx,

                    viewport: scaledViewport

                };


                const renderTask =
                    page.render(renderContext);


                renderTask.promise.then(function() {

                    pageRendering = false;


                    if (pageNumPending !== null) {

                        renderPage(pageNumPending);

                        pageNumPending = null;

                    }

                });

            });


            pageNumElement.textContent =
                num;


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
        | PREVIOUS PAGE
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
        | NEXT PAGE
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


            prevButton.disabled =
                pageNum <= 1;


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

                pdfDoc = pdf;


                pageCountElement.textContent =
                    pdf.numPages;


                loading.style.display =
                    'none';


                renderPage(pageNum);

            })

            .catch(function(error) {

                console.error(
                    'Gagal memuat PDF:',
                    error
                );


                loading.style.display =
                    'none';


                errorBox.style.display =
                    'flex';

            });


        /*
        |--------------------------------------------------------------------------
        | BUTTON EVENTS
        |--------------------------------------------------------------------------
        */

        prevButton.addEventListener(
            'click',
            onPrevPage
        );


        nextButton.addEventListener(
            'click',
            onNextPage
        );


        /*
        |--------------------------------------------------------------------------
        | KEYBOARD NAVIGATION
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'keydown',
            function(event) {

                if (event.key === 'ArrowLeft') {

                    onPrevPage();

                }


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