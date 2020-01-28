<?php
/**
 * Created by IntelliJ IDEA.
 * User: psalm29
 * Date: 20/09/2017
 * Time: 8:26 PM
 */

class view {

	public static function render($page, $dir) {
		require('include/'.$dir.'header.php');
		require('pages/'.$dir.$page.'.php');
		require('include/'.$dir.'footer.php');
	}
    
}