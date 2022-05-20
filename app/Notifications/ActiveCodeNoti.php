<?php

namespace App\Notifications;

use App\Notifications\Channels\KaveChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ActiveCodeNoti extends Notification
{
    use Queueable;
    public $code;
    public $phoneNumber;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($code ,$phoneNumber)
    {
        $this->code = $code;
        $this->phoneNumber = $phoneNumber;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [KaveChannel::class];
    }

    public function toGhasedakSms($notifiable)
    {
        return [
           'text' => "کد احراز هویت {$this->code} /n نمانایی نشیم",
            'number' => $this->phoneNumber
        ];
    }


}
