@extends("frontend.layouts.master")

@section("content")




<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container">
    <div class="row g-5 align-items-center" style="height: 700px;">
        <div class="col-lg-7 col-md-12">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated zoomIn">Welcome to Foody Restorant</small>
            <h1 class="display-1 mb-4 animated zoomIn">Feel<span class="text-primary">The</span>Flavor</h1>
            <div class="animated zoomIn" id="container-text">
                <div id="flip-text">
                    <div><div>Subscription</div></div>
                    <div><div>Special Day Gift</div></div>
                    <div><div>07 Order Gift</div></div>
                    <div><div>200% Cashback</div></div>
                </div>
            </div> <br>
            <a href="booking.html" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated zoomIn">Order Now</a>
        </div>
        <div class="col-sm-12 col-lg-5  img-clip-block">
            <div class="row img-clip-row mt-3">
                  <!-- First slideshow -->
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <div class="slideshow-container animated zoomIn" id="slideshow-container1">
                            <div class="bg-wheat rounded hero-roted">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-icon text-center">
                                        <div class="mySlides fade">
                                            <a href="wedding.html">
                                                <img src="{{ asset('frontend/img/Wedding.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="event.html">
                                                <img src="{{ asset('frontend/img/event.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                           <a href="delivery.html">
                                                <img src="{{ asset('frontend/img/home.png') }}" class="img-fluid hero-roted-img">
                                           </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="corporate.html">
                                                <img src="{{ asset('frontend/img/Corporate.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Second slideshow -->
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <div class="slideshow-container animated zoomIn" id="slideshow-container2">
                            <div class="bg-wheat rounded hero-roted">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-icon text-center">
                                        <div class="mySlides fade">
                                            <a href="bd.html">
                                                <img src="{{ asset('frontend/img/menu-hero.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="in.html">
                                                <img src="{{ asset('frontend/img/menu1-1.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="nl.html">
                                                <img src="{{ asset('frontend/img/menu1-2.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>

           <div class="row img-clip-row" style="margin-top: -30px;">
            <div class="col-lg-12 col-md-12">
              <div class="bg-wheat rounded hero-mid-roted">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <img src="{{ asset('frontend/img/foody.png') }}" class="img-fluid hero-mid-roted-img" alt="">
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <div class="row img-clip-row" style="margin-top: -30px;">
                    <!-- Third slideshow -->
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <div class="slideshow-container animated zoomIn" id="slideshow-container3">
                            <div class="bg-wheat rounded hero-roted">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-icon text-center">
                                        <div class="mySlides fade">
                                            <a href="subscription.html">
                                                <img src="{{ asset('frontend/img/Subscription.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="subscription.html">
                                                <img src="{{ asset('frontend/img/Subscription1.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="subscription.html">
                                                <img src="{{ asset('frontend/img/Subscription2.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <!-- <div class="mySlides fade">
                                            <a href="subscription.html">
                                                <img src="{{ asset('frontend/img/') }}event-4.jpg" class="img-fluid hero-roted-img">
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fourth slideshow -->
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <div class="slideshow-container animated zoomIn" id="slideshow-container4">
                            <div class="bg-wheat rounded hero-roted">
                                <div class="service-content d-flex align-items-center justify-content-center p-4">
                                    <div class="service-content-icon text-center">
                                        <div class="mySlides fade">
                                            <a href="bonus.html">
                                                <img src="{{ asset('frontend/img/event.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="bonus.html">
                                                <img src="{{ asset('frontend/img/home.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="bonus.html">
                                                <img src="{{ asset('frontend/img/menu2-4.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>

                                        <div class="mySlides fade">
                                            <a href="bonus.html">
                                                <img src="{{ asset('frontend/img/menu2-8.png') }}" class="img-fluid hero-roted-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Hero End -->

