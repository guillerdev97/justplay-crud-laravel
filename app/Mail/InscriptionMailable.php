<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InscriptionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Inscription Confirmation - Proton Team';
    public $username;
    public $eventName;
    public $eventDate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $event)
    {
        $this->eventName = $event->title; 
        $this->eventDate = $event->event_date; 
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->view('mail.mail');
    }
}
