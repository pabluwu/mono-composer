<?php
 
namespace mono;

class Monocontact{

    private $api_key;
    private $curl;
    private $api_url = 'https://api.monocontact.net/';
    public function saludo($saludo = "Hello World"){
        return $saludo;
    }

    public function __construct($apikey=null, $secret=null, $apiurl=null) {
		if(!$apikey || !$secret) throw new \Exception('You must provide a Monocontact API key');
		$this->apikey = $apikey;
		$this->secret = $secret;
		$this->curl = curl_init();

		if ($apiurl!=null) {
			$this->apiurl = $apiurl;
		}

		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
		// curl_setopt($this->curl, CURLOPT_FAILONERROR, true);
/*		curl_setopt($this->curl, CURLOPT_USERAGENT, 'Mandrill-PHP/1.0.54');
		curl_setopt($this->curl, CURLOPT_POST, true);
		curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($this->curl, CURLOPT_HEADER, false);
		curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($this->curl, CURLOPT_TIMEOUT, 600);*/

		$this->listing = new Listing($this);
		$this->contact = new Contact($this);
		$this->subscriber = new Subscriber($this);

		$this->apiurl = rtrim($this->apiurl, '/') . '/';
	}
}