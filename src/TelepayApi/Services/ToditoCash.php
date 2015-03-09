<?php
namespace TelepayApi\Services;

class ToditoCash extends BaseService {

    public function request($transaction_id,$date,$hour,$card,$nip,$amount,$concept,$currency){
        return $this->call(
            'services/v1/toditocash/payservices/request',
            array(),
            'POST',
            array(
                'transaction_id'    =>  $transaction_id,
                'date'              =>  $date,
                'hour'              =>  $hour,
                'card_number'       =>  $card,
                'nip'               =>  $nip,
                'amount'            =>  $amount,
                'concept'           =>  $concept,
                'currency'          =>  $currency
            ),
            array()
        );
    }

    public function reversa($tc_number,$transaction_id,$date,$hour,$card,$amount){
        return $this->call(
            'services/v1/toditocash/payservices/status',
            array(
                'tc_number_transaction' =>  $tc_number,
                'transaction_id'        =>  $transaction_id,
                'date'                  =>  $date,
                'hour'                  =>  $hour,
                'card_number'           =>  $card,
                'amount'                =>  $amount
            ),
            'GET',
            array(),
            array()
        );
    }
}