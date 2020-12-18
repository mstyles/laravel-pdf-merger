<?php

return [

    'temp' => storage_path('app/temp/'),
    'compatibility' => [
        'enabled' => true,
        'binary' => env('GS_BINARY', '/usr/local/bin/gs'),
    ]

];