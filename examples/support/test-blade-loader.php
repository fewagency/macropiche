<?php
if (!function_exists('macropiche_blade_view')) {
    function macropiche_blade_view()
    {
        $blade = new \duncan3dc\Laravel\BladeInstance(
            realpath(__DIR__ . "/../patterns"),
            realpath(__DIR__ . '/blade-cache')
        );
        return $blade;
    }
}