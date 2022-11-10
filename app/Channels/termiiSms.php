<?php

namespace App\Channels;

use App\Services;
use App\Notifications\Messages\SmsMessage;
use Illuminate\Notifications\Notification;

class termiiSms
{
    /**
     * @param $notifiable
     * @param Notification $notification
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function send($notifiable, Notification $notification)
    {
        $otp = $code.' is your Sibro confirmation code.';
        $curl = curl_init();
        $data = array(
            "to" => $number,
            "from" => "SibroNG",
            "sms"=> $otp,
            "type" => "plain",
            "channel" => "generic",
            "api_key" => "TLWQxcM0ttc7yVqQAuZjdBK5vCi4Dj8ZiZRDeuKwWw5fbrW7xb50aBbd0m3X1R");
        
        $post_data = json_encode($data);
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://termii.com/api/sms/send",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $post_data,
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        
    }
}