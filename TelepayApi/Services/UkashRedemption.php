<?php
namespace TelepayApi\Services;

class UkashRedemption extends BaseService {

    public function request($merchant_id,$currency,$transaction_id,$voucher_value,$voucher_number,$transaction_amount){
        return $this->call(
            'services/v1/ukash/redemption',
            array(),
            'POST',
            array(
                'merchant_id'           =>  $merchant_id,
                'currency'              =>  $currency,
                'transaction_id'        =>  $transaction_id,
                'voucher_value'         =>  $voucher_value,
                'voucher_number'        =>  $voucher_number,
                'transaction_amount'    =>  $transaction_amount
            ),
            array()
        );
    }

    public function status($transaction_id,$currency,$voucher_value,$voucher_number,$transaction_amount){
        return $this->call(
            'services/v1/ukash/redemption/status',
            array(
                'transaction_id'        =>  $transaction_id,
                'currency'              =>  $currency,
                'voucher_value'         =>  $voucher_value,
                'voucher_number'        =>  $voucher_number,
                'transaction_amount'    =>  $transaction_amount
            ),
            'GET',
            array(),
            array()
        );
    }

}