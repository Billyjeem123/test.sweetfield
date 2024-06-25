@include('admin.includes.header')

    <div class="container">
        <h1>{{ $menu->name }}</h1>
        <div>
            <img src="{{ $menu->image }}" alt="{{ $menu->name }}" style="max-width:100%;">
        </div>
    </div>
@include('admin.includes.footer')
