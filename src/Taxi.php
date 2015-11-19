<?php

class Taxi
{
    /*
     * @var array
     */
    private $earnings = array();

    public function drive($money = 5.0, $place = array(30.00, 30.00))
    {
        // TODO: calculate travel price using place coordinate
        $money -= 5.00;

        $this->earnings[] = 5.00;

        return $money;
    }

    /**
     * @return array
     */
    public function getEarnings()
    {
        return $this->earnings;
    }

    /**
     * @param array
     */
    public function setEarning($earnings)
    {
        $this->earnings = $earnings;
    }
}