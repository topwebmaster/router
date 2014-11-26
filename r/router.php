<?php
/**
 * Created by PhpStorm.
 * User: twb
 * Date: 25.11.14
 * Time: 21:30
 */
class Router{
	private $_uri = [];
    private $_method = [];


	/**
	 * строим поиск внутренних урлов
	 * @param $uri
	 */
	public function add($uri, $method = null){
		$this->_uri[] = $uri.trim($uri, '/');

        if(!$method = null){
            $this ->_method[] = $method;
        }
	}




	public function submit(){

	$uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : "/";

	foreach($this->_uri as $key => $value)
	{
		if(preg_match("#^$value#", $uriGetParam))
		{
			echo "match";
		}
	}

	}

}