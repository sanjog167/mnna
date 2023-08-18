<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormManager extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $array;

    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * Build the message.
     * 
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.form')
                    ->from($this->array['from'], env('MAIL_FROM_NAME'))
                    ->subject('Confirmation for Application form submission of Miss Nepal North America 2023')
                        ->with([
                        'fname' => $this->array['fname'],
                        'nameone' => $this->array['nameone'],
                        'state' => $this->array['state'],
                         'mnumber' => $this->array['mnumber'],
                        'imageone' => $this->array['imageone'],
                        
                        'nametwo' => $this->array['nametwo'],

                    ]);   
    }
}
