<?php

namespace Tarsoft\Toyyibpay;

class Toyyibpay
{
    private $dev_toyyibpay_uri = 'https://dev.toyyibpay.com';
    private $prod_toyyibpay_uri = 'https://toyyibpay.com';
    private $toyyibpay_uri;

    private $client;
    private $user_secret_key;
    private $redirect_uri;

    public function __construct($SANDBOX, $CLIENT_SECRET, $REDIRECT_URI, $GUZZLE_CLIENT)
    {
        $this->client = $GUZZLE_CLIENT; # Guzzle Client
        $this->user_secret_key = $CLIENT_SECRET; # Toyyibpay User Secret Key
        $this->redirect_uri = $REDIRECT_URI; # Toyyibpay Redirect URI
        $this->toyyibpay_uri = ($SANDBOX) ? $this->dev_toyyibpay_uri : $this->prod_toyyibpay_uri;
    }

    #
    # Toyyibpay POST
    #
    public function post($url, $config)
    {
        $res = $this->client->post($url, $config);
        $result = json_decode($res->getBody()->getContents());
        return $result;
    }

    #
    # Toyyibpay GET
    #
    public function get($url, $config)
    {
        $res = $this->client->get($url, $config);
        $result = json_decode($res->getBody()->getContents());
        return $result;
    }
}
