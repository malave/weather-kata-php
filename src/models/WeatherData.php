<?php


namespace Codium\CleanCode\models;


class WeatherData
{
    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $weather_state_name;
    /**
     * @var string
     */
    private $weather_state_abbr;
    /**
     * @var string
     */
    private $wind_direction_compass;
    /**
     * @var string
     */
    private $created;
    /**
     * @var string
     */
    private $applicable_date;
    /**
     * @var integer
     */
    private $min_temp;
    /**
     * @var integer
     */
    private $max_temp;
    /**
     * @var integer
     */
    private $the_temp;
    /**
     * @var integer
     */
    private $wind_speed;
    /**
     * @var integer
     */
    private $wind_direction;
    /**
     * @var integer
     */
    private $air_pressure;
    /**
     * @var integer
     */
    private $humidity;
    /**
     * @var integer
     */
    private $visibility;
    /**
     * @var integer
     */
    private $predictability;

    /**
     * WeatherData constructor.
     * @param int $id
     * @param string $weather_state_name
     * @param string $weather_state_abbr
     * @param string $wind_direction_compass
     * @param string $created
     * @param string $applicable_date
     * @param int $min_temp
     * @param int $max_temp
     * @param int $the_temp
     * @param int $wind_speed
     * @param int $wind_direction
     * @param int $air_pressure
     * @param int $humidity
     * @param int $visibility
     * @param int $predictability
     */
    public function __construct(int $id, string $weather_state_name, string $weather_state_abbr, string $wind_direction_compass, string $created, string $applicable_date, int $min_temp, int $max_temp, int $the_temp, int $wind_speed, int $wind_direction, int $air_pressure, int $humidity, int $visibility, int $predictability)
    {
        $this->id = $id;
        $this->weather_state_name = $weather_state_name;
        $this->weather_state_abbr = $weather_state_abbr;
        $this->wind_direction_compass = $wind_direction_compass;
        $this->created = $created;
        $this->applicable_date = $applicable_date;
        $this->min_temp = $min_temp;
        $this->max_temp = $max_temp;
        $this->the_temp = $the_temp;
        $this->wind_speed = $wind_speed;
        $this->wind_direction = $wind_direction;
        $this->air_pressure = $air_pressure;
        $this->humidity = $humidity;
        $this->visibility = $visibility;
        $this->predictability = $predictability;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getWeatherStateName(): string
    {
        return $this->weather_state_name;
    }

    /**
     * @param string $weather_state_name
     */
    public function setWeatherStateName(string $weather_state_name): void
    {
        $this->weather_state_name = $weather_state_name;
    }

    /**
     * @return string
     */
    public function getWeatherStateAbbr(): string
    {
        return $this->weather_state_abbr;
    }

    /**
     * @param string $weather_state_abbr
     */
    public function setWeatherStateAbbr(string $weather_state_abbr): void
    {
        $this->weather_state_abbr = $weather_state_abbr;
    }

    /**
     * @return string
     */
    public function getWindDirectionCompass(): string
    {
        return $this->wind_direction_compass;
    }

    /**
     * @param string $wind_direction_compass
     */
    public function setWindDirectionCompass(string $wind_direction_compass): void
    {
        $this->wind_direction_compass = $wind_direction_compass;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated(string $created): void
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getApplicableDate(): string
    {
        return $this->applicable_date;
    }

    /**
     * @param string $applicable_date
     */
    public function setApplicableDate(string $applicable_date): void
    {
        $this->applicable_date = $applicable_date;
    }

    /**
     * @return int
     */
    public function getMinTemp(): int
    {
        return $this->min_temp;
    }

    /**
     * @param int $min_temp
     */
    public function setMinTemp(int $min_temp): void
    {
        $this->min_temp = $min_temp;
    }

    /**
     * @return int
     */
    public function getMaxTemp(): int
    {
        return $this->max_temp;
    }

    /**
     * @param int $max_temp
     */
    public function setMaxTemp(int $max_temp): void
    {
        $this->max_temp = $max_temp;
    }

    /**
     * @return int
     */
    public function getTheTemp(): int
    {
        return $this->the_temp;
    }

    /**
     * @param int $the_temp
     */
    public function setTheTemp(int $the_temp): void
    {
        $this->the_temp = $the_temp;
    }

    /**
     * @return int
     */
    public function getWindSpeed(): int
    {
        return $this->wind_speed;
    }

    /**
     * @param int $wind_speed
     */
    public function setWindSpeed(int $wind_speed): void
    {
        $this->wind_speed = $wind_speed;
    }

    /**
     * @return int
     */
    public function getWindDirection(): int
    {
        return $this->wind_direction;
    }

    /**
     * @param int $wind_direction
     */
    public function setWindDirection(int $wind_direction): void
    {
        $this->wind_direction = $wind_direction;
    }

    /**
     * @return int
     */
    public function getAirPressure(): int
    {
        return $this->air_pressure;
    }

    /**
     * @param int $air_pressure
     */
    public function setAirPressure(int $air_pressure): void
    {
        $this->air_pressure = $air_pressure;
    }

    /**
     * @return int
     */
    public function getHumidity(): int
    {
        return $this->humidity;
    }

    /**
     * @param int $humidity
     */
    public function setHumidity(int $humidity): void
    {
        $this->humidity = $humidity;
    }

    /**
     * @return int
     */
    public function getVisibility(): int
    {
        return $this->visibility;
    }

    /**
     * @param int $visibility
     */
    public function setVisibility(int $visibility): void
    {
        $this->visibility = $visibility;
    }

    /**
     * @return int
     */
    public function getPredictability(): int
    {
        return $this->predictability;
    }

    /**
     * @param int $predictability
     */
    public function setPredictability(int $predictability): void
    {
        $this->predictability = $predictability;
    }

}