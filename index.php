<?php

require __DIR__ . '/vendor/autoload.php';

$startTime = clock('start time');

exec("php proc.php");

//exgProcess();

$endTime = clock('end time');

dump('Duration : ' . ($endTime - $startTime));