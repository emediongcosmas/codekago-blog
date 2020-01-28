<?php
/**
 * Created by IntelliJ IDEA.
 * User: psalm29
 * Date: 20/09/2017
 * Time: 9:01 PM
 */

class config {

	static $url = "http://localhost/archub/";

	public static function base() {
		return self::$url;
	}
    
    public static function baseUploadUrl() {
        return "assets/img/";
    }

} 