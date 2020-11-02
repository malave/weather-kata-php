<?php


namespace Codium\CleanCode\models;


/**
 * Class City
 * @package Codium\CleanCode\models
 */
class City
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $location_type;

    /**
     * @var integer
     */
    private $woeid;

    /**
     * @var string
     */
    private $latt_long;

    /**
     * City constructor.
     * @param string $title
     * @param string $location_type
     * @param int $woeid
     * @param string $latt_long
     */
    public function __construct(string $title, string $location_type, int $woeid, string $latt_long)
    {
        $this->title = $title;
        $this->location_type = $location_type;
        $this->woeid = $woeid;
        $this->latt_long = $latt_long;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getLocationType(): string
    {
        return $this->location_type;
    }

    /**
     * @param string $location_type
     */
    public function setLocationType(string $location_type): void
    {
        $this->$location_type = $location_type;
    }

    /**
     * @return int
     */
    public function getWoeid(): int
    {
        return $this->woeid;
    }

    /**
     * @param int $woeid
     */
    public function setWoeid(int $woeid): void
    {
        $this->woeid = $woeid;
    }

    /**
     * @return string
     */
    public function getLattLong(): string
    {
        return $this->latt_long;
    }

    /**
     * @param string $latt_long
     */
    public function setLattLong(string $latt_long): void
    {
        $this->$latt_long = $latt_long;
    }


}