<?php

class Laundry
{
    /**
     * @var Clothes
     */
    private $clothes;

    /*
     * @var Taxi
     */
    private $taxi;

    /*
     * @var float
     */
    private $balance;

    /*
     * @var array
     */
    private $place = array();

    /*
     * @var array
     */
    private $home = array();

    public function __construct($place = array(54.90, 23,91), $home = array(30.00, 30.00))
    {
        $this->clothes = new Clothes();
        $this->taxi = new Taxi();
        $this->place = $place;
        $this->home = $home;
    }

    public function cleanClothes()
    {
        // drive to laundry


        $this->balance = $this->taxi->drive($this->balance, $this->place);

        // clean all dirty clothes
        $cleanClothes = $this->clothes->getCleanClothes() + $this->clothes->getDirtyClothes();
        $this->clothes->setCleanClothes($cleanClothes);

        // go back to home
        $this->balance = $this->taxi->drive($this->balance, $this->home);
    }

    public function countClothes()
    {
        return $this->clothes->getCleanClothes() + $this->clothes->getDirtyClothes();
    }

    public function getInformation($greeting = "Hello")
    {
        $output = $greeting;
        $output .= ", there are ";
        $output .= $this->clothes->getCleanClothes();
        $output .= " clean closes and ";
        $output .= $this->clothes->getDirtyClothes();
        $output .= " dirty clothes in the laundry.";

        return $output;
    }

    /**
     * @return Clothes
     */
    public function getClothes()
    {
        return $this->clothes;
    }

    /**
     * @param Clothes
     */
    public function setClothes($clothes)
    {
        $this->clothes = $clothes;
    }

    /**
     * @return Taxi
     */
    public function getTaxi()
    {
        return $this->taxi;
    }

    /**
     * @param Taxi
     */
    public function setTaxi($taxi)
    {
        $this->taxi = $taxi;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float
     */
    public function setBalace($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return array
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param array
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return array
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * @param array
     */
    public function setHome($home)
    {
        $this->home = $home;
    }
}