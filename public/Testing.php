<?php

declare(strict_types=1);

$functions = [
    function ($next) {
        echo "A";
        $next();
    },
    function ($next) {
        echo "B";
        $next();
    },
    function ($next) {
        echo "C";
        $next();
    }
];

$a = function () {
    echo "Testing";
};

foreach ($functions as $function) {
    $a = fn() => $function($a);
}

$a();
