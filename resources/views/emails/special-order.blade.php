@component('mail::message')
    # New Special Order Request

    A new special order has been placed.

    **Order Details:**
    - Name: {{ $order->name }}
    - Email: {{ $order->email }}
    - Phone Number: {{ $order->phone_number }}
    - Order Type: ',{{ $order->order_type }}
    - Date & Time: {{ $order->date_time }}
    - Address: {{ $order->address }}
    - Menu: {{ $order->menu }}
    - Special Request: {{ $order->special_request }}


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
