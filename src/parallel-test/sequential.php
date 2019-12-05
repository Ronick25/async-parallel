<?php

require 'vendor/autoload.php';
require 'src/helpers.php';

$timeStart   = microtime(true);
$words       = getRandomWords(120000000);
$longestWord = '';

foreach ($words as $word) {
    $longestWord = strlen($word) > strlen($longestWord) ? $word : $longestWord;
}

printLongestWord($longestWord);
printExecutionTime($timeStart);
