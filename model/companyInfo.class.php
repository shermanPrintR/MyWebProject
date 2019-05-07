<?php

class companyInfo
{
    private static $companyName;

    public function getCompanyName()
    {
        return self::$companyName;
    }

    public function setCompanyName($setCompanyName)
    {
        self::$companyName = $setCompanyName;
    }
}