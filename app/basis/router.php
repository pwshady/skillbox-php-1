<?php

namespace app\basis;

class Router{
    
    public function load(){
		$arr = require 'app/config/routes.php';
		foreach ($arr as $key => $value) {
			$this->add($key, $value);
		}

		//debug($arr);
	};
};
