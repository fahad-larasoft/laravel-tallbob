<?php


namespace Larasoft\TallBobSms\Channels;


use Illuminate\Notifications\Notification;

/**
 * Class SmsChannel
 *
 * Custom channel for sms dispatch
 *
 * @package Larasoft\TallBobSms\Channels
 *
 * @author Fahad Ali <fahad@llarasoft.io>
 */
class SmsChannel
{
    /**
     * @param mixed notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);
    }
}
