<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0 d-flex align-items-center">
            <img src="/assets/img/logo.jpeg" alt="Logo" />
            <h1 class="text-light mx-2 d-flex flex-column">
                Sweettaste <br />
                <small class="section-title ff-secondary" style="font-size: 15px">Signature</small>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link" id="active-home">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link" id="active-about">About</a>
                <a href="{{route('food_menu')}}" class="nav-item nav-link" id="active-menu">Menu</a>
                <a href="{{route('testimonial')}}" class="nav-item nav-link" id="active-testimonial">Testimonial</a>
                <a href="{{route('contact')}}" class="nav-item nav-link" id="active-contact">Contact</a>
            </div>
            <a href="{{route('food_menu')}}" class="btn btn-primary py-2 px-4">Place Orders</a>
            <a href="{{route('cart')}}"  class="btn btn-light p-2"><img src="/assets/img/shopping-cart-icon-29081.png" width="20px" alt=""></a>
            <span   id="cart-count"  class="badge bg-secondary">0</span>
        </div>
    </nav>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('{{ route('cart.count') }}')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').innerText = data.count;
                });
        });
    </script>

