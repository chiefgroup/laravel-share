<?php

return [
    'node' => [
        'host' => env('QF_SHARE_JSON_NODE_HOST', '127.0.0.1'),
        //jsonrpc
        'port' => env('QF_SHARE_JSON_NODE_PORT', 9503),
        //jsonrpc-http
        'port_http' => env('QF_SHARE_JSON_NODE_PORT_HTTP', 9504)
    ]
];