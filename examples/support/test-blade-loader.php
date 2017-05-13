<?php
if (!function_exists('macropiche_blade_view')) {
    function macropiche_blade_view()
    {
        return new \duncan3dc\Laravel\BladeInstance(
            realpath(__DIR__ . "/.."),
            realpath(__DIR__ . '/blade-cache')
        );
    }
}