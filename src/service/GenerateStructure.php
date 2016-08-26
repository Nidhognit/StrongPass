<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 26.08.16
 * Time: 16:02
 */

namespace src\service;

class GenerateStructure
{
    public function generateOpenTag()
    {
        return '<?php';
    }

    public function generateClass()
    {

    }

    public function generateFunction_generatePassword()
    {

    }

    public function generateFunction_checkPassword()
    {

    }

    public function generateFunction_generateSalt()
    {
        return 'public function generateSalt(){return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);}';
    }

    public function generateFunction_passwardCase()
    {

    }
}