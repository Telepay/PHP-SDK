<?php
namespace TelepayApi\Services;

class Paynetref extends BaseService {

    public function request($client_reference, $amount, $description, $url_notification = null){
        return $this->call(
            'services/v1/paynet_reference',
            array(),
            'POST',
            array(
                'client_reference'  =>  $client_reference,
                'amount'            =>  $amount,
                'description'       =>  $description,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'services/v1/paynet_reference/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}