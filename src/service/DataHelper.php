<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 26.08.16
 * Time: 16:10
 */

namespace src\service;

class DataHelper
{
    /** @var  DefaultSettings */
    protected $options;

    protected $structure;

    /**
     * CreateData constructor.
     */
    public function __construct()
    {
        $this->options = new DefaultSettings();
        $this->structure = new GenerateStructure();
    }

    public function getData()
    {

    }

    public function addOpenTag()
    {
        return $this;
    }
}