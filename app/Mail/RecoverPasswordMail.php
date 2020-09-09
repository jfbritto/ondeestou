<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecoverPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $this->to('jf.britto@hotmail.com');
        // return $this->view('mail.mail');

        return $this->from('naoresponda@ondeestou.com')
                            ->subject("Recuperação de senha!")
                            ->view('mail.mail');
    }
}
