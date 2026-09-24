<?php

return [
    'enabled' => env('GEO_RADIUS_SPATIAL_API_ENABLED', true),
    'timeout' => env('GEO_RADIUS_SPATIAL_API_TIMEOUT', 30),
    'log_channel' => env('GEO_RADIUS_SPATIAL_API_LOG', 'stack'),
];
