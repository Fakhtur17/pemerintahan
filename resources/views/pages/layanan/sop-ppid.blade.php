@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', ($sop->judul ?? 'SOP PPID') . ' | Layanan PPID')

@section('meta_description', $sop->judul ?? 'SOP PPID Kabupaten Brebes')

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
                        SOP App PPID
                    </h1>

                    <p>
                        Standar Operasional Prosedur Layanan PPID Kabupaten Brebes
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

        {{-- KEMBALI --}}

        <div class="back-button-wrapper">

            <a
                href="{{ route('layanan.index') }}"
                class="back-button">

                <i class="fa-solid fa-arrow-left"></i>

                Kembali ke Layanan PPID

            </a>

        </div>


        @if($sop)

        <div class="regulasi-pdf-wrapper">


            {{-- =================================================
                    HEADER PDF
                ================================================== --}}

            <div class="regulasi-pdf-header">

                <div class="regulasi-pdf-title">

                    <span class="pdf-label">
                        DOKUMEN SOP PPID
                    </span>

                    <h2>
                        {{ $sop->judul }}
                    </h2>

                </div>


                {{-- BUKA PDF --}}

                <a
                    href="{{ asset('storage/' . $sop->file_pdf) }}"
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

                <div
                    id="pdf-loading"
                    class="pdf-loading">

                    <div class="pdf-spinner"></div>

                    <span>
                        Memuat dokumen...
                    </span>

                </div>


                <div
                    id="pdf-pages"
                    class="pdf-pages">
                </div>


                <div
                    id="pdf-error"
                    class="pdf-error"
                    style="display: none;">

                    <i class="fa-solid fa-file-circle-xmark"></i>

                    <p>
                        Dokumen PDF tidak dapat ditampilkan.
                    </p>

                    <a
                        href="{{ asset('storage/' . $sop->file_pdf) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="pdf-error-button">

                        <i class="fa-solid fa-file-pdf"></i>

                        Buka PDF

                    </a>

                </div>

            </div>

        </div>

        @else

        {{-- =================================================
                JIKA BELUM ADA SOP
            ================================================== --}}

        <div class="empty-document">

            <i class="fa-solid fa-file-circle-xmark"></i>

            <h3>
                SOP PPID Belum Tersedia
            </h3>

            <p>
                Dokumen SOP PPID Kabupaten Brebes belum tersedia.
            </p>

            <a
                href="{{ route('layanan.index') }}"
                class="pdf-button">

                <i class="fa-solid fa-arrow-left"></i>

                Kembali ke Layanan

            </a>

        </div>

        @endif

    </div>

</section>


@if($sop)

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const pdfUrl =
            "{{ asset('storage/' . $sop->file_pdf) }}";

        const pagesContainer =
            document.getElementById('pdf-pages');

        const loadingElement =
            document.getElementById('pdf-loading');

        const errorElement =
            document.getElementById('pdf-error');


        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';


        pdfjsLib.getDocument({

                url: pdfUrl,

                disableAutoFetch: false,

                disableStream: false

            }).promise

            .then(async function(pdf) {

                loadingElement.style.display = 'none';

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

                loadingElement.style.display = 'none';

                errorElement.style.display = 'flex';

            });


        async function renderPage(pdf, pageNumber) {

            try {

                const page =
                    await pdf.getPage(pageNumber);


                const originalViewport =
                    page.getViewport({
                        scale: 1
                    });


                const containerWidth =
                    pagesContainer.clientWidth;


                const scale =
                    containerWidth /
                    originalViewport.width;


                const viewport =
                    page.getViewport({
                        scale: scale
                    });


                const devicePixelRatio =
                    Math.min(
                        window.devicePixelRatio || 1,
                        1.5
                    );


                const canvas =
                    document.createElement('canvas');


                const context =
                    canvas.getContext(
                        '2d', {
                            alpha: false
                        }
                    );


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


                canvas.style.width =
                    viewport.width + 'px';


                canvas.style.height =
                    viewport.height + 'px';


                canvas.className =
                    'pdf-page-canvas';


                const pageWrapper =
                    document.createElement('div');


                pageWrapper.className =
                    'pdf-page';


                pageWrapper.dataset.page =
                    pageNumber;


                pageWrapper.appendChild(canvas);

                pagesContainer.appendChild(
                    pageWrapper
                );


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

@endif


<style>
    .regulasi-pdf-section {

        padding: 55px 0 90px;

        background: #ffffff;

    }


    .back-button-wrapper {

        display: flex;

        justify-content: center;

        margin-bottom: 25px;

    }


    .back-button {

        display: inline-flex;

        align-items: center;

        gap: 7px;

        padding: 11px 18px;

        background: #0d6efd;

        color: #ffffff;

        border-radius: 6px;

        text-decoration: none;

        font-size: 14px;

        font-weight: 500;

        transition: .25s ease;

    }


    .back-button:hover {

        color: #ffffff;

        transform: translateY(-2px);

        box-shadow:
            0 8px 20px rgba(13, 110, 253, .2);

    }


    .regulasi-pdf-wrapper {

        width: 100%;

        margin: 0 auto;

    }


    .regulasi-pdf-header {

        width: 100%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 30px;

        margin-bottom: 25px;

    }


    .regulasi-pdf-title {

        min-width: 0;

    }


    .pdf-label {

        display: inline-block;

        margin-bottom: 8px;

        font-size: 12px;

        font-weight: 700;

        letter-spacing: 1px;

        color: #7047ff;

    }


    .regulasi-pdf-header h2 {

        margin: 0;

        font-size: 25px;

        line-height: 1.35;

        color: #111827;

    }


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


    .pdf-pages {

        width: 100%;

        display: flex;

        flex-direction: column;

        align-items: stretch;

        gap: 25px;

    }


    .pdf-page {

        width: 100%;

        max-width: 100%;

        margin: 0;

        background: #ffffff;

        overflow: hidden;

    }


    .pdf-page-canvas {

        display: block;

        width: 100%;

        height: auto;

    }


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


    .empty-document {

        min-height: 400px;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        text-align: center;

        gap: 12px;

        border: 1px solid #e5e7eb;

        border-radius: 12px;

    }


    .empty-document>i {

        font-size: 50px;

        color: #9ca3af;

    }


    .empty-document h3 {

        margin: 0;

        color: #111827;

    }


    .empty-document p {

        margin: 0 0 10px;

        color: #6b7280;

    }


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

    }
</style>


@endsection