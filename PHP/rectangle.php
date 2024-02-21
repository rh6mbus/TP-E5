<?php
class Rectangle{
    Public $a;
    Public $b;
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
function surface(){
    return $this->a*this->b;
}
}
$R=new Rectangle(2,3);
echo $R->surface();
?>