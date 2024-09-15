   <!-- Navbar start -->
   <div class="container-fluid nav-bar bg-white">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0">Dream<span class="text-dark">Foods</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('index')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('shop')}}" class="nav-item nav-link">Menu</a>
                    <a href="bonus.html" class="nav-item nav-link">Featured-Bonus</a>
                    <a href="subscription.html" class="nav-item nav-link">Subscription</a>
                    <a href="chef.html" class="nav-item nav-link">Chef-At-Home</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>

                </div>
                <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                <a href="booking.html" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
