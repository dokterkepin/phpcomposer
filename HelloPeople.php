<?php
require_once __DIR__ . "/vendor/autoload.php";
use dokterkepin\data\People;

$Andi = new People("Kevin");
echo $Andi->sayHello("Andi");
