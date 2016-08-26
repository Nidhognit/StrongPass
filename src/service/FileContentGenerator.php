<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 25.08.16
 * Time: 17:00
 */

namespace src\service;

class FileContentGenerator
{
    /** @var  DefaultSettings */
    protected $options;

    /**
     * CreateData constructor.
     */
    public function __construct()
    {
        $this->options = new DefaultSettings();
    }

    public function getDataForFile()
    {
        return 'test';
    }

    public function prepereData()
    {

    }
}