<?php

require_once "vendor/autoload.php";

use \Tatah\Package\Search;

$busca = new Search;

$result = $busca->getAddressFromZipCode('17065450');

print_r($result);