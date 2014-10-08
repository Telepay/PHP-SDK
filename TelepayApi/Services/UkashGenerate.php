<?php
namespace TelepayApi\Services;

class UkashGenerate extends BaseService {

    public function request($merchant_id,$currency,$transaction_id,$amount){
        return $this->call(
            'services/v1/ukash/generate',
            array(),
            'POST',
            array(
                'merchant_id'       =>  $merchant_id,
                'currency'          =>  $currency,
                'transaction_id'    =>  $transaction_id,
                'amount'            =>  $amount
            ),
            array()
        );
    }

}