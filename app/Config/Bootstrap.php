<?php namespace app\Config;

class Bootstrap 
{
	public static function run()
	{
		self::escapemagicquote();
		$target = self::getPath();
		if(!empty($target)) {
			$controller = $target['controller'];
			$method = $target['method'];
			$params = $target['params'];
			if(class_exists('\app\Controllers\\'.$controller.'Controller')) {
				if(method_exists('app\Controllers\\'.$controller.'Controller', $method)) {
					echo call_user_func(array('\app\Controllers\\'.$controller.'Controller', $method), $params);
				} else {
					echo 'Page Not Found 404 : Method Not Found in Controller '.$controller;
				}
			} else {
				echo 'Page Not Found 404 : Controller Not Found';
			}
		} else {
			// read more at : http://php.net/manual/en/function.call-user-func.php
			echo call_user_func(array('\app\Controllers\HomeController', 'index'));	
		}
	}
	
	private static function getPath()
	{
		// php.net/manual/en/function.explode.php (split in js)
		$path = explode('/', $_SERVER['PATH_INFO']);
		$params = [];
		// save params to array
		if(count($path) > 3) {
			for($n=3 ; $n < count($path) ; $n++) {
				array_push($params, $path[$n]);
			}	
		}
		
		return [
			'controller' => empty($path[1]) ? 'Home' : ucfirst($path[1]),
			'method' => empty($path[2]) ? 'index' : $path[2],
			'params' => $params
		];
	}
    
	private static function escapemagicquote()
	{
		//read more at : http://php.net/manual/en/function.get-magic-quotes-gpc.php
		if (get_magic_quotes_gpc() === 1)
		{
		    $_GET = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_GET, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_POST = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_POST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_COOKIE = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_COOKIE, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_REQUEST = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_REQUEST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		}
	}
}