<?php
class databaseaccess {

	public $hostname = 'localhost';
	public $username = 'root';
	public $password = 'root';
	private $db = null;
	public $rows;

  	public function __construct() {
        	try {
       			$this->db = new PDO("mysql:host=$hostname;dbname=Blogging-Platform", $this->username, $this->password);
     		}
        	catch (PDOException $Exception) {
           		throw new Exception("DB failed to connect ".$Exception->getMessage());
     		}
    	}

	public function displayposts($lbound,$PostPerPage) {
		if ($this->db === null) throw new Exception("DB is not connected");
		$query = "SELECT * FROM posts ORDER BY `id` DESC LIMIT :lbound, :PostPerPage";
		$statement = $this->db->prepare($query);
		$statement->bindValue(':lbound', $lbound, PDO::PARAM_INT);
		$statement->bindValue(':PostPerPage', $PostPerPage, PDO::PARAM_INT);
		$statement->execute();
		$this->result = $statement->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($this->result); //debugging only
	}

	public function write($title,$text){
		if ($this->db === null) throw new Exception("DB is not connected");

		$query = "INSERT INTO `Blogging-Platform`.`posts` (`title` ,`text`) VALUES (:title, :text)";
		$statement = $this->db->prepare($query);
		$statement->bindValue(':title', $title, PDO::PARAM_STR);
		$statement->bindValue(':text', $text, PDO::PARAM_STR);
		$statement->execute();
	}
}

?>
