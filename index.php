<?php

$experiments = Bernoulli\Client::GetExperiments('first', null, [], null);
if ($experiments[0]['variant'] == "hello_world") {
	echo "hello world!";
} else {
	echo "goodbye world!";
}

?>
