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

            <!-- Orders Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">

                    <div class="col-md-12 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Customer Special Request(s)</h6>
                         <div class="table-responsive">
                             <table class="table table-dark">
                                 <thead>
                                 <tr>
                                     <th scope="col">Order No.</th>
                                     <th scope="col">Order Type</th>
                                     <th scope="col">Name</th>
                                     <th scope="col">Email</th>
                                     <th scope="col">Phone Number</th>
                                     <th scope="col">Date & Time</th>
                                     <th scope="col">Address</th>
{{--                                     <th scope="col">Menu</th>--}}
                                     <th scope="col">Special Request</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($specialOrders as $order)
                                     <tr>
                                         <td>{{ $order->id }}</td>
                                         <td>{{ $order->order_type }}</td>
                                         <td>{{ $order->name }}</td>
                                         <td>{{ $order->email }}</td>
                                         <td>{{ $order->phone_number }}</td>
                                         <td>{{ $order->date_time }}</td>
                                         <td>{{ $order->address }}</td>
{{--                                         <td>{{ $order->menu }}</td>--}}
                                         <td>{{ $order->special_request }}</td>
                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>

                         </div>
                        </div>
                    </div>
                    <!-- ----- -->
                    @include('admin.partials._pagination', ['items' => $specialOrders])
                </div>
             </div>
                <!-- Orders End -->


@include('admin.includes.footer')
