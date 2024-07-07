<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{route('admin.index')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Sweettaste Signature</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('/assets/place_holder.jpeg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{auth()->user()->name}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin.index')}}" class="nav-item nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('menu')}}" class="nav-item nav-link {{ request()->routeIs('menu') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Menu</a>
            <a href="{{route('users')}}" class="nav-item nav-link {{ request()->routeIs('users') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Users</a>
            <a href="{{route('orders')}}" class="nav-item nav-link {{ request()->routeIs('orders') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Orders</a>
            <a href="{{route('testimonials')}}" class="nav-item nav-link {{ request()->routeIs('testimonials') ? 'active' : '' }} "><i class="fa fa-table me-2"></i>Testimonial</a>
            <a href="{{route('messages')}}" class="nav-item nav-link {{ request()->routeIs('messages') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Messages</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Adverts</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('advert')}}" class="dropdown-item">Home page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
