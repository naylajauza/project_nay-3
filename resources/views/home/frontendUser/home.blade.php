@extends('layouts.user.master')
@section('content')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Selamat Datang Di Bimbelku</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                {{-- <li class="breadcrumb-item active text-primary">Home</li> --}}
            </ol>
        </div>
    </div>

    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;"
                            alt="">
                        <div class="about-exp"><span>20 Years Experiance</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Tentang Kami</h4>
                        <h1 class="display-3 mb-3"> Kami adalah lembaga bimbingan yang berkomitmen
                            untuk membantu siswa meraih
                            kesuksesan akademik melalui pendekatan pembelajaran yang efektif,
                            menyenangkan, dan sesuai dengan kebutuhan masing-masing siswa.
                        </p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px;"><i
                                                    class="fas fa-tint text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Visi</a>
                                            <p class="mb-0">Kami Menjadi lembaga bimbingan terdepan yang tidak
                                                hanya membantu siswa meraih nilai terbaik, tetapi juga membentuk karakter
                                                 dan keterampilan yang diperlukan untuk menghadapi tantangan masa depan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px;"><i
                                                    class="fas fa-faucet text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Misi</a>
                                            <p class="mb-0">Menyediakan pengajaran yang berkualitas dan sesuai dengan kurikulum terkini.
                                                Membantu siswa dalam memahami materi pelajaran dengan cara yang mudah dan menyenangkan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- COURSE --}}

        <div class="container-fluid product py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Kursus</h4>
                <h1 class="display-3 text-capitalize mb-3">Kami Memberikan Kursus Terbaik</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($kursus as $data)
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-item">
                                <div class="product-content bg-light text-center rounded-bottom p-4">
                                    <p>durasi {{ $data->durasi }}</p>
                                    <a href="#" class="h4 d-inline-block mb-3">{{ $data->nama_kursus }}</a>
                                    <p class="fs-4 text-primary mb-3">Rp.
                                        {{ number_format((int) $data->harga, 0, ',', '.') }}</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kursusModal"
                                        data-id="{{ $data->id }}" data-nama="{{ $data->nama_kursus }}"
                                        data-harga="Rp. {{ number_format((int) $data->harga, 0, ',', '.') }}"
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

        <!-- BLOG -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Artikel</h4>
                    <h1 class="display-3 text-capitalize mb-3">Artikel dan Berita terbaru</h1>
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
                    <h4 class="text-uppercase text-primary">Testimoni</h4>
                    <h1 class="display-3 text-capitalize mb-3">Ulasan klien kami</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis
                            molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
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
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis
                            molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
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
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis
                            molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
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
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis
                            molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
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

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                            <h4 class="text-uppercase text-primary">AYO</h4>
                            <h1 class="display-3 text-capitalize mb-3">Daftar Sekarang</h1>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, sed harum
                                perspiciatis ad libero incidunt. Amet distinctio aperiam saepe, est mollitia facere rerum
                                vel quasi veritatis ducimus, optio recusandae cumque!<a class="text-primary fw-bold"
                                    href="https://htmlcodex.com/contact-form">ipsum dolor</a>.</p>
                        </div>
                        <form action="{{ route('pendaftaran.daftar') }}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name"
                                            name="namasiswa" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="alamat"
                                            name="alamat" placeholder="Your Address">
                                        <label for="alamat">Your Address</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control border-0" id="phone"
                                            name="no_tlp" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0" id="dob"
                                            name="tgl_lahir" placeholder="dob">
                                        <label for="dob">Your Date Of Birth</label>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="hidden" class="form-control border-0" id="tgl_pendaftaran" name="tgl_pendaftaran" placeholder="tgl_pendaftaran">
                                    <label for="tgl_pendaftaran">Your Date Of Birth</label>
                                </div>
                            </div> --}}
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Daftar Sekarang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Address</h4>
                                        <p class="mb-0">123 North tower New York, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0">info@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0">(+012) 3456 7890 123</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="h-100 overflow-hidden">
                                    <iframe class="w-100 rounded" style="height: 400px;"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3607727454437!2d107.59005787459984!3d-6.966697168212442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sen!2sid!4v1740382975721!5m2!1sen!2sid"
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End !-->
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
