<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public static function reviveString(string $string, int $k): string 
    {
        $result = [];
        $result1 = [];
        $stringLen = strlen($string);
        // $s = substr($string, 2, 3);
        // dd($s);
        // dump($stringLen);
        // Pick start letter
        for ($i = 0; $i < $stringLen; $i++) { 
            // $tempStr = '';
            // Choose length of substr
            for ($j = 1; $j <= $stringLen - $i; $j++) { 
                $s = substr($string, $i, $j);
                if (!(in_array($s, $result1))) {
                    $result1[] = $s;
                }
            }
            sort($result1);
            // dump($result1);
        }
            // dump('bad');
            $imploded = implode($result1);
            return $imploded[$k - 1] ?? '';

            // dump($imploded);

        // die();
    // dump('pause');
    // from very beginning of the string
    // for ($startLetterIndex = 0; $startLetterIndex < $stringLen; $startLetterIndex++) {
    //     $resultStr = '';
    //     //letter by letter...
    //     for ($i = $startLetterIndex; $i <= $stringLen; $i++) {
    //         //concat letters in substring
    //         for ($j = $startLetterIndex; $j < $i; $j++) {
    //             $resultStr .= $string[$j];
    //             // dump($string[$j]);
    //         }
    //         // dump($resultStr);
    //         //if substring is unique
    //         if ($resultStr !== '' && !array_search($resultStr, $result)) {
    //             $result[] = $resultStr;
    //         }
    //         $resultStr = '';
    //     }
    //     // dump($result);
    // }
    //     dump('real');
    // //sorting... a => z
    // sort($result);
    // //from array to string again
    // $imploded = implode($result);
    // dump($imploded);
    // //feeling cool or empty
    // return $imploded[$k - 1] ?? '';
}
}