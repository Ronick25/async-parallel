<?php

use Clue\React\Buzz\Browser;
use React\EventLoop\Factory;

require 'vendor/autoload.php';
require 'src/helpers.php';

$timeStart = microtime(true);

$loop = Factory::create();
$client = new Browser($loop);

makeAsyncRequest($client);
makeAsyncRequest($client);
makeAsyncRequest($client);

$loop->run();

printExecutionTime($timeStart);