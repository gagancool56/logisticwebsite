<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('pr')) {
    function pr($data, $die = 0)
    {
        echo '<pre>';
        print_r($data);
        echo 'line no:' . debug_backtrace()[0]['line'] . '<br>';
        echo 'File: ' . debug_backtrace()[0]['file'];
        echo '</pre>';
        $die ? die() : '';
    }
}
