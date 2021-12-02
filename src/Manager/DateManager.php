<?php

namespace App\Manager;

use DateTime;

class DateManager
{

    public DateTime  $dateTime;

    public function __construct()
    {
        $this->dateTime = new DateTime();
    }
    public function parseDateElementToInt($date): DateTime
    {

        $partYears = explode("-", $date);
        $years = intval($partYears[0]);
        $month = intval($partYears[1]);
        $day = intval($partYears[2]);

        return  $this->dateTime->setDate($years, $month, $day);
         
    }
}
