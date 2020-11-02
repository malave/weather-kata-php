<?php


namespace Codium\CleanCode\providers;


use Codium\CleanCode\models\City;

interface WeatherProviderInterface
{
    /**
     * @param $city_name
     * @return City
     */
    public function getCity($city);

    public function getWeatherData($woeid);
}