<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable1 extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "NUEVO CV A REVISAR";
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($contacto)

    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.empleos');
    }
}
