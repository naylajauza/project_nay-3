@extends('layouts.user.master')
@section('content')
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
                        <img src="{{asset($item->cover)}}" class="img-fluid rounded-top w-100" alt="">
                        <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> {{$item->tanggal}}</div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-3">{{$item->judul}}</a>
                        <p>{{$item->deskripsi}}</p>
                        <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/testimonial-1.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/testimonial-2.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/testimonial-3.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/testimonial-3.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
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
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, sed harum perspiciatis ad libero incidunt. Amet distinctio aperiam saepe, est mollitia facere rerum vel quasi veritatis ducimus, optio recusandae cumque!<a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">ipsum dolor</a>.</p>
                        </div>
                        <form action="{{route('pendaftaran.daftar')}}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" name="namasiswa" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="alamat" name="alamat" placeholder="Your Address">
                                        <label for="alamat">Your Address</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control border-0" id="phone" name="no_tlp" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0" id="dob" name="tgl_lahir" placeholder="dob">
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
                                    <iframe class="w-100 rounded" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3607727454437!2d107.59005787459984!3d-6.966697168212442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sen!2sid!4v1740382975721!5m2!1sen!2sid"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -
@endsection
