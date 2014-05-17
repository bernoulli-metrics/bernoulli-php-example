<?php
require('vendor/autoload.php');

$experiments = Bernoulli\Client::GetExperiments('first', null, [], null);
echo "Response: " . echo json_encode($experiments);
echo "\n";
if ($experiments[0]['variant'] == "hello_world") {
	echo "hello world!\n";
} else {
	echo "goodbye world!\n";
}

?>
<a href="goal.php?id=<?php echo $experiments[0]['user_id'] ?>">Goal</a>
