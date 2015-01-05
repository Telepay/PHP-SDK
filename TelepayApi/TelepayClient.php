<?php
namespace TelepayApi;

use TelepayApi\Core\Credentials;
use TelepayApi\Services\HalcashSP;
use TelepayApi\Services\Pademobile;
use TelepayApi\Services\Paynetref;
use TelepayApi\Services\Paynetservices;
use TelepayApi\Services\PayU;
use TelepayApi\Services\Safetypay;
use TelepayApi\Services\Sample;
use TelepayApi\Services\ToditoCash;
use TelepayApi\Services\Ukash;
use TelepayApi\Services\UkashRedemption;
use TelepayApi\Services\UkashGenerate;
use TelepayApi\Services\MultivaTpv;


class TelepayClient{

    private $credentials;
    private $env;

    public function __construct(Credentials $credentials, $env = 'test'){
        $this->credentials=$credentials;
        $this->env = $env;
    }

    public function getSample(){
        return new Sample($this->credentials, $this->env);
    }

    public function getUkash(){
        return new Ukash($this->credentials, $this->env);
    }

    public function getToditoCash(){
        return new ToditoCash($this->credentials, $this->env);
    }

    public function getSafetypay(){
        return new Safetypay($this->credentials, $this->env);
    }

    public function getPaynetref(){
        return new Paynetref($this->credentials, $this->env);
    }

    public function getPaynetservices(){
        return new Paynetservices($this->credentials, $this->env);
    }

    public function getPayU(){
        return new PayU($this->credentials, $this->env);
    }

    public function getPademobile(){
        return new Pademobile($this->credentials, $this->env);
    }

    public function getUkashRedemption(){
        return new UkashRedemption($this->credentials, $this->env);
    }

    public function getUkashGenerate(){
        return new UkashGenerate($this->credentials, $this->env);
    }

    public function getMultiva(){
        return new MultivaTpv($this->credentials, $this->env);
    }

    public function getHalcash(){
        return new HalcashSP($this->credentials, $this->env);
    }

}