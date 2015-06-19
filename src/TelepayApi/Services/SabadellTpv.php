<?php
namespace TelepayApi\Services;

class SabadellTpv extends BaseService {

    public function generate($amount, $transaction_id, $description, $url_notification, $url_ok, $url_ko){
        return $this->call(
            'services/v1/sabadell/generate',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'transaction_id'    =>  $transaction_id,
                'description'       =>  $description,
                'url_notification'  =>  $url_notification,
                'url_ok'            =>  $url_ok,
                'url_ko'            =>  $url_ko
            ),
            array()
        );
    }

    public function generateV2($amount, $description, $url_notification, $url_ok, $url_ko){
        return $this->call(
            'services/v2/sabadell',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'description'       =>  $description,
                'url_notification'  =>  $url_notification,
                'url_ok'            =>  $url_ok,
                'url_ko'            =>  $url_ko
            ),
            array()
        );
    }

    public function regenerate($id){
        return $this->call(
            'services/v1/sabadell/'.$id,
            array(),
            'PUT',
            array(),
            array()
        );
    }

}