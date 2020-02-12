<?php
class MovablePoint extends Point {
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y, $xspeed, $yspeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xspeed;
        $this->ySpeed = $yspeed;
    }

    public function setXSpeed($xspeed1)
    {
        $this->xSpeed = $xspeed1;
    }

    public function setYSpeed($yspeed1)
    {
        $this->ySpeed = $yspeed1;
    }

    public function setXYSpeed($xspeed1, $yspeed1)
    {
        $this->xSpeed = $xspeed1;
        $this->ySpeed = $yspeed1;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function getXYSpeed()
    {
        $this->ySpeed;
        $this->xSpeed;
        return $this;
    }

    public function toString()
    {
        return $this->x . "," . $this->y . "," . $this->xSpeed . "," . $this->ySpeed;
    }

    public function Move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }

    public function MoveRight($distance)
    {
        $this->x += $distance;
        return $this;
    }

    public function MoveBottom($distance)
    {
        $this->y += $distance;
        return $this;
    }
}
?>


