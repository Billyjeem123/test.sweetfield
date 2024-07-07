@include('home.includes.header')

<body>
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
                                                <small class="fst-italic d-flex justify-content-end">
                                                    <a class="btn btn-sm btn-primary order-btn"
                                                       href="{{ route('addToCart', $menu->id) }}">
                                                        Add to Cart
                                                    </a>
                                                </small>


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
        <!-- ORDER MODAL -->
        <div class="modal fade" id="orderForm" tabindex="-1" aria-labelledby="orderForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title">Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/food-img/food-31.jpg"
                                            alt="" style="height: 100px" />
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between align-items-center border-bottom pb-2"
                                                style="flex-wrap: wrap">
                                                <span>Village Rice</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <p
                                                class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                <span class="h5">Rice</span>
                                                <span class="h6">
                                                    <small class="text-primary">/ portion</small><br />
                                                    400</span>
                                            </p>
                                            <p
                                                class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                <span class="h5">Fish</span>
                                                <span class="h6">
                                                    <small class="text-primary">Easy</small><br />
                                                    800
                                                </span>
                                                <span class="h6">
                                                    <small class="text-primary">Small</small><br />
                                                    1000</span>
                                                <span class="h6">
                                                    <small class="text-primary">Medium</small><br />
                                                    1500</span>
                                                <span class="h6">
                                                    <small class="text-primary">Big</small><br />
                                                    1800</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <h5 class="h5 text-dark">Order Type</h5>
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
        <!-- Menu End -->

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
@include('home.includes.footer')
