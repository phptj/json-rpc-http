<?php

$services = [
    [
        'services' => [
            'CalculatorService',
            'ProductService',
        ],
        'nodes' => [
            ['host' => '127.0.0.1', 'port' => 9503],
            ['host' => '127.0.0.1', 'port' => 9503]
        ]
    ]
];

return [
    'services' => $services
];
