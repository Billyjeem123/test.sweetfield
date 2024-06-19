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

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="img/food-img/food-14.jpg" />
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="img/food-img/food-38.jpg" style="margin-top: 25%" width="60%" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="img/food-img/food-31.jpg" width="60%" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="img/food-img/food-12.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            About Us
                        </h5>
                        <h1 class="mb-4">About Sweettaste Signature</h1>
                        <p class="mb-4">
                            Sweettaste Signature is the culmination of a lifelong passion for
                            culinary excellence, inspired by the rich flavors and traditions
                            of cuisines all around the globe.
                        </p>
                        <p class="mb-4">
                            Our founder, grew up in a
                            family of food enthusiasts, where mealtimes were always a
                            celebration of love, laughter, and delicious food.
                        </p>
                        <h1 class="mb-4">Our Values</h1>
                        <p class="mb-4">
                            <span class="text-primary h5 ff-secondary">Quality:</span> We're obsessed with using only
                            the best ingredients,
                            sourced from local farmers and producers whenever possible.
                        </p>
                        <p class="mb-4">
                            <span class="text-primary h5 ff-secondary">Community:</span>We believe in building strong
                            relationships
                            with our neighbors, supporting local businesses, and giving back to our community.
                        </p>
                        <p class="mb-4">
                            <span class="text-primary h5 ff-secondary">Joy:</span>We're all about spreading love and
                            happiness through food, drink, and good company!
                        </p>
                        <p class="my-4 p-3 text-light bg-primary">Whether you're a foodie, a local, or just visiting
                            Portland, we invite you to experience
                            the Bistro Bliss difference. Come taste the love we put into every dish, and let us become
                            your new favorite gathering spot!</p>
                        <h1 class="ff-secondary text-primary text-center">Join Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Advert start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="ads p-5 bg-primary my-5 d-flex justify-content-center align-items-center flex-column">
                <p class="text-light text-center">You can advertise you business here</p>
                <a href="#" class="btn btn-dark btn-sm m-auto text-light">Contact</a>
            </div>
        </div>
        <!-- Advert End -->
@include('home.includes.footer')
