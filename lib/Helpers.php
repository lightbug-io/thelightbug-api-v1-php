<?php

namespace Swagger\Client;


use Exception;
use Swagger\Client\Api\UserApi;
use Swagger\Client\Model\Credentials;

class Helpers
{
    static function login($username, $password){
        $token = null;
        $user_api = new UserApi();
        $credentials = new Credentials([
            "username"=> $username,
            "password"=> $password
        ]);
        try {
            $token = $user_api->userLogin($credentials);
        } catch (Exception $e) {
            echo 'Problem logging in ', $e->getMessage(), PHP_EOL;
        }
        return $token;
    }
}