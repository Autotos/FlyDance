<?php

class Animals
{
    protected function food()
    {
        return "eating...";
    }

    protected function sleep()
    {
        return "go to sleep";
    }

    protected function walk()
    {
        return "walking";
    }
}
?>

<?php
class Dog extends Animals
{
    public function yellow_dog()
    {
        echo "at 3 o'clock ".$this->walk()
            ." at 6 o'clock ".$this->sleep()
            ."at 8 o'clock ".$this->food();
    }

    public function black_dog()
    {
        echo "at 4 o'clock ".$this->walk()
            ."at 7 o'clock ".$this->sleep()
            ."at 9 o'clock ".$this->food();
    }

    public function white_dog()
    {
        echo "at 5 o'clock ".$this->walk()
            ."at 8 o'clock ".$this->sleep()
            ."at 10 o'clock ".$this->food();
    }
}

$class = new Dog();
$class->yellow_dog();
?>

<?php
class WeatherBase
{
    protected $country = "china";
    protected $city = "shenzhen";
    protected $temperature = 16;
    protected $weather;
}
?>

<?php
class SonWeather extends WeatherBase
{
    public function forecast()
    {
        $this->city = "guangzhou";
        $this->temperature = 10;
        $this->weather = "clouding";
        
        return array(
            "title"=>"weather report",
            "city"=>$this->city,
            "temperature"=>$this->temperature,
            "weather"=>$this->weather,
        );
    }
}

$class = new SonWeather();
$rows = $class->forecast();
# print array
var_dump($rows);
?>