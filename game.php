<?php
namespace App;
require('Class/Guerrier.php');
require('Class/Mage.php');
require('Class/Monstre.php');

use App\test\Guerrier;
use App\test\Mage;
use App\test\Monstre;

$Attila = new Guerrier("Attila",100,30);
$Glorg = new Monstre("Glorg",100,20);


while ($Attila->getPv()>0 && $Glorg->getPv()>0) {
    $Attila->attaque($Glorg);
    $Glorg->attaque($Attila);
    echo "il reste ".$Attila->getPv()." pv à ".$Attila->getName()." et ".$Glorg->getPv()." pv à ". $Glorg->getName()."</br>";
} 
echo "fini";



?>