<?php
namespace TelepayApi\Services;


use TelepayApi\Core\ApiRequest;
use TelepayApi\Core\Credentials;
use TelepayApi\Core\JsonRequester;
use TelepayApi\Core\SignerV1;

class BaseService {

    private $credentials;
    private $env;

    static $TELEPAY_MODE_URLS = array(
        'test' => 'http://dev-api.telepay.net/app_dev.php/test',
        'real' => 'http://dev-api.telepay.net/app_dev.php'
    );

    public function __construct(Credentials $credentials, $env){
        $this->credentials = $credentials;
        $this->env = $env;
    }

    protected function call($function,$urlParams,$method,$params,$headers){
        $plainRequest = new ApiRequest(
            BaseService::$TELEPAY_MODE_URLS[$this->env],
            $function,$urlParams,$method,$params,$headers
        );
        $signer = new SignerV1($this->credentials);
        $signedRequest = $signer->sign($plainRequest);
        $requester = new JsonRequester();
        return $requester->send($signedRequest);
    }

}
