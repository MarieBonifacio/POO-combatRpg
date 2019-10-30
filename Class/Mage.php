<?php
namespace App\test;
require_once('Personnage.php');

class Mage extends Personnage
{
    public function __construct($name,$pv, $attaque){
        $this->name=$name;
        $this->pv=$pv;
        $this->attaque=$attaque + $attaque*0.1;
    }
}
?>