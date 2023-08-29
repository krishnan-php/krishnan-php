<?php
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro();
}
class Audi extends Car{
    public function intro()
    {
        return "choose $this->name";
    }
}
$audi=new Audi("audi");
echo $audi->intro();

//withparameter
abstract class name{
    abstract function krishnan($name);
}
class names extends name{
    function krishnan($name)
    {
        return $name;
    }
}
$res=new names();
echo "<br>";
echo $res->krishnan("krishnan");

//optional parameter
abstract class option{
    abstract function value($opt);
}
class choose extends option{
    function value($opt,$select="Mr")
    {
        return $select.$opt;
    }
}
$value=new names();
echo "<br>";
echo $res->krishnan("siddhq");

?>

