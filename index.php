<?php

require __DIR__ . '/vendor/autoload.php';

$startTime = clock('start time');

exgProcess();

$endTime = clock('end time');

dump('Duration : ' . ($endTime - $startTime));