<?php
require_once ('database.php');

class security {

	private $sdbh = new databaseaccess;

	public function gethash(){
		if ($this->$sdbh->db === null) throw new Exception("DB is not connected");
		$query = "SELECT * FROM crypto ORDER BY `id` DESC LIMIT 1";
		$statement = $this->$sdbh->db->prepare($query);
		$statement->execute();
		$temp = $statement->fetch(PDO::FETCH_ASSOC);
		$this->result = $temp['hash'];
	}
	
	public function writehash($hash){
	if ($this->$sdbh->db === null) throw new Exception("DB is not connected");

		$query = "INSERT INTO `Blogging-Platform`.`crypto` (`hash`) VALUES (:hash)";
		$statement = $this->$sdbh->db->prepare($query);
		$statement->bindValue(':hash', $hash, PDO::PARAM_STR);
		$statement->execute();
	}
}
?>
