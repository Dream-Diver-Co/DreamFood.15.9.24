@extends("frontend.layouts.master")

@section("content")

<!-- Hero Start -->
<div class="container-fluid bg-light mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Most Popular Food in the World</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Menu</li>
        </ol>
    </div>
</div>
<!-- Hero End -->

<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Bangladesh</small>
                <h1 class="display-5">Bangladesh Most Popular Food</h1>
            </div> -->
            <div class="col-lg-4 col-md-12">
                <div id="tab-6" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach($categories as $category)
                        <div class="col-lg-12 wow bounceInUp" data-wow-delay="0.1s">
                            <a href="{{ route('categories.subcategories', $category->id) }}">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="object-fit: cover;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>{{ $category->name }}</h4>
                                            {{-- <h4 class="text-primary">90k</h4> --}}
                                        </div>
                                        <p class="mb-0">Most Popular Food of this Country.
                                            <span class="subcategory-btn">more food</span>
                                        </p>
                                        <!-- <a href="" >Bangladesh More Popular Food</a> -->
                                        <!-- <button class="menu-btn">More Food</button> -->
                                        {{-- <a href="bd.html" class="btn btn-primary px-4 py-2 rounded-pill menu-btn">More Food</a> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="col-lg-12 wow bounceInUp" data-wow-delay="0.2s">
                            <a href="in.html">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>India Food Item</h4>
                                            {{-- <h4 class="text-primary">$90</h4> --}}
                                        </div>
                                        <p class="mb-0">Most Popular Food of this Country.</p>
                                        <a href="in.html" class="btn btn-primary px-4 py-2 rounded-pill menu-btn">More Food</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12 wow bounceInUp" data-wow-delay="0.3s">
                            <a href="pk.html">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Pakistan Food Item</h4>
                                            {{-- <h4 class="text-primary">$90</h4> --}}
                                        </div>
                                        <p class="mb-0">Most Popular Food of this Country.</p>
                                        <a href="pk.html" class="btn btn-primary px-4 py-2 rounded-pill menu-btn">More Food</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="slideshow-container animated zoomIn">
                    <div class="mySlides fade">
                      <img src="{{ asset('frontend/img/menu1-1.png') }}" class="img-fluid menu-img rounded" alt="">
                    </div>

                    <div class="mySlides fade">
                      <img src="{{ asset('frontend/img/menu1-2.png') }}" class="img-fluid menu-img rounded" alt="">
                    </div>

                    <div class="mySlides fade">
                      <img src="{{ asset('frontend/img/menu2-1.png') }}" class="img-fluid menu-img rounded" alt="">
                    </div>

                    <div class="mySlides fade">
                       <img src="{{ asset('frontend/img/menu2-2.png') }}" class="img-fluid menu-img rounded" alt="">
                    </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('frontend/img/menu2-3.png') }}" class="img-fluid menu-img rounded" alt="">
                     </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('frontend/img/menu2-4.png') }}" class="img-fluid menu-img rounded" alt="">
                     </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('frontend/img/menu2-5.png') }}" class="img-fluid menu-img rounded" alt="">
                     </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('frontend/img/menu2-6.png') }}" class="img-fluid menu-img rounded" alt="">
                     </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('frontend/img/menu2-7.png') }}" class="img-fluid menu-img rounded" alt="">
                     </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                {{-- <div id="tab-6" class="tab-pane fade show p-0 active"> --}}
                    <div class="row g-4">
                        <div class="col-lg-12 wow bounceInUp" data-wow-delay="0.1s">
                            <a href="nl.html">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg') }}" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Netherlands Food Item</h4>
                                            {{-- <h4 class="text-primary">90k</h4> --}}
                                        </div>
                                        <p class="mb-0">Most Popular Food of this Country.
                                            <span class="subcategory-btn">more food</span>
                                        </p>
                                        {{-- <a href="nl.html" class="btn btn-primary px-4 py-2 rounded-pill menu-btn">More Food</a> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12 wow bounceInUp" data-wow-delay="0.2s">
                            <a href="in.html">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg') }}" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Italy Food Item</h4>
                                            {{-- <h4 class="text-primary">$90</h4> --}}
                                        </div>
                                        <p class="mb-0">Most Popular Food of this Country.</p>
                                        <a href="in.html" class="btn btn-primary px-4 py-2 rounded-pill menu-btn">More Food</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12 wow bounceInUp" data-wow-delay="0.3s">
                            <a href="pk.html">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg') }}" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Romania Food Item</h4>
                                            {{-- <h4 class="text-primary">$90</h4> --}}
                                        </div>
                                        <p class="mb-0">Most Popular Food of this Country.</p>
                                        <a href="bd.html" class="btn btn-primary px-4 py-2 rounded-pill menu-btn">More Food</a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>


@endsection

