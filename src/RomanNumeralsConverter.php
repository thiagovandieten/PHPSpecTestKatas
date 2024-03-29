<?php

class RomanNumeralsConverter
{
    /**
     * @var array
     */
    protected static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    /**
     * @param $number
     * @return string
     */
    public function convert($number)
    {
        $solution = '';

        foreach (static::$lookup as $limit => $glyph)
        {
            while($number >= $limit) {
                $solution .= $glyph;
                $number -= $limit;
            }
        }
//        while($number >= 50) {
//            $solution .= 'L';
//            $number -= 50;
//        }
//
//        while($number >= 10) {
//            $solution .= 'X';
//            $number -= 10;
//        }
//
//        while($number >= 9)
//        {
//            $solution .= 'IX';
//            $number -= 9;
//        }
//
//        while($number >= 5) {
//            $solution .= 'V';
//            $number -= 5;
//        }
//
//        while($number >= 4)
//        {
//            $solution .= 'IV';
//            $number -= 4;
//        }
//
//        while($number >= 1)
//        {
//            $solution .= 'I';
//            $number -= 1;
//        }
//
//        $solution .= str_repeat('I', $number);

        return $solution;
    }
}
