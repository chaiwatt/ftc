<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FTCMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    public function attachments()
    {
        return [];
    }
    public function build()
    {
        $mailview  = 'mail.index';
        if ($this->mailData['type']  == 'customer'){
            $mailview  = 'mail.customer'; 
        }

        return $this->view($mailview)
                    ->from($this->mailData['sendermail'], $this->mailData['sendername'])
                    ->subject($this->mailData['title'])
                    ->with([
                        'message' => $this->mailData['message']
                    ]);;
    }
}
