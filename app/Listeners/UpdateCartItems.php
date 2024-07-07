<?php

namespace App\Listeners;

use App\Events\UserAuthenticated;
use App\Models\Cart;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class UpdateCartItems
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserAuthenticated $event)
    {
        $session_id = session()->getId();
        $user_id = $event->user->id;

        Log::info('substituted' . $user_id);

        Cart::where('session_id', $session_id)
            ->update(['user_id' => $user_id, 'session_id' => null]);
    }
}
