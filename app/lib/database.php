<?

namespace app\lib;

use PDO;

class Database{

	protected $database;

	public function __construct()
	{

		$config = require 'app/config/database-config.php';
		$this->database = new PDO ('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['pass']);

	};


};

?>