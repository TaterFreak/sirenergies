<?php

use Carbon\Carbon;

if (!function_exists('format_date')) {
    function format_date_to_diff(string $timestamp)
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);
        $currentTime = Carbon::now();
        $diff = $date->diffForHumans($currentTime);

        return $diff;
    }
}
