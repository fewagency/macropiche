<?php
function macropiche_blade_view()
{
    $blade = new \Jenssegers\Blade\Blade(
        [realpath(__DIR__)],
        realpath(__DIR__ . '/blade-cache')
    );
    $blade->getFinder()->addExtension('html');
    return $blade;
}

require 'test.php';