@extends("frontend.layouts.master")

@section("content")

<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <div class="col-12">
                @if(session('success'))
                    <div id="success-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Start -->
     <div class="container-fluid bg-light mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Products Items</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Products Items</li>
            </ol>
        </div>
    </div>
<!-- Breadcrumb End -->

<!-- Products Start -->
<div class="container-fluid menu bg-light">
    <div class="container">
        <div class="tab-class text-center">
            <div class="tab-content">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-1.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Boiled Egg</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                            {{-- <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i> --}}
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex" >
                                            <a href="detail1.html">
                                                <i class="fa-solid fa-eye" style="font-size: x-large; margin-left: 75px;"></i>
                                            </a>
                                        </div>
                                            <a href="#" class="btn btn-primary rounded-pill">Add To Card
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-2.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Tomato Cucumber</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex" style="text-align: right;">
                                            <a href="detail2.html">
                                                <i class="fa-solid fa-eye" style="font-size: x-large; margin-left: 75px;"></i>
                                            </a>
                                        </div>
                                            <a href="#" class="btn btn-primary rounded-pill">Add To Card
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-3.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Chicken Galantine</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex" style="text-align: right;">
                                            <a href="detail1.html">
                                                <i class="fa-solid fa-eye" style="font-size: x-large; margin-left: 75px;"></i>
                                            </a>
                                        </div>
                                            <a href="#" class="btn btn-primary rounded-pill">Add To Card
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-4.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Healthy Oatmeal</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex" style="text-align: right;">
                                            <a href="detail2.html">
                                                <i class="fa-solid fa-eye" style="font-size: x-large; margin-left: 75px;"></i>
                                            </a>
                                        </div>
                                            <a href="#" class="btn btn-primary rounded-pill">Add To Card
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-5.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Barley Porridge</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                                                            <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex">

                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-6.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Sald Salmon</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                                                            <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex">

                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-7.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Avocado Tuna</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                                                            <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex">

                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-white rounded menu-2">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <img src="{{ asset('frontend/img/menu2-8.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                                    <h4 class="mb-3">Shrimps Tomato</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                                                            <div class="row">
                                        <div class=" col-md-6 col-sm-12 d-flex">
                                            <h4 class="text-primary">$19</h4>
                                        </div>
                                        <div class=" col-md-6 col-sm-12 d-flex">

                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
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
<!-- Products End -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        }
    });
</script>

@endsection
