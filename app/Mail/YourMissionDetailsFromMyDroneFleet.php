<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YourMissionDetailsFromMyDroneFleet extends Mailable
{
    use Queueable, SerializesModels;

    public $mission;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mission)
    {
        $this->mission = $mission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sample-mail');
    }
}