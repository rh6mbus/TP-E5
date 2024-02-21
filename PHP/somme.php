
<?php
class Somme {

public $n1;
public $n2;

function __construct($n1,$n2){
    $this->n1=$n1;
    $this->n2=$n2;
}

function somme(){
    return $this->n1+$this->n2;
}

}

// Programme de test
$S=new Somme(2,6);
echo $S->somme();
?>