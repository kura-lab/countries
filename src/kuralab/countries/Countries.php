<?php
namespace kuralab\countries;

use Symfony\Component\Yaml\Yaml;

/**
 * Country Codes Converter Class
 */
class Countries
{
    const CODES_PATH = './src/countries/codes.yml';

    const ALPHA_3_CODE  = 0;
    const JAPANESE_NAME = 2;
    const SHORT_NAME    = 3;
    const NUMERIC_CODE  = 4;

    private $parser;

    public function __construct()
    {
        $this->parser = Yaml::parse(self::CODES_PATH);
    }

    public function convertFromAlpha2ToAplha3($alpha2Code)
    {
        if (!array_key_exists($alpha2Code, $this->parser)) {
            return '';
        }

        return $this->parser[$alpha2Code][self::ALPHA_3_CODE];
    }

    public function convertFromAlpha2ToJapaneseName($alpha2Code)
    {
        if (!array_key_exists($alpha2Code, $this->parser)) {
            return '';
        }

        return $this->parser[$alpha2Code][self::JAPANESE_NAME];
    }

    public function convertFromAlpha2ToShortName($alpha2Code)
    {
        if (!array_key_exists($alpha2Code, $this->parser)) {
            return '';
        }

        return $this->parser[$alpha2Code][self::SHORT_NAME];
    }

    public function convertFromAlpha2ToNumeric($alpha2Code)
    {
        if (!array_key_exists($alpha2Code, $this->parser)) {
            return '';
        }

        return $this->parser[$alpha2Code][self::NUMERIC_CODE];
    }
}
