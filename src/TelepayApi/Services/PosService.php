<?php
namespace TelepayApi\Services;

class PosService extends BaseService {

    public function generate($amount, $description, $currency, $url_notification, $url_ok, $url_ko, $order_id, $id){
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
                'url_ko'            =>  $url_ko,
                'order_id'          =>  $order_id
            ),
            array()
        );
    }

    public function generateV2($amount, $description, $currency_in, $currency_out, $url_notification, $url_ok, $url_ko, $order_id, $id){
        return $this->call(
            'pos/v2/transaction/'.$id,
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'concept'           =>  $description,
                'currency_in'       =>  $currency_in,
                'currency_out'      =>  $currency_out,
                'url_notification'  =>  $url_notification,
                'url_ok'            =>  $url_ok,
                'url_ko'            =>  $url_ko,
                'order_id'          =>  $order_id
            ),
            array()
        );
    }

}