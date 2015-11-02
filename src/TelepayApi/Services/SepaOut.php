<?php
namespace TelepayApi\Services;

class SepaOut extends BaseService {

    public function request($beneficiary, $iban, $bic_swift, $amount, $concept, $url_notification = null){
        return $this->call(
            'services/v1/sepa_out',
            array(),
            'POST',
            array(
                'amount'        =>  $amount,
                'beneficiary'   =>  $beneficiary,
                'iban'          =>  $iban,
                'bic_swift'     =>  $bic_swift,
                'concept'       =>  $concept,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'services/v1/sepa_out/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}