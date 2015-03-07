<?php
namespace TelepayApi\Services;

class Sample extends BaseService {

    public function make(){
        return $this->call(
            'services/v1/sample',
            array(),
            'GET',
            array(),
            array()
        );
    }
}