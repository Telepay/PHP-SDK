<?php
namespace TelepayApi\Services;

class MultivaTpv extends BaseService {

    public function generate($amount,$transaction_id,$url_notification){
        return $this->call(
            'services/v1/multiva',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

}