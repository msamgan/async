<?php

if (!function_exists('dd')) {
    /**
     * @param $data
     */
    function dd($data)
    {
        print_r($data);
        die;
    }
}

if (!function_exists('dump')) {
    /**
     * @param $data
     */
    function dump($data)
    {
        print_r($data);
        print_r("\n");
    }
}

if (!function_exists('clock')) {
    /**
     * @param string $label
     * @return int
     */
    function clock($label = 'clock')
    {
        $time = time();
        dump($label . ' : ' . $time);

        return $time;
    }
}

if (!function_exists('exgProcess')) {
    /**
     *
     */
    function exgProcess()
    {
        for ($i = 0; $i < 10; $i++) {
            sleep(1);
        }
    }
}