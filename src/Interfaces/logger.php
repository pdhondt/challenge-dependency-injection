<?php

namespace App\Interfaces;

interface logger {

    public function logToFile(string $message): string;

}