<?php

use App\Models\Service;

if (!function_exists('getServices')) {
    function getServices() {
        return Service::orderBy('title', 'ASC')->where('status', 1)->get();
    }
}
