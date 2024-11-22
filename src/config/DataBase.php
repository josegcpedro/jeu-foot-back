<?php

namespace Gri\Baloongame\Config;

use PDO;
use PDOException;

class DataBase
{
    private static $instance = NULL;
 
	public static function getInstance() {
		if(self::$instance === null) {
			try {
				self::$instance = new PDO('mysql:host=127.0.0.1;dbname=ballongame','root','');
			}

			catch(PDOException $e) {
				print "Erreur PDO ! : " . $e->getMessage() . "<br/>";
				die();
			}
		}

		return self::$instance;

	
	}
}