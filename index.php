<?php
require('vendor/autoload.php');

$experiments = Bernoulli\Client::GetExperiments('first', null, [], null);
echo "Response: " . json_encode($experiments);
echo "<br />";
if ($experiments[0]['variant'] == "hello_world") {
	echo "hello world!<br />";
} else {
	echo "goodbye world!<br />";
}

?>
<a href="goal.php?id=<?php echo $experiments[0]['user_id'] ?>">Goal</a>
