<?php
namespace App\test;
require_once('Personnage.php');

class Guerrier extends Personnage
{
    public function __construct($name,$pv, $attaque){
        $this->name=$name;
        $this->pv=$pv +$pv*0.1;
        $this->attaque=$attaque;
    }
}
?>