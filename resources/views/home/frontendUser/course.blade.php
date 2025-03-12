@extends('layouts.user.master')
@section('content')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Course</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Our Course</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid product py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Course</h4>
                <h1 class="display-3 text-capitalize mb-3">We Deliver Best Course.</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($kursus as $data)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="product-item">
                            <div class="product-content bg-light text-center rounded-bottom p-4">
                                <p>durasi {{ $data->durasi }}</p>
                                <a href="#" class="h4 d-inline-block mb-3">{{ $data->nama_kursus }}</a>
                                <p class="fs-4 text-primary mb-3">Rp. {{ number_format($data->harga, 0, ',', '.') }}</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#kursusModal"
                                    data-id="{{ $data->id }}" data-nama="{{ $data->nama_kursus }}"
                                    data-harga="Rp. {{ number_format($data->harga, 0, ',', '.') }}"
                                    data-durasi="{{ $data->durasi }}" data-deskripsi="{{ $data->deskripsi }}"
                                    class="btn
                                    btn-secondary rounded-pill py-2 px-4 btn-readmore-kursus">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="kursusModal" tabindex="-1" role="dialog" aria-labelledby="kursusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Detail Kursus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <h4 class="fw-bold" id="modalNama"></h4>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-clock me-2 text-secondary"></i>
                        <span class="fw-semibold">Durasi:</span>
                        <span id="modalDurasi" class="ms-2"></span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-tag me-2 text-secondary"></i>
                        <span class="fw-semibold">Harga:</span>
                        <span id="modalHarga" class="text-primary fs-4 ms-2"></span>
                    </div>

                    <div>
                        <h5 class="fw-semibold mb-2">Deskripsi:</h5>
                        <p id="modalDeskripsi" class="text-muted"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.btn-readmore-kursus').click(function(e) {
                e.preventDefault();

                // Ambil data dari atribut tombol yang diklik
                var nama = $(this).data('nama');
                var harga = $(this).data('harga');
                var durasi = $(this).data('durasi');
                var deskripsi = $(this).data('deskripsi');

                // Set data ke dalam modal
                $('#modalTitle').text(nama);
                $('#modalNama').text(nama);
                $('#modalDurasi').text(durasi);
                $('#modalHarga').text(harga);
                $('#modalDeskripsi').text(deskripsi);
            });
        });
    </script>
@endsection
