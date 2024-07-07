<?php

namespace App\Mail;

use App\Models\SpecialOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SpecialOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public  $specialOrder;

    /**
     * Create a new message instance.
     */
    public function __construct(SpecialOrder $specialOrder)
    {
        $this->specialOrder = $specialOrder;
    }

    public function build()
    {
        return $this->subject('New Special Order Request')
            ->markdown('emails.special-order')
            ->with([
                'order' => $this->specialOrder,
                'url' => url('/admin/special-orders')
            ]);
    }
}
