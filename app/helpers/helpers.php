<?php

if (! function_exists('baseUrl')) {
    function baseUrl() {
        return config('app.base_url');
    }
}


if (! function_exists('adminUrl')) {
    function adminUrl() {
        return config('app.admin_subdomain') . '.' . baseUrl();
    }
}


if (! function_exists('apiBaseUrl')){
    function apiBaseUrl(){
        return config('app.api_subdomain').'.'.baseUrl();
    }
}