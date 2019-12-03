<?php

class Technology 
{
    function PHP() {
        return "php";
    }
    function Jsp() {
        return "jsp";
    }
    function Asp() {
        return "asp";
    }
}

$myClass = new Technology();
echo "I'm learning ".$myClass->PHP();


class Class1 
{
    private $name;
    private $action;
    function __construct($_name, $_action)
    {
        $this->name = $_name;
        $this->action = $_action;
    }   

    /**
     * Action
     *
     * @author along
     * @date 2019-11-29
     * @sicen
     * @return void
     */
    function action()
    {
        echo $this->name.$this->action;
    }

    function __destruct()
    {
        $this->name;
        $this->action;
    }
}


class Class2 
{
    public $name;
    public $action;

    function action() 
    {
        echo $this->name.$this->action;
    }
}

$class1 = new Class1("along", "is coding");
$class1->action();

$class2 = new Class2();
$class2->name = "along";
$class2->action = "is coding";
$class2->action();


class MyClass
{
    function weather($str)
    {
        return "The weather now is ".$str;
    }
}

?>