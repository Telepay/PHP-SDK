<?php
namespace TelepayApi\Services;

class Paynetref extends BaseService {

    public function request($client_reference,$amount,$description){
        return $this->call(
            'services/v1/paynet/reference/generate',
            array(),
            'POST',
            array(
                'client_reference'  =>  $client_reference,
                'amount'            =>  $amount,
                'description'       =>  $description
            ),
            array()
        );
    }

    public function status($client_reference){
        return $this->call(
            'services/v1/paynet/reference/status',
            array(
                'client_reference' =>  $client_reference
            ),
            'GET',
            array(),
            array()
        );
    }
}