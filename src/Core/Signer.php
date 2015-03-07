<?php
namespace TelepayApi\Core;

interface Signer{
  public function sign(Request $request);
}
