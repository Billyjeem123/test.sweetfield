@include('admin.includes.header')

<body>
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

        <!-- Menu Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-md-12 col-xl-6">
                    <form action="{{ route('update_menu', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Input Menu Details</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="menuName" name="menuName" placeholder="" value="{{$menu->name}}">
                                <label for="menuName">Enter Menu Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="portionPrice" name="price"  value="{{$menu->price}}" placeholder="Price per Portion">
                                <label for="portionPrice">Price per Portion (₦)</label>
                            </div>

                            <div class="mb-3">
                                <label for="menuImage" class="form-label">Upload Menu Image</label>
                                <input class="form-control bg-dark" type="file" id="menuImage" name="image">
                            </div>
                            <div class="row">
                                <h6 class="mb-2">Menu Breakdown</h6>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="content" name="content" placeholder="" value="{{$menu->content}}">
                                        <label for="content">Content</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>




                </div>
                <div class="col-md-12 col-xl-6">
                    <img src="{{$menu->image}}" class="img-fluid" alt="Description of image" width="300" height="200">
                </div>

            </div>
        </div>
        <!-- Menu End -->


@include('admin.includes.footer')
