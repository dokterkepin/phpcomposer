<?php
require_once __DIR__ . "/vendor/autoload.php";
use \dokterkepin\Belajar\Custumer;

$system = new Custumer("Kevin");
$function = "panggil";
echo $system->$function();
