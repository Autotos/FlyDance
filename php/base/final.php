<?php
# final class
final class BaseClass
{
    protected function action()
    {
        return "base method";
    }
}

# this is error. BaseClass can't be extended
class SonClass extends BaseClass
{
    function result()
    {
        return "call result as ".$this->action();
    }
}
?>

<?php
$class = new SonClass();
echo $class->result();
?>

<?php
# final method
class Base
{
    final function action()
    {
        return "base method";
    }
}

class Son extends Base
{
    function action()
    {
        return "son method";
    }
}
?>
<?php
$class = new Son();
echo $class->action();
?>