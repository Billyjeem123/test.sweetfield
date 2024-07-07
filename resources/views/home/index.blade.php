@include('home.includes.header')
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @include('home.includes.navbar')
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
                            <a href="{{route('food_menu')}}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Place
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

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="/assets/img/food-img/food-14.jpg" />
                            </div>

                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="/assets/img/food-img/food-38.jpg" style="margin-top: 25%" width="60%" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="/assets/img/food-img/food-31.jpg" width="60%" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="/assets/img/food-img/food-12.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            About Us
                        </h5>
                        <h1 class="mb-4">Welcome to Sweettaste Signature</h1>
                        <p class="mb-4">
                            Sweettaste Signature is the culmination of a lifelong passion
                            for culinary excellence, inspired by the rich flavors and
                            traditions of cuisines all around the globe.
                        </p>
                        <p class="mb-4">
                            Our founder, grew up in a family of food enthusiasts, where
                            mealtimes were always a celebration of love, laughter, and
                            delicious food.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        15
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        50
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="about.blade.php">Read More</a>
                        <div
                            class="ads p-5 bg-primary my-5 d-flex justify-content-center align-items-center flex-column">
                            <p class="text-light text-center">
                                You can advertise you business here
                            </p>
                            <a href="#" class="btn btn-dark btn-sm m-auto text-light">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        Services
                    </h5>
                    <h1 class="mb-5">Why choose Sweettaste Signature</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>
                                    Our talented chefs craft exquisite dishes using the freshest
                                    ingredients. From farm-to-table salads to decadent desserts,
                                    every bite is a celebration of flavor and creativity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>
                                    we're dedicated to serving exceptional food that delights
                                    your taste buds and nourishes your body. We source the
                                    freshest ingredients from local farms and premium suppliers
                                    to craft dishes that are both delicious and sustainable.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>
                                    Our online ordering system allows you to browse our menu,
                                    customize your order, and choose from various pickup or
                                    delivery options - all from the comfort of your own home.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>
                                    Our 24/7 service has got you covered. Order from our menu
                                    anytime, from anywhere, and enjoy quick delivery or pickup
                                    options. Our customer support team is always available to
                                    assist with any questions or concerns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        Food Menu
                    </h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row mb-3">
                        <label for="search" class="h5 ff-secondary">Search for you favourite dish</label>
                        <div class="position-relative mx-auto col-sm-6">
                            <form action="">
                                <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Search" id="search" />
                                <button type="button"
                                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                                    SignUp
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row my-4">
                        <a href="#bulkform" type="button" data-bs-toggle="modal" class="btn btn-primary py-2 px-4">Click
                            to Get Bulk Food in Litres</a>
                    </div>
                   <!-- BULK MODAL -->
                   <div class="modal fade" id="bulkform" tabindex="-1" aria-labelledby="bulkform" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-0">
                            <div class="modal-header">
                                <h5 class="modal-title"><a href="#" class="btn btn-sm btn-primary">Contact</a></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col ">
                                        <img src="/assets/img/food-img/bulkFood.jpg" class="w-100" width="40px" height="auto" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BULK MODAL End -->
                    <div class="tab-content">
                        <div class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach($menus as $menu)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="{{ $menu->image }}" alt="{{ $menu->name }}" style="height: 150px" />
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2" style="flex-wrap: wrap">
                                                    <span>{{ $menu->name }}</span>
                                                    <span class="text-primary">₦{{ number_format($menu->price, 2) }}</span>
                                                </h5>

                                                <br>
                                                <small class="fst-italic d-flex justify-content-end">
                                                    <a class="btn btn-sm btn-primary order-btn"
                                                       href="{{ route('addToCart', $menu->id) }}">
                                                        Add to Cart
                                                    </a>
                                                </small>

