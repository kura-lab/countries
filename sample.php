<?php

require_once("vendor/autoload.php");

use kuralab\countries\Countries;

// initialize
$countries = new Countries();

// convert
$alpha2Code = 'JP';
$result = $countries->convertFromAlpha2ToAplha3($alpha2Code);
var_dump($result);
