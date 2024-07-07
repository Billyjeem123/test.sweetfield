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
            @include('admin.includes.navbar')fbg

            <!-- Orders Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">

                    <div class="col-md-12 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Customer's Order(s)</h6>
                         <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Order No.</th>
                                        <th scope="col">Menu Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Rice</td>
                                        <td>₦ 2,000</td>
                                        <td>img.jpeg</td>
                                    </tr>
                                </tbody>
                            </table>
                         </div>
                        </div>
                    </div>
                    <!-- ----- -->
                </div>
             </div>
                <!-- Orders End -->


@include('admin.includes.footer')
