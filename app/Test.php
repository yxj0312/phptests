<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public static function reviveString(string $string, int $n): string 
    {
        $length = strlen($string);
        for ($i=0; $i < $length; $i++) { 
            return '123';
        }
    }
}
