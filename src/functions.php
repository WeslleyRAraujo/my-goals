<?php

if(!function_exists('json')) {
    function json(array $data, int $httpCode = 200) {
        http_response_code($httpCode);
        die(json_encode($data));
    }
}