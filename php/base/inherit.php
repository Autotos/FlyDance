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
}
?>