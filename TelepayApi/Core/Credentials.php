<?php
namespace TelepayApi\Core;


interface Credentials{
    public function getPublicId();
    public function getSecret();
}