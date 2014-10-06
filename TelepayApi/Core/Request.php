<?php
namespace TelepayApi\Core;


interface Request{
    public function getBaseUrl();
    public function getFunction();
    public function getUrlParams();
    public function getMethod();
    public function getParams();
    public function getHeaders();
}