{{--                                                <small class="fst-italic d-flex justify-content-end">--}}
{{--                                                    <button class="btn btn-sm btn-primary order-btn" type="button"--}}
{{--                                                            data-bs-toggle="modal"--}}
{{--                                                            data-bs-target="#orderForm"--}}
{{--                                                            data-name="{{ $menu->name }}"--}}
{{--                                                            data-price="{{ $menu->price }}"--}}
{{--                                                            data-image="{{ $menu->image }}"--}}
{{--                                                            data-content="{{ $menu->content }}"--}}
{{--                                                        data-id="{{ $menu->id }}">--}}
{{--                                                        Order--}}
{{--                                                    </button>--}}
{{--                                                </small>--}}




                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                        @include('home.partials._pagination', ['items' => $menus])
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="orderForm" tabindex="-1" aria-labelledby="orderForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title">Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" id="menuId" name="menu_id">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="d-flex align-items-center">
                                        <img id="modalImage" class="flex-shrink-0 img-fluid rounded" src="" alt="" style="height: 100px" />
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 id="modalName" class="d-flex justify-content-between align-items-center border-bottom pb-2" style="flex-wrap: wrap"></h5>
                                            <p class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                <span id="modalContent" class="h5"></span>
                                                <span id="modalPrice" class="h6"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <h5 class="h5 text-dark">Order Type</h5>
                                </div>
                                <!-- Add your other inputs here -->
                                <div class="col-12">
                                    <label for="portionCount">Portions</label>
                                    <input type="number" class="form-control" id="portionCount" name="portions" value="1" min="1">
                                </div>
                                <div class="col-12">
                                    <h5 class="h5">Total Price: <span id="totalPrice"></span></h5>
                                </div>

                                <div class="col-sm-4">
                                    <div class="text-dark d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="" id="home_delivery" />
                                        <label for="home_delivery" class="mx-2">Home Delivery</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-dark d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="" id="pick_up" />
                                        <label for="pick_up" class="mx-2">Pick up</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-dark d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="" id="dine_in" />
                                        <label for="dine_in" class="mx-2">Dine-in</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" />
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" />
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="number" placeholder="Your Phone Number" />
                                        <label for="number">Your Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="address" placeholder="Your Address" />
                                        <label for="address">Your Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Advert start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="ads p-5 bg-primary my-5 d-flex justify-content-center align-items-center flex-column">
                <p class="text-light text-center">
                    You can advertise you business here
                </p>
                <a href="#" class="btn btn-dark btn-sm m-auto text-light">Contact</a>
            </div>
        </div>
        <!-- Advert End -->

        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            Reservation
                        </h5>
                        <h1 class="text-white mb-4">Place Orders</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <h5 class="h5 text-white">Order Type</h5>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-white d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="" id="home_delivery" />
                                        <label for="home_delivery" class="mx-2">Home Delivery</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-white d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="" id="pick_up" />
                                        <label for="pick_up" class="mx-2">Pick up</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-white d-flex justify-content-start align-items-center">
                                        <input type="checkbox" class="" id="dine_in" />
                                        <label for="dine_in" class="mx-2">Dine-in</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" />
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" />
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="number"
                                            placeholder="Your Phone Number" />
                                        <label for="number">Your Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime"
                                            placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="address"
                                            placeholder="Your Address" />
                                        <label for="address">Your Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="menu">
                                            <option value="1">Menu 1</option>
                                            <option value="2">Menu 2</option>
                                            <option value="3">Menu 3</option>
                                        </select>
                                        <label for="select1">Choose From Menu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        Testimonial
                    </h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                            stet amet eirmod eos labore diam
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                style="width: 50px; height: 50px" />
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                            stet amet eirmod eos labore diam
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                style="width: 50px; height: 50px" />
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                            stet amet eirmod eos labore diam
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                style="width: 50px; height: 50px" />
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                            stet amet eirmod eos labore diam
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                                style="width: 50px; height: 50px" />
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->






        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var orderButtons = document.querySelectorAll('.order-btn');
                var portionInput = document.getElementById('portionCount');
                var totalPriceElement = document.getElementById('totalPrice');
                var pricePerPortion;

                orderButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        var name = button.getAttribute('data-name');
                        var price = button.getAttribute('data-price');
                        var image = button.getAttribute('data-image');
                        var content = button.getAttribute('data-content');
                        var id = button.getAttribute('data-id');

                        document.getElementById('modalName').innerText = name;
                        document.getElementById('modalPrice').innerText = '₦' + parseFloat(price).toFixed(2);
                        document.getElementById('modalImage').src = image;
                        document.getElementById('modalContent').innerText = content;

                        // Set the menu id in a hidden input field or as a data attribute on the form if needed
                        document.getElementById('menuId').value = id; // Assuming you have a hidden input with id "menuId"

                        // Update the price per portion
                        pricePerPortion = parseFloat(price);
                        portionInput.value = 1;
                        totalPriceElement.innerText = '₦' + pricePerPortion.toFixed(2);
                    });
                });

                portionInput.addEventListener('input', function () {
                    var portions = parseInt(portionInput.value);
                    if (!isNaN(portions) && portions > 0) {
                        var totalPrice = pricePerPortion * portions;
                        totalPriceElement.innerText = '₦' + totalPrice.toFixed(2);
                    }
                });
            });
        </script>




@include('home.includes.footer')
