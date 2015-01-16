<?php
namespace TelepayApi\Services;

class HalcashSP extends BaseService {

    public function send($phone,$prefix,$country,$amount,$reference,$pin,$transaction_id,$alias){
        return $this->call(
            'services/v2/halcash/send',
            array(),
            'POST',
            array(
                'phone_number'      =>  $phone,
                'country'           =>  $country,
                'amount'            =>  $amount,
                'reference'         =>  $reference,
                'pin'               =>  $pin,
                'transaction_id'    =>  $transaction_id,
                'phone_prefix'      =>  $prefix,
                'alias'             =>  $alias
            ),
            array()
        );
    }

    public function cancel($country,$reference,$ticket){
        return $this->call(
            'services/v1/halcash/cancel',
            array(),
            'POST',
            array(
                'country'           =>  $country,
                'reference'         =>  $reference,
                'ticket'            =>  $ticket
            ),
            array()
        );
    }

}