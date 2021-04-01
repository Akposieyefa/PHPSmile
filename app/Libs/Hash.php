<?php

namespace App\Libs;

use Exception;

class Hash
{
    private static  $md5;
    private static  $sha1;
    private static  $crypt;
    private static  $password_peppered;
    private static  $hash;
    private static  $salt;
    private static  $pepper;
    private static  $error;

    public static function randString( $length )
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str    = $chars[ rand( 0, $size - 1 ) ];
        }
    }

    public static function makeHash($password)
    {
        try {
            self::$pepper = self::randString(10);
            self::$salt = self::randString(2);
            self::$md5 = md5($password);
            self::$sha1 = sha1(self::$md5);
            self::$crypt = crypt(self::$sha1,self::$salt);
            self::$password_peppered = hash_hmac('sha256', self::$crypt, self::$pepper);
            return self::$hash = password_hash(self::$password_peppered, PASSWORD_BCRYPT);

        } catch (Exception $e) {
            self::$error = "Password Hash Error: " . $e->getMessage();
            return self::$error;
        }
    }

    public static function verifyHash($password,$hash)
    {
        try {
            self::$pepper = self::randString(10);
            self::$salt = self::randString(2);
            self::$md5 = md5($password);
            self::$sha1 = sha1(self::$md5);
            self::$crypt = crypt(self::$sha1,self::$salt);
            self::$password_peppered = hash_hmac('sha256', self::$crypt, self::$pepper);

            if (password_verify(self::$password_peppered, $hash)) {
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            self::$error = "Password Verify Error: " . $e->getMessage();
            return self::$error;
        }
    }
}