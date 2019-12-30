<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public static function reviveString(string $string, int $k): string 
    {
        $result = [];
        $stringLen = strlen($string);

        for ($i = 0; $i < $stringLen; $i++) { 
            // Choose length of substr
            for ($j = 1; $j <= $stringLen - $i; $j++) { 
                $s = substr($string, $i, $j);
                // check if unique
                if (!(in_array($s, $result))) {
                    $result[] = $s;
                }
            }
            sort($result);
        }
            $imploded = implode($result);
            return $imploded[$k - 1] ?? '';
    }
}