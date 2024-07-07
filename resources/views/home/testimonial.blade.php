<style>
    #active-testimonial{
        color: #ce1212 !important;
    }
</style>
@include('home.includes.header')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('home.includes.navbar')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>

                <div class="owl-carousel testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>{{ $testimonial->review }}</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('/assets/place_holder.jpeg') }}" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">{{ $testimonial->name }}</h5>
                                    <small>{{ $testimonial->profession }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <h1 class="mb-5 mt-3 text-center">Share your experience</h1>
                <form method="POST" action="{{ route('testimonial.store') }}">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required />
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="number" name="number" placeholder="Your Phone Number" required />
                                <label for="number">Your Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="profession" name="profession" placeholder="Your Profession" required />
                                <label for="profession">Your Profession</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="review" name="review" style="height: 100px" required></textarea>
                                <label for="review">Review</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-50 m-auto d-flex justify-content-center py-3" type="submit">
                                Send
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- Testimonial End -->

@include('home.includes.footer')
