<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Kamal";
$manager->sayHello("Siti");

$vp = new VicePresident();
$vp->name = "Yanto";
$vp->sayHello("Siti");
