<?php
namespace TelepayApi\Services;

class PayU extends BaseService {

    public function trans($payer_name,$country,$currency,$reference_code,$description,$value,$pay_method,$card_number,$expiration_date,$security_code,$without_cvv2,$tax_base,$tax_value){
        return $this->call(
            'services/v1/payu/payment/transaction',
            array(),
            'POST',
            array(
                'name'    =>  $payer_name,
                'country'       =>  $country,
                'currency'      =>  $currency,
                'reference_code'=>  $reference_code,
                'description'   =>  $description,
                'amount'        =>  $value,
                'pay_method'    =>  $pay_method,
                'card_number'   =>  $card_number,
                'expiration_date'=> $expiration_date,
                'cvv'           =>  $security_code,
                'without_cvv2'  =>  $without_cvv2,
                'tax_base'      =>  $tax_base,
                'tax_value'     =>  $tax_value
            ),
            array()
        );
    }

    public function cash($payer_name,$country,$currency,$reference_code,$description,$value,$pay_method,$payer_dni){
        return $this->call(
            'services/v1/payu/payment/cash',
            array(),
            'POST',
            array(
                'name'          =>  $payer_name,
                'country'       =>  $country,
                'currency'      =>  $currency,
                'reference_code'=>  $reference_code,
                'description'   =>  $description,
                'amount'        =>  $value,
                'pay_method'    =>  $pay_method,
                'payer_dni'     =>  $payer_dni
            ),
            array()
        );
    }

    public function status($report_type,$reference_code){
        return $this->call(
            'services/v1/payu/payment/report',
            array(
                'report_type'       =>  $report_type,
                'reference_code'    =>  $reference_code
            ),
            'GET',
            array(),
            array()
        );
    }
}