<!-- choos us Start -->
<div class="container-fluid service py-6">
    <div class="container">
    <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-5">Why people choose us?</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
            <div class="bg-wheat rounded choosing">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                    <div class="service-content-icon text-center">
                        <img class="flex-shrink-0 img-fluid choosing-img" src="{{ asset('frontend/img/choosing1.webp') }}" alt="">
                        <h4 class="mb-3">Menu for every taste</h4>
                        <p class="mb-4 pera-size"> Based on your wishes, we give advice on which hairstyle and hair length best suits your face. And our color specialists will give you the right color advice.</p>
                        <a href="choose.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
            <div class="bg-wheat rounded choosing">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                    <div class="service-content-icon text-center">
                        <img class="flex-shrink-0 img-fluid choosing-img" src="{{ asset('frontend/img/choosing2.png') }}" alt="">
                        <h4 class="mb-3">Always fresh ingredients</h4>
                        <p class="mb-4 pera-size">We have been cutting, dyeing and styling men as women for 20 years. Our stylists are trained in … and are aware of the latest techniques.</p>
                        <a href="choose.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
            <div class="bg-wheat rounded choosing">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                    <div class="service-content-icon text-center">
                        <img class="flex-shrink-0 img-fluid choosing-img" src="{{ asset('frontend/img/choosing3.png') }}" alt="">
                        <h4 class="mb-3">Experienced chefs</h4>
                        <p class="mb-4 pera-size">Your wishes and hair type determine the exact price of the treatment. We provide full transparency on this before we start.</p>
                        <a href="choose.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- choos us End -->
<!-- Fact Start-->
<div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center display-block">
            <div class="col-lg-12 col-md-12 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                <div class="video">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Service Start -->
<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5">Our Service</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-wheat rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Wedding Services</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="wedding.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                <div class="bg-wheat rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Corporate Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="corporate.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                <div class="bg-wheat rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-hotdog fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Event Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="event.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-wheat rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Home Delivery</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="delivery.html" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Menu Start -->
<div class="container-fluid menu bg-light py-6 my-6">
<div class="container">
<div class="text-center wow bounceInUp" data-wow-delay="0.1s">
    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Menu</small>
    <h1 class="display-5 mb-5">Most Popular Food in the World</h1>
</div>
<div class="tab-class text-center">
    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
        <li class="nav-item p-2">
            <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                <span class="text-dark" style="width: 150px;">Starter</span>
            </a>
        </li>
        <li class="nav-item p-2">
            <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                <span class="text-dark" style="width: 150px;">Main Course</span>
            </a>
        </li>
        <li class="nav-item p-2">
            <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-8">
                <span class="text-dark" style="width: 150px;">Drinks</span>
            </a>
        </li>
        <li class="nav-item p-2">
            <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                <span class="text-dark" style="width: 150px;">Offers</span>
            </a>
        </li>
        <li class="nav-item p-2">
            <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-10">
                <span class="text-dark" style="width: 150px;">Our Spesial</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="tab-6" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Paneer</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sweet Potato</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sabudana Tikki</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-04.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Pizza</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-05.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Bacon</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-06.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Chicken</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Blooming</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-08.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sweet</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-7" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Argentinian</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Crispy</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-05.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sabudana Tikki</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Blooming</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-08.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Argentinian</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Lemon</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Water Drink</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Salty lemon</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-8" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Crispy water</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Juice</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Orange</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-04.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Apple Juice</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-05.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Banana</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-06.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sweet Water</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Hot Coffee</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-08.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sweet Potato</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-9" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-06.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sabudana Tikki</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Crispy</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-09.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Pizza</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Bacon</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Chicken</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-05.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Blooming</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sweet</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-09.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Argentinian</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-10" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-06.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sabudana Tikki</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Crispy</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-09.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Pizza</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Bacon</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Chicken</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-05.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Blooming</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Sweet</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-09.jpg') }}" alt="">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                <h4>Argentinian</h4>
                                <h4 class="text-primary">$90</h4>
                            </div>
                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Menu End -->

@endsection
