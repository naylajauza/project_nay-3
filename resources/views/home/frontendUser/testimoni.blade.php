@extends('layouts.user.master')
@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimoni</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Testimonials</li>
        </ol> --}}
    </div>
</div>

<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Testimoni</h4>
            <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
           @foreach ($testimoni as $item)
           <div class="testimonial-item text-center p-4">
            <p>{{ $item->deskripsi }}</p>
            <div class="d-flex justify-content-center mb-4">
                <img src="{{ asset($item->cover) }}" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
            </div>
            <div class="d-block">
                <h4 class="text-dark">{{ $item->nama_siswa }}</h4>
                <p class="m-0 pb-3">{{ $item->pesan }}</p>
                <div class="d-flex justify-content-center text-secondary">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
           @endforeach
        </div>
    </div>
</div>

@endsection
