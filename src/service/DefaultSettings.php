<?php
namespace src\service;

class DefaultSettings
{
    /** @var  string */
    protected $fileName = 'password.php';

    /** @var  int */
    protected $minNumberOfPasses = 3000;

    /** @var  int */
    protected $maxNumberOfPasses = 10000;

    /** @var int */
    protected $passwordCount = 100;

    /** @var bool */
    protected $insideSaltGeneration = true;

    /** @var int */
    protected $saltLength = 20;

    /** @var bool */
    protected $randomSaltConnect = true;

    /** @var bool */
    protected $resultHashCamouflage = true;

    /** @var string */
    protected $resultHashAs = 'base64';

    /** @var bool */
    protected $checkAlreadyGeneratetPassword = true;

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return int
     */
    public function getMinNumberOfPasses()
    {
        return $this->minNumberOfPasses;
    }

    /**
     * @param int $minNumberOfPasses
     */
    public function setMinNumberOfPasses(int $minNumberOfPasses)
    {
        $this->minNumberOfPasses = $minNumberOfPasses;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfPasses()
    {
        return $this->maxNumberOfPasses;
    }

    /**
     * @param int $maxNumberOfPasses
     */
    public function setMaxNumberOfPasses(int $maxNumberOfPasses)
    {
        $this->maxNumberOfPasses = $maxNumberOfPasses;
    }

    /**
     * @return int
     */
    public function getPasswordCount()
    {
        return $this->passwordCount;
    }

    /**
     * @param int $passwordCount
     */
    public function setPasswordCount(int $passwordCount)
    {
        $this->passwordCount = $passwordCount;
    }

    /**
     * @return boolean
     */
    public function isInsideSaltGeneration()
    {
        return $this->insideSaltGeneration;
    }

    /**
     * @param boolean $insideSaltGeneration
     */
    public function setInsideSaltGeneration(bool $insideSaltGeneration)
    {
        $this->insideSaltGeneration = $insideSaltGeneration;
    }

    /**
     * @return int
     */
    public function getSaltLength()
    {
        return $this->saltLength;
    }

    /**
     * @param int $saltLength
     */
    public function setSaltLength(int $saltLength)
    {
        $this->saltLength = $saltLength;
    }

    /**
     * @return boolean
     */
    public function isRandomSaltConnect()
    {
        return $this->randomSaltConnect;
    }

    /**
     * @param boolean $randomSaltConnect
     */
    public function setRandomSaltConnect(bool $randomSaltConnect)
    {
        $this->randomSaltConnect = $randomSaltConnect;
    }

    /**
     * @return boolean
     */
    public function isResultHashCamouflage()
    {
        return $this->resultHashCamouflage;
    }

    /**
     * @param boolean $resultHashCamouflage
     */
    public function setResultHashCamouflage(bool $resultHashCamouflage)
    {
        $this->resultHashCamouflage = $resultHashCamouflage;
    }

    /**
     * @return string
     */
    public function getResultHashAs()
    {
        return $this->resultHashAs;
    }

    /**
     * @param string $resultHashAs
     */
    public function setResultHashAs(string $resultHashAs)
    {
        $this->resultHashAs = $resultHashAs;
    }

    /**
     * @return boolean
     */
    public function isCheckAlreadyGeneratetPassword()
    {
        return $this->checkAlreadyGeneratetPassword;
    }

    /**
     * @param boolean $checkAlreadyGeneratetPassword
     */
    public function setCheckAlreadyGeneratetPassword( bool $checkAlreadyGeneratetPassword)
    {
        $this->checkAlreadyGeneratetPassword = $checkAlreadyGeneratetPassword;
    }


}