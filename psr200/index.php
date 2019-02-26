<?php

require 'vendor/autoload.php';  

use \Controller\HomeController;
use \Model\Country;

$country = new Country();
$countries_data = $country->findAll();
var_dump($countries_data);