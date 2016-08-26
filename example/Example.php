<?php

namespace example;

class Example
{
    public function generatePassword($password, $salt, $type = 0)
    {
        return $this->passwordCase($password, $salt, $type);
    }

    public function checkPassword($passwordString, $passwordHash, $salt, $type)
    {
        $hash = $this->passwordCase($passwordString, $salt, $type);
        return $hash === $passwordHash;
    }

    public function generateSalt()
    {
        return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    protected function passwordCase($passwors, $salt, $type = 0)
    {
        switch ($type) {
            case 0:
                $hash = $passwors . $salt;
                break;
            case 1:
                $hash = $passwors . $salt;
                break;
            default:
                $hash = $passwors . $salt;
        }

        return $hash;
    }

    protected function adminPassword()
    {

    }
}