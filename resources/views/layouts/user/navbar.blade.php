        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><img src="{{ asset('assets/front/img/logo-no-bg.png') }}"
                            alt="Logo"></i>Bimbelku</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('blog') }}"
                            class="nav-item nav-link {{ Request::routeIs('blog') ? 'active' : '' }}">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#"
                                class="nav-link dropdown-toggle {{ Request::routeIs('testimoni') ? 'active' : '' }}"
                                data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('course') }}"
                                    class="dropdown-item {{ Request::routeIs('course') ? 'active' : '' }}">Our
                                    Course</a>
                                <a href="{{ route('testimoni') }}"
                                    class="dropdown-item {{ Request::routeIs('testimoni') ? 'active' : '' }}">Testimonial</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3"
                        data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="login"
                        class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Login</a>
                </div>
            </nav>

            <!-- Header Start -->
            <!-- <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our News & Blog</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">News & Blog</li>
                    </ol>
                </div>
            </div> -->
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->
