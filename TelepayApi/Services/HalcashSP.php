<?php
namespace TelepayApi\Services;

class HalcashSP extends BaseService {

    public function send($phone,$prefix,$country,$amount,$reference,$pin,$transaction_id){
        return $this->call(
            'services/v1/halcash/send',
            array(),
            'POST',
            array(
                'phone_number'      =>  $phone,
                'country'           =>  $country,
                'amount'            =>  $amount,
                'reference'         =>  $reference,
                'pin'               =>  $pin,
                'transaction_id'    =>  $transaction_id,
                'phone_prefix'      =>  $prefix
            ),
            array()
        );
    }

}