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
@endsection
