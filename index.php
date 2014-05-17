<?php
require('vendor/autoload.php');

$experiments = Bernoulli\Client::GetExperiments('first', null, [], null);
echo json_encode($experiments);
echo "\n";
if ($experiments[0]['variant'] == "hello_world") {
	echo "hello world!";
} else {
	echo "goodbye world!";
}

?>
<a href="goal.php?id=<?php echo $experiments[0]['user_id'] ?>">goal</a>
