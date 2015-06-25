<?php
namespace TelepayApi\Services;

class PosService extends BaseService {

    public function generate($amount, $description, $currency, $url_notification, $url_ok, $url_ko, $id){
        return $this->call(
            'pos/v1/transaction/'.$id,
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'description'       =>  $description,
                'currency'          =>  $currency,
                'url_notification'  =>  $url_notification,
                'url_ok'            =>  $url_ok,
                'url_ko'            =>  $url_ko
            ),
            array()
        );
    }

}