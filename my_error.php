<?php
function countDown($number) {
	if ($number>10 || $number<0) {
		throw new Exception("Error! Something went wrong...");
	}
}
}
try {
	countDown(7);
} catch(Exception $exception) {
	echo $exception->getMessage();
}
?>