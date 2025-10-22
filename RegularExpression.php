<?php

$matches = [];
$result = preg_match_all("/nto|mal|lal/i", "Yanto Kamal Halal", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|taik/i", "***", "dasar lu ANJING dan TAIK!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Yanto Kamal Halal ,Programmer,Zaman-Now");

var_dump($result);