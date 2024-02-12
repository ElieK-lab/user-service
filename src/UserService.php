<?php

namespace App\Services;

class UserService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = 'http://192.168.1.209:8001/api';
    }
}
