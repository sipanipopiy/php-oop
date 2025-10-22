<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Yanto";
$manager->sayHello("Siti");

$vp = new VicePresident();
$vp->name = "Siti";
$vp->sayHello("Yanto");
