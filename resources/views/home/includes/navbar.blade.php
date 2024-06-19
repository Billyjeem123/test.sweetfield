<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0 d-flex align-items-center">
            <img src="/assets/img/logo.jpeg" alt="Logo" />
            <h1 class="text-light mx-2 d-flex flex-column">
                Sweettaste <br />
                <small class="section-title ff-secondary" style="font-size: 15px">Signature</small>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('food_menu')}}" class="nav-item nav-link">Menu</a>
                <a href="testimonial.html" class="nav-item nav-link">Testimonial</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="menu.html" class="btn btn-primary py-2 px-4">Place Orders</a>
        </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5" style="min-height: 70vh !important">
                <div class="col-lg-8 m-auto text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">
                        Welcome to Sweettaste
                    </h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">
                        Eating healthy food should be a lifestyle and that's what
                        SWEETTASTE is all about. <br />
                        We make good and tasty food to keep you coming back!
                    </p>
                    <a href="menu.html" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Place
                        Orders</a>
                </div>
                <!-- <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="img/hero.png" alt="">
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
