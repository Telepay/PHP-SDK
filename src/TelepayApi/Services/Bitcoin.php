<?php
namespace TelepayApi\Services;

class Bitcoin extends BaseService {

    public function request($satoshis, $confirmations, $expiresIn, $url_notification = null){
        return $this->call(
            'services/v1/btc_pay',
            array(),
            'POST',
            array(
                'amount'        =>  $satoshis,
                'confirmations' =>  $confirmations,
                'expires_in'    =>  $expiresIn,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function send($satoshis, $address, $url_notification = null){
        return $this->call(
            'services/v1/btc_send',
            array(),
            'POST',
            array(
                'amount'    =>  $satoshis,
                'address'   =>  $address,
                'url_notification'  =>  $url_notification
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
