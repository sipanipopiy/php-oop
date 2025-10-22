<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Yanto");
var_dump($company);

$company->programmer = new BackendProgrammer("Yanto");
var_dump($company);

$company->programmer = new FrontendProgrammer("Yanto");
var_dump($company);

sayHelloProgrammer(new Programmer("Yanto"));
sayHelloProgrammer(new BackendProgrammer("Yanto"));
sayHelloProgrammer(new FrontendProgrammer("Yanto"));