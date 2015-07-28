<?php
namespace TelepayApi\Services;

class EasyPay extends BaseService {

    public function request($amount, $description, $url_notification = null){
        return $this->call(
            'services/v1/easypay',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'description'       =>  $description,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'services/v1/easypay/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}