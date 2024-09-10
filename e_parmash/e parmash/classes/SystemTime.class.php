<?php

class SystemTime{
	public static function getD($timestamp){
		return strftime(date("d-m-Y", $timestamp));
	}

	public static function getT($timestamp){ 
		return date("g:i a", $timestamp);
	}
}
