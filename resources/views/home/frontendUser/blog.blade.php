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
@endsection
