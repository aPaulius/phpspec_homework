<?php


class Clothes
{
    /**
     * @var int
     */
    private $cleanClothes;

    /**
     * @var int
     */
    private $dirtyClothes;

    public function __construct($cleanClothes = 0)
    {
        $this->cleanClothes = $cleanClothes;
    }

    public function removeClothes()
    {
        $this->cleanClothes = 0;
        $this->dirtyClothes = 0;
    }

    /**
     * @return int
     */
    public function getCleanClothes()
    {
        return $this->cleanClothes;
    }

    /**
     * @param int
     */
    public function setCleanClothes($cleanClothes = 0, $dirtyClothes = 0)
    {
        $this->cleanClothes = $cleanClothes;
        $this->dirtyClothes = $dirtyClothes;
    }

    /**
     * @return int
     */
    public function getDirtyClothes()
    {
        return $this->dirtyClothes;
    }

    /**
     * @param int
     */
    public function setDirtyClothes($dirtyClothes)
    {
        $this->dirtyClothes = $dirtyClothes;
    }

}