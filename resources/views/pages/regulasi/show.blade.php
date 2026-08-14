@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', $regulasi->judul . ' | Regulasi PPID')

@section('meta_description', $regulasi->judul)

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

                    <h1>
                        {{ $regulasi->judul }}
                    </h1>

                    <p>
                        Dokumen Regulasi PPID Kabupaten Brebes
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    PDF SECTION
========================================================= --}}
<section class="regulasi-pdf-section">

    <div class="container">

        <div class="regulasi-pdf-wrapper">


            {{-- =================================================
                HEADER PDF
            ================================================== --}}
            <div class="regulasi-pdf-header">

                <div class="regulasi-pdf-title">

                    <span class="pdf-label">
                        DOKUMEN REGULASI
                    </span>

                    <h2>
                        {{ $regulasi->judul }}
                    </h2>

                </div>


                {{-- BUTTON BUKA PDF --}}
                <a
                    href="{{ asset('storage/' . $regulasi->file_pdf) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="pdf-button">

                    <i class="fa-solid fa-up-right-from-square"></i>

                    Buka PDF

                </a>

            </div>


            {{-- =================================================
                PDF VIEWER
            ================================================== --}}
            <div class="pdf-viewer">

                {{-- LOADING --}}
                <div
                    id="pdf-loading"
                    class="pdf-loading">

                    <div class="pdf-spinner"></div>

                    <span>
                        Memuat dokumen...
                    </span>

                </div>


                {{-- SEMUA HALAMAN PDF --}}
                <div
                    id="pdf-pages"
                    class="pdf-pages">
                </div>


                {{-- ERROR --}}
                <div
                    id="pdf-error"
                    class="pdf-error"
                    style="display: none;">

                    <i class="fa-solid fa-file-circle-xmark"></i>

                    <p>
                        Dokumen PDF tidak dapat ditampilkan.
                    </p>

                    <a
                        href="{{ asset('storage/' . $regulasi->file_pdf) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="pdf-error-button">

                        <i class="fa-solid fa-file-pdf"></i>

                        Buka PDF

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    PDF.JS
========================================================= --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        /*
        |--------------------------------------------------------------------------
        | URL PDF
        |--------------------------------------------------------------------------
        */

        const pdfUrl =
            "{{ asset('storage/' . $regulasi->file_pdf) }}";


        /*
        |--------------------------------------------------------------------------
        | ELEMENT
        |--------------------------------------------------------------------------
        */

        const pagesContainer =
            document.getElementById('pdf-pages');

        const loadingElement =
            document.getElementById('pdf-loading');

        const errorElement =
            document.getElementById('pdf-error');


        /*
        |--------------------------------------------------------------------------
        | PDF.JS WORKER
        |--------------------------------------------------------------------------
        */

        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';


        /*
        |--------------------------------------------------------------------------
        | LOAD PDF
        |--------------------------------------------------------------------------
        */

        pdfjsLib.getDocument({

                url: pdfUrl,

                disableAutoFetch: false,

                disableStream: false

            }).promise

            .then(async function(pdf) {

                /*
                |--------------------------------------------------------------------------
                | Hilangkan loading
                |--------------------------------------------------------------------------
                */

                loadingElement.style.display =
                    'none';


                /*
                |--------------------------------------------------------------------------
                | Render halaman satu per satu
                |--------------------------------------------------------------------------
                */

                for (
                    let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++
                ) {

                    await renderPage(
                        pdf,
                        pageNumber
                    );

                }

            })

            .catch(function(error) {

                console.error(
                    'Gagal memuat PDF:',
                    error
                );

                loadingElement.style.display =
                    'none';

                errorElement.style.display =
                    'flex';

            });


        /*
        |--------------------------------------------------------------------------
        | RENDER SATU HALAMAN
        |--------------------------------------------------------------------------
        */

        async function renderPage(pdf, pageNumber) {

            try {

                /*
                |----------------------------------------------------------------------
                | Ambil halaman
                |----------------------------------------------------------------------
                */

                const page =
                    await pdf.getPage(pageNumber);


                /*
                |----------------------------------------------------------------------
                | Ukuran asli PDF
                |----------------------------------------------------------------------
                */

                const originalViewport =
                    page.getViewport({
                        scale: 1
                    });


                /*
                |----------------------------------------------------------------------
                | Lebar container
                |----------------------------------------------------------------------
                |
                | PDF mengikuti 100% lebar area.
                |
                */

                const containerWidth =
                    pagesContainer.clientWidth;


                /*
                |----------------------------------------------------------------------
                | Target width
                |----------------------------------------------------------------------
                */

                const targetWidth =
                    containerWidth;


                /*
                |----------------------------------------------------------------------
                | Scale
                |----------------------------------------------------------------------
                */

                const scale =
                    targetWidth /
                    originalViewport.width;


                /*
                |----------------------------------------------------------------------
                | Viewport
                |----------------------------------------------------------------------
                */

                const viewport =
                    page.getViewport({
                        scale: scale
                    });


                /*
                |----------------------------------------------------------------------
                | DEVICE PIXEL RATIO
                |----------------------------------------------------------------------
                |
                | Dibatasi supaya rendering tidak terlalu berat.
                |
                */

                const devicePixelRatio =
                    Math.min(
                        window.devicePixelRatio || 1,
                        1.5
                    );


                /*
                |----------------------------------------------------------------------
                | CANVAS
                |----------------------------------------------------------------------
                */

                const canvas =
                    document.createElement('canvas');


                const context =
                    canvas.getContext(
                        '2d', {
                            alpha: false
                        }
                    );


                /*
                | Ukuran canvas sebenarnya
                */

                canvas.width =
                    Math.floor(
                        viewport.width *
                        devicePixelRatio
                    );

                canvas.height =
                    Math.floor(
                        viewport.height *
                        devicePixelRatio
                    );


                /*
                | Ukuran visual
                */

                canvas.style.width =
                    viewport.width + 'px';

                canvas.style.height =
                    viewport.height + 'px';


                canvas.className =
                    'pdf-page-canvas';


                /*
                |----------------------------------------------------------------------
                | WRAPPER HALAMAN
                |----------------------------------------------------------------------
                */

                const pageWrapper =
                    document.createElement('div');


                pageWrapper.className =
                    'pdf-page';


                pageWrapper.dataset.page =
                    pageNumber;


                pageWrapper.appendChild(
                    canvas
                );


                pagesContainer.appendChild(
                    pageWrapper
                );


                /*
                |----------------------------------------------------------------------
                | RENDER PDF
                |----------------------------------------------------------------------
                */

                await page.render({

                    canvasContext: context,

                    viewport: viewport,

                    transform: [
                        devicePixelRatio,
                        0,
                        0,
                        devicePixelRatio,
                        0,
                        0
                    ],

                    intent: 'display'

                }).promise;


                /*
                |----------------------------------------------------------------------
                | Cleanup
                |----------------------------------------------------------------------
                */

                page.cleanup();

            } catch (error) {

                console.error(
                    'Gagal render halaman ' +
                    pageNumber +
                    ':',
                    error
                );

            }

        }

    });
