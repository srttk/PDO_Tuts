<style type="text/css">
body{
	background-color:#000;
	color: #3A6;
}
</style>
<?php
/* Common helper function */


function clog($message){

		if(is_array($message))
		{
			echo '<pre>';
			print_r($message);
			echo '</pre>';
			return  TRUE;
		}
		if(is_string($message)){
			echo '<pre>';
			echo $message;
			echo '</pre>';	
			return TRUE;
		}
		echo '<pre>';
		var_dump($message);
		echo '</pre>';


	}