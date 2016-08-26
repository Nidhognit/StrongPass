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
    protected $checkAlreadyGeneratePassword = true;

    /** @var bool  */
    protected $min = false;

    /**
     * @return string
     */
    public function getFileName(): string
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
    public function getMinNumberOfPasses(): int
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
    public function getMaxNumberOfPasses(): int
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
    public function getPasswordCount(): int
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
    public function isInsideSaltGeneration(): bool
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
    public function getSaltLength(): int
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
    public function isRandomSaltConnect(): bool
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
    public function isResultHashCamouflage(): bool
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
    public function getResultHashAs(): string
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
    public function isCheckAlreadyGeneratePassword(): bool
    {
        return $this->checkAlreadyGeneratePassword;
    }

    /**
     * @param boolean $checkAlreadyGeneratePassword
     */
    public function setCheckAlreadyGeneratePassword(bool $checkAlreadyGeneratePassword)
    {
        $this->checkAlreadyGeneratePassword = $checkAlreadyGeneratePassword;
    }

    /**
     * @return boolean
     */
    public function isMin(): bool
    {
        return $this->min;
    }

    /**
     * @param boolean $min
     */
    public function setMin(bool $min)
    {
        $this->min = $min;
    }

}