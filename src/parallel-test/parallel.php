<?php

require 'vendor/autoload.php';
require 'src/helpers.php';

$timeStart = microtime(true);
$manager   = new Ko\ProcessManager();
$words     = getRandomWords(10000000);

for ($i = 0; $i < CORE_QUANTITY - 1; $i++) {
    $manager->fork(function () use ($words) {
        $longestWord = '';

        foreach ($words as $word) {
            $longestWord = strlen($word) > strlen($longestWord) ? $word : $longestWord;
        }

        file_put_contents(FILE_NAME, $longestWord);
    });

}

$manager->wait();

printLongestWord();
printExecutionTime($timeStart);
