<?php
require __DIR__ . '/vendor/autoload.php';

if (!function_exists('exgProcess')) {
    /**
     *
     */
    function exgProcess()
    {
        clock();
        for ($i = 0; $i < 10; $i++) {
            sleep(1);
        }
        clock();
    }
}

exgProcess();