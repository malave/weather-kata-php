<?php

namespace Codium\CleanCode;

use Codium\CleanCode\providers\MetaWeatherProvider;
use DateTime;

class Forecast
{
    const EMPTY_STRING = "";
    const VALID_DATE = "+6 days 00:00:00";
    const DATE_FORMAT = 'Y-m-d';

    public function predict(string &$city, DateTime $datetime = null, bool $wind = false): string
    {
        // When date is not provided we look for the current prediction
        if (!$datetime) {
            $datetime = new DateTime();
        }

        $is_date_valid = $datetime < new DateTime(self::VALID_DATE);
        if (!$is_date_valid) {
            return self::EMPTY_STRING;
        }

        // Find city data on metawheather
        $weather_provider = new MetaWeatherProvider();
        $city_data = $weather_provider->getCity($city);
        $city = $city_data->getWoeid();

        // Find the predictions for the city
        $results = $weather_provider->getWeatherData($city_data->getWoeid());
        foreach ($results as $result) {

            // When the date is the expected
            if ($result->getApplicableDate() == $datetime->format(self::DATE_FORMAT)) {
                // If we have to return the wind information
                return $wind ? $result->getWindSpeed() : $result->getWeatherStateName();
            }
        }
        return self::EMPTY_STRING;
    }
}