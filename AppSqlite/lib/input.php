<?php

class  Input{
	public static function post($element=NULL){
		if(is_null($element)){
			return $_POST;
		}
		if(isset($_POST[$element])){
			return $_POST[$element];
		}
		return FALSE;
	}
	public static function get($element=NULL){
		if(is_null($element)){
			return $_GET;
		}
		if(isset($_GET[$element])){
			return $_GET[$element];
		}
		return FALSE;
	}
}