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
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Your cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Cart Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Cart</h5> -->
                    <h1 class="mb-5">What's in your cart</h1>
                </div>
                <table class="table table-responsive table-primary p-3">
                    <thead>
                      <tr>
                        <th scope="col">Order No.</th>
                        <th scope="col">Menu Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row">1</th>
                        <td>Rice</td>
                        <td>₦2,000</td>
                        <td><img src="/assets/img/food-img/food-1.jpg" height="60px" width="60px" alt=""></td>
                        <td><button class="btn btn-sm btn-primary"><strong>X</strong></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Rice</td>
                        <td>₦2,000</td>
                        <td><img src="/assets/img/food-img/food-2.jpg" height="60px" width="60px" alt=""></td>
                        <td><button class="btn btn-sm btn-primary"><strong>X</strong></button></td>
                      </tr>
                    </tbody>
                  </table>
             <table class="table table-responsive table-primary p-3">
                 <thead>
                     <tr>
                        <th scope="col">Total Order</th>
                        <th scope="col">Order</th>
                      </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>₦4,000</td>
                         <td><button class="btn btn-sm btn-success"><strong>✓</strong></button></td>
                     </tr>
                 </tbody>
             </table>
            </div>
        </div>
        <!-- Cart End -->
        

    <!-- Advert start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="ads p-5 bg-primary my-5 d-flex justify-content-center align-items-center flex-column">
            <p class="text-light text-center">You can advertise you business here</p>
            <a href="#" class="btn btn-dark btn-sm m-auto text-light">Contact</a>
        </div>
    </div>
    <!-- Advert End -->
@include('home.includes.footer')
