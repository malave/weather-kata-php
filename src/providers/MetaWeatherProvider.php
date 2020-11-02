<?php

namespace Codium\CleanCode\providers;

use Codium\CleanCode\models\City;
use Codium\CleanCode\models\WeatherData;
use GuzzleHttp\Client;

class MetaWeatherProvider implements WeatherProviderInterface
{
    private const BASE_URL = "https://www.metaweather.com/api";
    private const META_WEATHER_QUERY = self::BASE_URL . "/location/search/?query=";
    private const META_WEATHER_LOCATION = self::BASE_URL . "/location/";
    /**
     * @var Client
     */
    private $client;

    /**
     * MetaWeatherProvider constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param $city_name
     * @return City
     */
    public function getCity($city)
    {
        $result = json_decode($this->client->get(self::META_WEATHER_QUERY . $city)->getBody()->getContents(),
            true)[0];
        return new City(
            $result['title'],
            $result['location_type'],
            $result['woeid'],
            $result['latt_long']
        );
    }

    /**
     * @param $woeid
     * @return WeatherData[]
     */
    public function getWeatherData($woeid)
    {
        $results = json_decode($this->client->get(self::META_WEATHER_LOCATION . $woeid)->getBody()->getContents(),
            true)['consolidated_weather'];
        $consolidated_weather = [];
        foreach ($results as $result) {
            $consolidated_weather[] = new WeatherData(
                $result['id'],
                $result['weather_state_name'],
                $result['weather_state_abbr'],
                $result['wind_direction_compass'],
                $result['created'],
                $result['applicable_date'],
                $result['min_temp'],
                $result['max_temp'],
                $result['the_temp'],
                $result['wind_speed'],
                $result['wind_direction'],
                $result['air_pressure'],
                $result['humidity'],
                $result['visibility'],
                $result['predictability'],
            );
        }
        return $consolidated_weather;
    }
}