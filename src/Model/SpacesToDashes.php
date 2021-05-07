<?php


namespace App\Model;


use App\Interfaces\transform;

class SpacesToDashes implements transform
{
    public function transform(string $userinput): string
    {
        return str_replace(" ", "-", $userinput);
    }
}