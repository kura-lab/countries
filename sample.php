<?php

require_once("vendor/autoload.php");

use kuralab\countries\Countries;

// initialize
$countries = new Countries();

// convert
$alpha2Code = 'JP';
$alpha3 = $countries->convertFromAlpha2ToAplha3($alpha2Code);
var_dump($alpha3);

$japanese = $countries->convertFromAlpha2ToJapaneseName($alpha2Code);
var_dump($japanese);

$short = $countries->convertFromAlpha2ToShortName($alpha2Code);
var_dump($short);

$numeric = $countries->convertFromAlpha2ToNumeric($alpha2Code);
var_dump($numeric);
