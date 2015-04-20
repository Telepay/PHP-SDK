<?php
namespace TelepayApi\Services;

class Safetypay extends BaseService {

    public function request($currency,$amount,$url_success,$url_error){
        return $this->call(
            'services/v1/safetypay',
            array(),
            'POST',
            array(
                'currency'          =>  $currency,
                'amount'            =>  $amount,
                'url_success'       =>  $url_success,
                'url_fail'          =>  $url_error
            ),
            array()
        );
    }
}