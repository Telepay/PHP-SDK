<?php
namespace TelepayApi\Services;

class Ukash extends BaseService {

    public function request($total,$url_succes,$url_fail,$url_notification,$transaction_id,$consumer_id,$currency){
        return $this->call(
            'services/v1/ukash/redirect/request',
            array(),
            'POST',
            array(
                'amount'             =>  $total,
                'url_succes'        =>  $url_succes,
                'url_fail'          =>  $url_fail,
                'url_notification'  =>  $url_notification,
                'transaction_id'    =>  $transaction_id,
                'consumer_id'       =>  $consumer_id,
                'currency'          =>  $currency
            ),
            array()
        );
    }

    public function status($utid){
        return $this->call(
            'services/v1/ukash/redirect/status',
            array(
                'utid' =>  $utid
            ),
            'GET',
            array(),
            array()
        );
    }
}