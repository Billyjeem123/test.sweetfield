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
                    <!-- ---- -->
                    <div class="col-md-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                                <h6>Customer's Info</h6>
                                <form action="">
                                    <div class="bg-secondary rounded row p-0">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" disabled class="form-control" id="name"
                                                    placeholder="">
                                                <label for="menuName">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" disabled class="form-control" id="email"
                                                    placeholder="">
                                                <label for="menuName">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" disabled class="form-control" id="phone"
                                                    placeholder="">
                                                <label for="phone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" disabled class="form-control" id="address"
                                                    placeholder="">
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" disabled class="form-control" id="date"
                                                    placeholder="">
                                                <label for="date">Date & Time</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class=" mb-3">
                                                <label for="request">Special Request</label>
                                                <textarea name="" disabled class="form-control" rows="3" id="request">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, incidunt.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <!-- ----- -->
                    <div class="col-md-6 mb-4">
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
