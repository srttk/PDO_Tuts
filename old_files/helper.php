<style type="text/css">
*{
	background-color:#000;
	color: #3A6;
}
</style>
<?php
/* Common helper function */


function clog($message,$json=FALSE){

		if(is_array($message))
		{
			echo '<pre>';
			if($json){
				echo json_encode($message);
			}
			else{
				print_r($message);
			}
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