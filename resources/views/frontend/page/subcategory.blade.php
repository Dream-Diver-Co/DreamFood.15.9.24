@extends("frontend.layouts.master")

@section("content")

<!-- Menu Start -->
<div class="container-fluid menu bg-light">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5">Most Popular Food in the World</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <i class="fa-solid fa-mug-saucer menu-icon me-2"></i>
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                        <span class="text-dark" style="width: 150px;">Breakfast</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-plate-wheat menu-icon me-2"></i>
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                        <span class="text-dark" style="width: 150px;">Lunch</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-utensils menu-icon me-2"></i>
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-8">
                        <span class="text-dark" style="width: 150px;">Dinner</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-wine-glass-empty menu-icon me-2"></i>
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                        <span class="text-dark" style="width: 150px;">Drinks</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-ice-cream menu-icon me-2"></i>
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-10">
                        <span class="text-dark" style="width: 150px;">Dessert</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="tab-6" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                            <a href="{{ route('product')}}">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg') }}" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Paneer</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet Potato</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                    </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.
                                    <span class="subcategory-btn">more food</span>
                                </p>
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

