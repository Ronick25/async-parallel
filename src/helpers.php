<?php

use Psr\Http\Message\ResponseInterface;
use Clue\React\Buzz\Browser;

const FILE_NAME = 'longest_word.txt';
const ENDPOINT_URL = 'http://localhost:3000';
const CORE_QUANTITY = 12;

function getRandomWords($quantity)
{
    $words = [];

    for ($i = 0; $i < $quantity; $i++) {
        $words[] = getRandomString();
    }

    return $words;
}

function getRandomString()
{
    return substr(md5(mt_rand()), 0, rand(1, 20));
}

function printExecutionTime($timeStart)
{
    echo 'Total Execution Time: ' . number_format((float) (microtime(true) - $timeStart), 3) . PHP_EOL;
}

function printLongestWord($longestWord = null)
{
    if (! $longestWord) {
        $longestWord = file_get_contents(FILE_NAME);
        unlink(FILE_NAME);
    }

    echo 'Longest word: ' . $longestWord . PHP_EOL;
}

function makeRequest()
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, ENDPOINT_URL);
    curl_exec($curl);
}

function makeAsyncRequest(Browser $client)
{
    $client->get(ENDPOINT_URL)->then(function (ResponseInterface $response) {
        var_dump((string)$response->getBody());
    });
}