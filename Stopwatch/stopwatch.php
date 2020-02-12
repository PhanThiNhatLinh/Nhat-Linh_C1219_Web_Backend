<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    // public function __construct()
    // {
    //     $this->startTime = microtime(true) * 1000;
    // }
    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function startTime()
    {
        $this->startTime= microtime(true)*1000; 
    }
    
    public function endTime()
    {
        $this->endTime = microtime(true)*1000;
    }

    public function getElapsedTime()
    {
       return  $this->endTime - $this->startTime; 
    }
}



?>
