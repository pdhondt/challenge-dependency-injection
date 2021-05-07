<?php


namespace App\Model;


use App\Interfaces\transform;

class Capitalize implements transform
{
    public function transform(string $userinput): string {

        $strToArray = str_split($userinput);

        foreach ($strToArray as $i => $value) {
            if(!$i%2 === 0){
                $strToArray[$i] = strtoupper($value);
            }
        }
        return implode($strToArray);
    }
}