<?php
namespace TelepayApi\Services;


use TelepayApi\Core\ApiRequest;
use TelepayApi\Core\Credentials;
use TelepayApi\Core\JsonRequester;
use TelepayApi\Core\SignerV1;

class BaseService {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url){
        $this->credentials = $credentials;
        $this->url = $url;
    }

    protected function call($function,$urlParams,$method,$params,$headers){
        $plainRequest = new ApiRequest(
            $this->url,
            $function,
            $urlParams,
            $method,
            $params,
            $headers
        );
        $signer = new SignerV1($this->credentials);
        $signedRequest = $signer->sign($plainRequest);
        $requester = new JsonRequester();
        return $requester->send($signedRequest);
    }

}
