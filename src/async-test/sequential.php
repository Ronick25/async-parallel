<?php

require 'src/helpers.php';

$timeStart = microtime(true);

makeRequest();
makeRequest();
makeRequest();

printExecutionTime($timeStart);
