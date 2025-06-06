@extends('layouts.user.master')
@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        {{-- <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol> --}}
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
                    <p class="mb-0">🎓 Yuk Gabung di Bimbel Kami! 🚀<a class="text-primary fw-bold"
                            href="https://htmlcodex.com/contact-form">Bimbelku</a>.</p>
                </div>
                <form action="{{ route('pendaftaran.daftar') }}" method="post">
                    @csrf
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="name"
                                    name="namasiswa" placeholder="Your Name">
                                <label for="name">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="alamat"
                                    name="alamat" placeholder="Your Address">
                                <label for="alamat">alamat</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control border-0" id="phone"
                                    name="no_tlp" placeholder="Phone">
                                <label for="phone">Nomor Telepon</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="date" class="form-control border-0" id="dob"
                                    name="tgl_lahir" placeholder="dob">
                                <label for="dob">Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="date" class="form-control border-0" id="dob"
                                    name="tgl_lahir" placeholder="dob">
                                <label for="dob">Tanggal pendaftaran</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="alamat"
                                    name="alamat" placeholder="Your Address">
                                <label for="alamat">Kursus</label>
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
                                <h4>Alamat</h4>
                                <p class="mb-0">SMK Assalaam Bandung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Email</h4>
                                <p class="mb-0">info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Telepon</h4>
                                <p class="mb-0">(+62)8888888888</p>
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

@endsection
