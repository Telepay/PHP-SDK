<?php
namespace TelepayApi\Services;

class AbancaTpv extends BaseService {

    public function generate($amount,$description,$url_notification,$url_ok,$url_ko){
        return $this->call(
            'services/v1/abanca',
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
            'services/v1/abanca/'.$id,
            array(),
            'PUT',
            array(),
            array()
        );
    }

}