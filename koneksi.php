<?php
use DevCoder\DotEnv;
include_once 'DotEnv.php';
(new DotEnv(__DIR__.'/.env'))->load();

class Koneksi
{
	public function DBConnect()
	{
		try {
			$dbConnection = new PDO(getenv('DATABASE_DNS'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
			$dbConnection->exec("set names utf8");
			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return  $dbConnection;
		} catch (PDOException $e) {
			return 'Connection failed: ' . $e->getMessage();
		}
	}
}
// define("DB_DSN", getenv('DATABASE_DNS'));
// define("DB_USERNAME", getenv('MYSQL_USER'));
// define("DB_PASSWORD", getenv('MYSQL_PASSWORD'));
// define('DB_CHARACSET', 'utf8');

$abs = getenv('baseUrl');
