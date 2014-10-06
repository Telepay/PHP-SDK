<?php
namespace TelepayApi\Services;

class Safetypay extends BaseService {

    public function request($request_date_time,$currency,$amount,$url_success,$url_error){
        return $this->call(
            'services/v1/safetypay/payment/request',
            array(),
            'POST',
            array(
                'date_time' =>  $request_date_time,
                'currency'          =>  $currency,
                'amount'            =>  $amount,
                'url_success'       =>  $url_success,
                'url_fail'         =>  $url_error
            ),
            array()
        );
    }
}