<?php

require_once "data/Person.php";

$eko = new Person("Yanto", "Bandung");
$eko->name = "Yanto";
$eko->sayHello("Siti");

$joko = new Person("Kamal", "Dumai");
$joko->name = "Kamal";
$joko->sayHello(null);

$eko->info();
$joko->info();