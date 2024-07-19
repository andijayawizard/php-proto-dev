<?php
class AuthController {
	protected $db;
	function __construct($db)
	{
		$this->db = $db;
	}
	public function login($user, $pass)
	{
		$row = $this->db->prepare("SELECT * FROM users WHERE username=?");
		$row->execute(array($user));
		$count = $row->rowCount();
		if ($count > 0) {
			return $hasil = $row->fetch();
		} else {
			return 'gagal';
		}
	}
}
