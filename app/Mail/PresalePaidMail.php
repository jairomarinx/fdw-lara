<?php

namespace App\Mail;

use App\Models\Presale;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PresalePaidMail extends Mailable
{
    use Queueable, SerializesModels;

    public Presale $presale;

    public function __construct(Presale $presale)
    {
        $this->presale = $presale;
    }

    public function build()
    {
        $subject = 'Payment received: ' . ($this->presale->product_name ?: $this->presale->product);

        return $this->subject($subject)
            ->view('emails.presale_paid')
            ->with([
                'presale' => $this->presale,
            ]);
    }
}
