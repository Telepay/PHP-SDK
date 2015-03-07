<?php
namespace TelepayApi\Services;

class Faircoin extends BaseService {

    public function request($satoshis,$confirmations){
        return $this->call(
            'services/v1/fac_pay',
            array(),
            'POST',
            array(
                'amount'      =>  $satoshis,
                'confirmations' =>  $confirmations
            ),
            array()
        );
    }

    public function check($id){
        return $this->call(
            'services/v1/fac_pay/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}