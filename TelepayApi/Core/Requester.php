<?php
namespace TelepayApi\Core;

interface Requester{
    public function send(Request $request);
}