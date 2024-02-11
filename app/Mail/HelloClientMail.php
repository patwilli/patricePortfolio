<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloClientMail extends Mailable
{
    use Queueable, SerializesModels;
    public $nom_prenom;
    public $description;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom_prenom, $description)
    {
        $this->nom_prenom = $nom_prenom;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail-contact');
    }
}
