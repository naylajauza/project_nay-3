@extends('layouts.user.master')
@section('content')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our News & Blog</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">News & Blog</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Blog</h4>
                <h1 class="display-3 text-capitalize mb-3">Latest Blog & News</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($artikel as $item)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset($item->cover) }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i>
                                    {{ $item->tanggal }}</div>
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-3">{{ $item->judul }}</a>
                                <p>{{ $item->deskripsi }}</p>
                                <a href="#" data-id="{{ $item->id }}" data-judul="{{ $item->judul }}"
                                    data-deskripsi="{{ $item->deskripsi }}" data-tanggal="{{ $item->tanggal }}"
                                    data-cover="{{ asset($item->cover) }}" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" class="fw-bold text-secondary btn-readmore">Read
                                    More
                                    <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Testimonials</h4>
                <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias,
                        sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="img/testimonial-1.jpg" class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias,
                        sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="img/testimonial-2.jpg" class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias,
                        sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="img/testimonial-3.jpg" class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias,
                        sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="img/testimonial-3.jpg" class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="kursusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalTitle">Detail Kursus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-4">
                    <!-- Gambar Kursus -->
                    <div class="text-center mb-3">
                        <img id="modalImage" src="" class="img-fluid rounded mb-3 shadow" alt="Kursus Image"
                            style="max-height: 250px; object-fit: cover;">
                    </div>

                    <!-- Informasi Kursus -->
                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <span id="modalDate" class="text-muted fw-semibold"></span>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="text-start">
                        <h5 class="fw-semibold mb-2">Deskripsi:</h5>
                        <div id="modalDescription" class="text-muted overflow-auto" style="max-height: 250px;"></div>
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
            $('.btn-readmore').click(function(e) {
                e.preventDefault();

                var judul = $(this).data('judul');
                var deskripsi = $(this).data('deskripsi');
                var tanggal = $(this).data('tanggal');
                var cover = $(this).data('cover');

                // Set data ke dalam modal
                $('#modalTitle').text(judul);
                $('#modalDate').html('<i class="fa fa-calendar-alt me-1"></i> ' + tanggal);
                $('#modalDescription').text(deskripsi);
                $('#modalImage').attr('src', cover);
            });
        });
    </script>
@endsection
