@extends("frontend.layouts.master")

@section("content")


    <!-- Hero Start -->
    <div class="container-fluid bg-light mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">About</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">About</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

@endsection

