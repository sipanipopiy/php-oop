<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Siti");
$person->hello("Kamal");

$person->name = "Yanto";
var_dump($person);

$person->run();