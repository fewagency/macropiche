<?php
function macropiche_blade_view()
{
    return new \Jenssegers\Blade\Blade(
        [realpath(__DIR__)],
        realpath(__DIR__ . '/blade-cache')
    );
}

require 'test.php';