<?php
namespace TelepayApi\Services;

class Bitcoin extends BaseService {

    public function request($satoshis,$confirmations){
        return $this->call(
            'services/v1/btc_pay',
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
            'services/v1/btc_pay/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}