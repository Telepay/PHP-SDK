<?php
namespace TelepayApi;

use TelepayApi\Core\Credentials;
use TelepayApi\Services\Bitcoin;
use TelepayApi\Services\Faircoin;
use TelepayApi\Services\HalcashSP;
use TelepayApi\Services\Pademobile;
use TelepayApi\Services\Paynetref;
use TelepayApi\Services\Paynetservices;
use TelepayApi\Services\PayU;
use TelepayApi\Services\SabadellTpv;
use TelepayApi\Services\Safetypay;
use TelepayApi\Services\Sample;
use TelepayApi\Services\ToditoCash;
use TelepayApi\Services\TransactionStatus;
use TelepayApi\Services\Ukash;
use TelepayApi\Services\UkashRedemption;
use TelepayApi\Services\UkashGenerate;
use TelepayApi\Services\MultivaTpv;
use TelepayApi\User\Wallet;


class TelepayClient{

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url = 'https://api.telepay.net/test'){
        $this->credentials=$credentials;
        $this->url = $url;
    }

    public function getSample(){
        return new Sample($this->credentials, $this->url);
    }

    public function getUkash(){
        return new Ukash($this->credentials, $this->url);
    }

    public function getToditoCash(){
        return new ToditoCash($this->credentials, $this->url);
    }

    public function getSafetypay(){
        return new Safetypay($this->credentials, $this->url);
    }

    public function getPaynetref(){
        return new Paynetref($this->credentials, $this->url);
    }

    public function getPaynetservices(){
        return new Paynetservices($this->credentials, $this->url);
    }

    public function getPayU(){
        return new PayU($this->credentials, $this->url);
    }

    public function getPademobile(){
        return new Pademobile($this->credentials, $this->url);
    }

    public function getUkashRedemption(){
        return new UkashRedemption($this->credentials, $this->url);
    }

    public function getUkashGenerate(){
        return new UkashGenerate($this->credentials, $this->url);
    }

    public function getMultiva(){
        return new MultivaTpv($this->credentials, $this->url);
    }

    public function getSabadell(){
        return new SabadellTpv($this->credentials, $this->url);
    }

    public function getHalcash(){
        return new HalcashSP($this->credentials, $this->url);
    }

    public function getTransactionStatus(){
        return new TransactionStatus($this->credentials, $this->url);
    }

    public function getBitcoin(){
        return new Bitcoin($this->credentials, $this->url);
    }

    public function getFaircoin(){
        return new Faircoin($this->credentials, $this->url);
    }

    public function getWallet(){
        return new Wallet($this->credentials, $this->url);
    }

}