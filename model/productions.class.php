<?php

class productions
{
    private $version;
    private $type;
    private $power;
    private $num;
    private $cntrNo;

    /**
     * productions constructor.
     * @param $version
     * @param $type
     * @param $power
     * @param $num
     * @param $cntrNo
     */
    public function __construct($version, $type, $power, $num, $cntrNo)
    {
        $this->version = $version;
        $this->type = $type;
        $this->power = $power;
        $this->num = $num;
        $this->cntrNo = $cntrNo;
    }


    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getCntrNo()
    {
        return $this->cntrNo;
    }

    /**
     * @param mixed $cntrNo
     */
    public function setCntrNo($cntrNo)
    {
        $this->cntrNo = $cntrNo;
    }
}