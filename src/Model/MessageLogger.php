<?php


namespace App\Model;


use App\Interfaces\logger;

class MessageLogger implements logger
{
    public function logToFile(string $message): string
    {
        file_put_contents('log.info', $message, FILE_APPEND);
    }
}