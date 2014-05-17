<?php
require('vendor/autoload.php');

$response = Bernoulli\Client::GetExperiments('first', $_GET['id'], null);
echo $response;
echo "\n";

echo 'done!';
