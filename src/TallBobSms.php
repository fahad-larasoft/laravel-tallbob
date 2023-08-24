<?php

namespace Larasoft\TallBobSms;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

/**
 * Class VidCorpSms
 *
 * VidCorp Sms api handler class.
 * This class handles all of the heavy lifting.
 *
 * @package Larasoft\TallBobSms
 *
 * @author Fahad Ali <fahad@llarasoft.io>
 */
class TallBobSms{

    /**
     * VidCorp Access key.
     *
     * @var string $accessKey
     */
    protected $accessKey;

    /**
     * VidCorp Secret key.
     *
     * @var string $secretKey
     */
    protected $secretKey;

    /**
     * To determine if VidCorp site is in test mode.
     *
     * @var bool $testMode
     */
    protected $testMode = false;

    /**
     * Server address that is going to be used for sending SMS
     *
     * @var string $server
     */
    protected $server;

    /**
     * Message that would be sent to the number.
     *
     * @var string $message
     */
    protected $message;

    /**
     * Number or array of phone number where message has to sent.
     *
     * @var string | array $number
     */
    protected $number;

    /**
     * Sender id to added as request parameter
     *
     * @var string $senderId
     */
    protected $senderId;

    /**
     * Subject to added as request parameter
     *
     * @var string $subject
     */
    protected $subject;

    /**
     * File URL to added as request parameter
     *
     * @var string $file_url
     */
    protected $file_url;

    /**
     * Initializes class instances.
     */
    public function __construct()
    {
        $this->accessKey = config('tallbobsms.access_key');
        $this->secretKey = config('tallbobsms.secret_key');
        $this->testMode = config('tallbobsms.test_mode');
        $this->senderId = null;

        $this->server = $this->testMode ? config('tallbobsms.api_route.provisioning_server') : config('tallbobsms.api_route.production_server');
    }

    /**
     * Sets message to be sent.
     *
     * @param string $message
     *
     * @return $this
     */
    public function message($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Sets phone number at which message is going to be sent.
     *
     * @param string | array $phone
     *
     * @return $this
     */
    public function number($phone)
    {
        $this->number = $phone;

        return $this;
    }

    /**
     * To set sender id for request.
     *
     * @param string  $senderId
     *
     * @return $this
     */
    public function senderId($senderId)
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * To set subject for request.
     *
     * @param string  $subject
     *
     * @return $this
     */
    public function subject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * To set file url for request.
     *
     * @param string  $file_url
     *
     * @return $this
     */
    public function fileUrl($file_url)
    {
        $this->file_url = $file_url;

        return $this;
    }

    /**
     * To send SMS to given numbers.
     */
    public function send()
    {
        if (!is_array($this->number)) {
            $this->number = array($this->number);
        }

        $client = new Client();

        $data = [
            'to' => $this->number,
            'message' => $this->message,
            'shorten_urls' => true
        ];

        if ($this->senderId) {
            $data['from'] = $this->senderId;
        } else {
            $data['from'] = config('tallbobsms.sender_id');
        }

        try {
            $response = $client->request(
                'POST',
                "$this->server/sms/list_send",
                [
                    RequestOptions::AUTH => [
                        $this->accessKey,
                        $this->secretKey
                    ],
                    RequestOptions::FORM_PARAMS => $data
                ]
            );

        } catch (\Exception $exception) {
            throw $exception;
        }

        return json_decode($response->getBody()->getContents());
    }

    public function sendMMS()
    {
        if (!is_array($this->number)) {
            $this->number = array($this->number);
        }

        $client = new Client();

        $data = [
            'to' => $this->number,
            'message' => $this->message,
            'subject' => $this->subject,
            'url' => $this->file_url,
            'shorten_urls' => true
        ];

        if ($this->senderId) {
            $data['from'] = $this->senderId;
        } else {
            $data['from'] = config('tallbobsms.sender_id');
        }

        try {
            $response = $client->request(
                'POST',
                "$this->server/mms/send_list",
                [
                    RequestOptions::AUTH => [
                        $this->accessKey,
                        $this->secretKey
                    ],
                    RequestOptions::FORM_PARAMS => $data
                ]
            );

        } catch (\Exception $exception) {
            throw $exception;
        }

        return json_decode($response->getBody()->getContents());
    }
}
