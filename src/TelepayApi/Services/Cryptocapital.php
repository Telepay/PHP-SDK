<?php
namespace TelepayApi\Services;

class Cryptocapital extends BaseService {

    public function request($amount, $currency, $email, $description = null, $url_notification = null){
        return $this->call(
            'services/v1/cryptocapital',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'currency'          =>  $currency,
                'email'             =>  $email,
                'description'       =>  $description,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'services/v1/cryptocapital/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}