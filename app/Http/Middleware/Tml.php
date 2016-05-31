<?php

namespace App\Http\Middleware;
use Closure;

class Tml {

    public function handle($request, Closure $next) {
        tml_init([
            "key" => "76e8b8c5b412f65584ccb10ff596f954c6a6b9e1a2823690a9ce95ef63ae86cd",
            "cache" => [
                "enabled"                   => true,
                "adapter"                   => "memcache",
                "host"                      => "localhost",
                "namespace"                 => "76e8b8c5b",
                "port"                      => 11211,
                "version_check_interval"    => 60 * 60 * 1
            ],
            "log" => [
                "enabled" => true,
                "path" => "./log/tml.log"
            ]
        ]);

        return $next($request);
    }

    public function terminate($request, $response) {
        tml_complete_request();
    }
}
