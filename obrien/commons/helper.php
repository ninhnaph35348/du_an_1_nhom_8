<?php

// Khai báo các hàm dùng Global

if (!function_exists('require_file')) {
    function require_file($pathFolder)
    {
        // echo $pathFolder;die;
        $files = array_diff(scandir($pathFolder), ['.', '..']);

        // debug($files);
        foreach ($files as $file) {
            require_once $pathFolder .'/'. $file;
        }
    }
}


if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}
