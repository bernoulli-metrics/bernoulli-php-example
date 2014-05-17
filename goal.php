<?php
require('vendor/autoload.php');

$response = Bernoulli\Client::GoalAttained('first', $_GET['id'], null);
echo json_encode($response);
echo "\n";

echo 'done!';
