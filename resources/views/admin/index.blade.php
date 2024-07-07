@include('admin.includes.header')
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


      @include('admin.includes.sidebar')

        <!-- Content Start -->
        <div class="content">
            @include('admin.includes.navbar')


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Users</p>
                                <h6 class="mb-0">{{$usersCount}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Menu</p>
                                <h6 class="mb-0">{{$menusCount}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Special Orders</p>
                                <h6 class="mb-0">{{$orders}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Advert</p>
                                <h6 class="mb-0">0</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->




            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Customer Special Orders</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">


                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Order No.</th>
                                    <th scope="col">Order Type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date & Time</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Special Request</th>
                                </tr>
                            </thead>

                            <tbody>
                            @if($specialOrders->isEmpty($specialOrders))
                                <p>No Order found</p>
                            @endif
                            @foreach($specialOrders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->order_type }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone_number }}</td>
                                    <td>{{ $order->date_time }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->special_request }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- -->
                    @include('admin.partials._pagination', ['items' => $specialOrders])
                </div>
            </div>
            <!-- Recent Sales End -->





@include('admin.includes.footer')
