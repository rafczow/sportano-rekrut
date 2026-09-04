<?php

function hello(string $name)
{
    if (empty($name)) {
        throw new RuntimeException('Empty name param');
    }

    $name = strtoupper($name);
    $message = "Hello {$name}";

    $length = strlen($name);

    $interval = DateInterval::createFromDateString('1 day 30 minutes 10 seconds');
    $time = DateTime::createFromTimestamp(time());
    $time->add($interval);

    return json_encode([
        "message" => $message,
        "length" => $length,
        "time" => $time
    ]);
}

echo hello("WORLD");
