<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderData;
    public $records;
    public $qr;

    public function __construct($orderData, $records, $qr)
    {
        $this->orderData = $orderData;
        $this->records = $records;
        $this->qr = $qr;
    }

    public function build()
    {
        // $filePath = public_path('uploads/users/QR/' . $this->qr);
        // $newPath = str_replace('public/', '', $filePath);
        // dd($newPath);
        return $this->view('Mails.order', [
            'order' => $this->orderData,
            'records' => $this->records,
        ]);
        // ->attach($newPath, [ // Move the closing parenthesis to the end of this line
        //     'as' => 'QR',
        //     'mime' => 'application/pdf',
        // ]);
    }
} 