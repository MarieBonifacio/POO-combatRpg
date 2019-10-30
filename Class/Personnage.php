<?php
namespace App\test;

class Personnage
{
    protected $pv;
    protected $attaque;
    protected $name;
    

    public function __construct($name,$pv, $attaque){
        $this->name=$name;
        $this->pv=$pv;
        $this->attaque=$attaque;
    }
    public function attaque($cible){
        $cible->pv -= $this->attaque;
        echo $this->name." ATTAQUE ".$cible->name. "!!!<br>";
        $pvLost = $this->attaque;
        echo $cible->name. " a perdu ".$pvLost." pv<br>"; 
        return $this->attaque;
    }
    public function getPv(){
        return $this->pv;
    }

    public function getName(){
        return $this->name;
    }
}
?>