</script>


{{-- =========================================================
    STYLE
========================================================= --}}
<style>
    /* =========================================================
   SECTION
========================================================= */

    .regulasi-pdf-section {

        padding: 55px 0 90px;

        background: #ffffff;

    }


    /* =========================================================
   WRAPPER
========================================================= */

    .regulasi-pdf-wrapper {

        width: 100%;

        margin: 0 auto;

    }


    /* =========================================================
   HEADER PDF
========================================================= */

    .regulasi-pdf-header {

        width: 100%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 30px;

        margin-bottom: 25px;

    }


    /* =========================================================
   TITLE
========================================================= */

    .regulasi-pdf-title {

        min-width: 0;

    }


    /* =========================================================
   LABEL
========================================================= */

    .pdf-label {

        display: inline-block;

        margin-bottom: 8px;

        font-size: 12px;

        font-weight: 700;

        letter-spacing: 1px;

        color: #7047ff;

    }


    /* =========================================================
   TITLE
========================================================= */

    .regulasi-pdf-header h2 {

        margin: 0;

        font-size: 25px;

        line-height: 1.35;

        color: #111827;

    }


    /* =========================================================
   BUTTON
========================================================= */

    .pdf-button {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 8px;

        padding: 13px 20px;

        border-radius: 8px;

        color: #ffffff;

        background: #7047ff;

        text-decoration: none;

        font-weight: 600;

        white-space: nowrap;

        transition: .25s ease;

    }


    .pdf-button:hover {

        color: #ffffff;

        transform: translateY(-2px);

        box-shadow:
            0 10px 25px rgba(112, 71, 255, .20);

    }


    /* =========================================================
   PDF VIEWER
========================================================= */

    .pdf-viewer {

        width: 100%;

        padding: 0;

        background: #f5f5f5;

        border: 1px solid #e5e7eb;

        border-radius: 12px;

        overflow: hidden;

        box-shadow:
            0 10px 35px rgba(0, 0, 0, .06);

    }


    /* =========================================================
   PDF PAGES
========================================================= */

    .pdf-pages {

        width: 100%;

        display: flex;

        flex-direction: column;

        align-items: stretch;

        gap: 25px;

    }


    /* =========================================================
   SATU HALAMAN PDF
========================================================= */

    .pdf-page {

        width: 100%;

        max-width: 100%;

        margin: 0;

        background: #ffffff;

        overflow: hidden;

        box-shadow: none;

    }


    /* =========================================================
   CANVAS PDF
========================================================= */

    .pdf-page-canvas {

        display: block;

        width: 100%;

        height: auto;

    }


    /* =========================================================
   LOADING
========================================================= */

    .pdf-loading {

        min-height: 500px;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        gap: 15px;

        color: #6b7280;

        font-size: 14px;

    }


    /* =========================================================
   SPINNER
========================================================= */

    .pdf-spinner {

        width: 38px;

        height: 38px;

        border: 4px solid #e5e7eb;

        border-top-color: #7047ff;

        border-radius: 50%;

        animation:
            pdfSpin .8s linear infinite;

    }


    @keyframes pdfSpin {

        from {

            transform: rotate(0deg);

        }

        to {

            transform: rotate(360deg);

        }

    }


    /* =========================================================
   ERROR
========================================================= */

    .pdf-error {

        min-height: 450px;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        gap: 15px;

        text-align: center;

        color: #6b7280;

    }


    .pdf-error>i {

        font-size: 45px;

        color: #ef4444;

    }


    .pdf-error p {

        margin: 0;

        font-size: 14px;

    }


    /* =========================================================
   ERROR BUTTON
========================================================= */

    .pdf-error-button {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 11px 18px;

        border-radius: 8px;

        color: #ffffff;

        background: #7047ff;

        text-decoration: none;

        font-size: 14px;

        font-weight: 600;

    }


    .pdf-error-button:hover {

        color: #ffffff;

    }


    /* =========================================================
   TABLET
========================================================= */

    @media (max-width: 991px) {

        .regulasi-pdf-section {

            padding: 45px 0 75px;

        }


        .pdf-pages {

            gap: 20px;

        }


        .pdf-page {

            width: 100%;

            max-width: 100%;

        }

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media (max-width: 767px) {

        .regulasi-pdf-section {

            padding: 35px 0 60px;

        }


        .regulasi-pdf-header {

            align-items: flex-start;

            flex-direction: column;

            gap: 15px;

        }


        .regulasi-pdf-header h2 {

            font-size: 20px;

        }


        .pdf-button {

            width: 100%;

            justify-content: center;

        }


        .pdf-viewer {

            border-radius: 8px;

        }


        .pdf-pages {

            gap: 15px;

        }


        .pdf-page {

            width: 100%;

            max-width: 100%;

        }

    }
</style>


@endsection