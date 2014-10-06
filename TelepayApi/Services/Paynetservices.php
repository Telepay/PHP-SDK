<?php
namespace TelepayApi\Services;

class Paynetservices extends BaseService {

    public function info($date,$hour,$transaction,$sku,$reference){
        return $this->call(
            'services/v1/paynet/payment/info',
            array(),
            'POST',
            array(
                'date'              =>  $date,
                'hour'              =>  $hour,
                'transaction_id'    =>  $transaction,
                'sku'               =>  $sku,
                'reference'         =>  $reference
            ),
            array()
        );
    }

    public function ejecuta($local_date,$local_hour,$transaction_id,$sku,$fee,$reference,$amount,$dv){
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
                'dv'            =>  $dv
            ),
            array()
        );
    }


}