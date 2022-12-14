<!DOCTYPE html>
<html lang="en">
    @php
    $about=App\Models\Backend\About::first();
    //$education=App\Models\Backend\Education::all();
    @endphp
  <head>
    <!-- head -->
    @include('frontend.includes.head')
    <!-- css -->
    @include('frontend.includes.css')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span>R</span>onaldo</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
	<section class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Hey! I am</span>
                        <h1>{{ $about->name }}</h1>
                        <h2>I am a
                             <span class="txt-rotate" data-period="2000"
                                data-rotate='[ "Web Designer.", "Developer.", "Photographer.", "Marketer.", "Blogger" ]'>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
		</div>
    </section>
    <!-- about -->
    @include('frontend.includes.about')
    <!-- resume -->
    @include('frontend.includes.resume')
    <!-- service -->
    @include('frontend.includes.service')
    <!-- project-->
    @include('frontend.includes.project')
    <!-- blog -->
    @include('frontend.includes.blog')
    <!-- contact -->
    @include('frontend.includes.contact')
    <!-- footer -->
    @include('frontend.includes.footer')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <!-- script -->
    @include('frontend.includes.script')
  </body>
</html>
