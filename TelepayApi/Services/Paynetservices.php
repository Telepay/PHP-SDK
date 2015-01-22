<?php
namespace TelepayApi\Services;

class Paynetservices extends BaseService {

    public function info($date,$hour,$transaction,$sku,$reference,$amount){
        return $this->call(
            'services/v1/paynet/payment/info',
            array(),
            'POST',
            array(
                'date'              =>  $date,
                'hour'              =>  $hour,
                'transaction_id'    =>  $transaction,
                'sku'               =>  $sku,
                'reference'         =>  $reference,
                'amount'            =>  $amount
            ),
            array()
        );
    }

    public function transaction($local_date,$local_hour,$transaction_id,$sku,$fee,$reference,$amount,$dv,$token){
        return $this->call(
            'services/v1/paynet/payment/transaction',
            array(),
            'POST',
            array(
                'date'          =>  $local_date,
                'hour'          =>  $local_hour,
                'transaction_id'=>  $transaction_id,
                'sku'           =>  $sku,
                'fee'           =>  $fee,
                'reference'     =>  $reference,
                'amount'        =>  $amount,
                'dv'            =>  $dv,
                'token'         =>  $token
            ),
            array()
        );
    }

    public function infoV2($date,$hour,$transaction,$sku,$reference,$amount){
        return $this->call(
            'services/v2/paynet/payment/info',
            array(),
            'POST',
            array(
                'date'              =>  $date,
                'hour'              =>  $hour,
                'transaction_id'    =>  $transaction,
                'sku'               =>  $sku,
                'reference'         =>  $reference,
                'amount'            =>  $amount
            ),
            array()
        );
    }

    public function transactionV2($local_date,$local_hour,$transaction_id,$sku,$fee,$reference,$amount,$dv,$token){
        return $this->call(
            'services/v2/paynet/payment/transaction',
            array(),
            'POST',
            array(
                'date'          =>  $local_date,
                'hour'          =>  $local_hour,
                'transaction_id'=>  $transaction_id,
                'sku'           =>  $sku,
                'fee'           =>  $fee,
                'reference'     =>  $reference,
                'amount'        =>  $amount,
                'dv'            =>  $dv,
                'token'         =>  $token
            ),
            array()
        );
    }


}