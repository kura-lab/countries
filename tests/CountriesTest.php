<?php

use kuralab\countries\Countries;

class CountriesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function convertFromAlpha2ToAplha3()
    {
        $alpha2Code = 'JP';
        $countries = new Countries();
        $result = $countries->convertFromAlpha2ToAplha3($alpha2Code);
        $this->assertSame('JPN', $result);
    }

    /**
     * @test
     */
    public function convertFromAlpha2ToJapaneseName()
    {
        $alpha2Code = 'JP';
        $countries = new Countries();
        $result = $countries->convertFromAlpha2ToJapaneseName($alpha2Code);
        $this->assertSame('日本', $result);
    }

    /**
     * @test
     */
    public function convertFromAlpha2ToShortName()
    {
        $alpha2Code = 'JP';
        $countries = new Countries();
        $result = $countries->convertFromAlpha2ToShortName($alpha2Code);
        $this->assertSame('Japan', $result);
    }

    /**
     * @test
     */
    public function convertFromAlpha2ToNumeric()
    {
        $alpha2Code = 'JP';
        $countries = new Countries();
        $result = $countries->convertFromAlpha2ToNumeric($alpha2Code);
        $this->assertSame(81, $result);
    }
}
