<?php
namespace TelepayApi\Services;

class Pademobile extends BaseService {

    public function request($country,$url,$description,$amount){
        return $this->call(
            'services/v1/pademobile',
            array(),
            'POST',
            array(
                'country'       =>  $country,
                'url'           =>  $url,
                'description'   =>  $description,
                'amount'        =>  $amount
            ),
            array()
        );
    }

}