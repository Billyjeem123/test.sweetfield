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



<!-- resources/views/cart/index.blade.php -->

<!-- resources/views/cart/index.blade.php -->



<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-5">What's in your cart</h1>
        </div>

        @if($cartItems->isEmpty())
            <div class="alert alert-danger" role="alert">
                No items found in cart.
            </div>
        @endif


        <table class="table table-responsive table-primary p-3">
            <thead>
            <tr>
                <th scope="col">Order No.</th>
                <th scope="col">Menu Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">


            @foreach ($cartItems as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->menu->name }}</td>
                    <td>₦{{ $item->menu->price }}</td>
                    <td><img src="{{ asset($item->menu->image) }}" height="60px" width="60px" alt="{{ $item->menu->name }}"></td>
                    <td>
                        <form action="{{ route('updateQuantity', $item->id) }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown();">-</button>
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control">
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="this.parentNode.querySelector('input[type=number]').stepUp();">+</button>
                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            </div>
                        </form>

                    </td>
                    <td>₦{{ $item->menu->price * $item->quantity }}</td>
                    <td>
                        <form action="{{ route('removeFromCart', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><strong>X</strong></button>
                        </form>
                    </td>
                </tr>
            @endforeach
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
{{--            <tr>--}}
{{--                <td>₦{{ $cartItems->sum(function ($item) { return $item->menu->price * $item->quantity; }) }}</td>--}}
{{--               <td>--}}
{{--                    <form action="{{ route('checkout') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-sm btn-success"><strong>✓</strong></button>--}}
{{--                    </form>--}}
{{--                </td>    --}}
{{--            </tr>--}}


<tr>
    <td>₦{{ $cartItems->sum(function ($item) { return $item->menu->price * $item->quantity; }) }}</td>
    <td>
        @if(Auth::check())
            <a href="https://wa.me/2348117283226?text={{ urlencode($orderDetails) }}" class="btn btn-sm btn-success">
                Order via WhatsApp
            </a>
        @else
            <a href="{{ route('login') }}" class="btn btn-sm btn-primary">
                Login to Order via WhatsApp
            </a>
        @endif
    </td>


</tr>
            </tbody>
        </table>
    </div>
</div>





<!-- Advert start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="ads p-5 bg-primary my-5 d-flex justify-content-center align-items-center flex-column">
            <p class="text-light text-center">You can advertise you business here</p>
            <a href="#" class="btn btn-dark btn-sm m-auto text-light">Contact</a>
        </div>
    </div>
    <!-- Advert End -->
@include('home.includes.footer')
