<?php

// require_once '../../../vendor/autoload.php';

use Carbon\Carbon;

$carbon = Carbon::now();
$carbon = new Carbon('+2 years');

printf("%s", $carbon->diffForHumans());