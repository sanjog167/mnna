<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationManager extends Mailable
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
        return $this->view('emails.notification')
                    ->from($this->array['from'], env('MAIL_FROM_NAME'))
                    ->subject($this->array['subject'])
                        ->with([
                        'fname' => $this->array['fname'],
                        'nameone' => $this->array['nameone'],
                        'state' => $this->array['state'],
                         'mnumber' => $this->array['mnumber'],
                        'imageone' => $this->array['imageone'],
                        
                        'nametwo' => $this->array['nametwo'],
                        'applicantage' => $this->array['applicantage'],
                        'cityname' => $this->array['cityname'],
                        'education' => $this->array['education'],
                        'describe' => $this->array['describe'],
                        'imagetwo' => $this->array['imagetwo'],
                        'gender' => $this->array['gender'],
                        'height' => $this->array['height'],
                        'country' => $this->array['country'],
                        'bestway' => $this->array['bestway'],

                    ]);   
    }
}