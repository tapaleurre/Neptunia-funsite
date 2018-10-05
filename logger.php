<?php
	$log_file_name = 'mylog.log'; // Change to the log file name
	$message = $_POST['variable']; // incoming message
	$two = 'twoooo';
	file_put_contents($log_file_name, $two, FILE_APPEND);

	if (isset($_POST["variable"]))
		{
		$message = $_POST["variable"]; // incoming message
		file_put_contents($log_file_name, $message, FILE_APPEND);
		}
?>