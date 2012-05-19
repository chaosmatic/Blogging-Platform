<?php
class databaseaccess {

	public $hostname = 'localhost';
	public $username = 'root';
	public $password = 'root';
	private $db = null;
	public $result;

  	public function __construct() {
        	try {
       			$this->db = new PDO("mysql:host=$hostname;dbname=Blogging-Platform", $this->username, $this->password);
     		}
        	catch (PDOException $Exception) {
           		throw new Exception("DB failed to connect ".$Exception->getMessage());
     		}
    	}

	public function displayposts($posts) { 
		if ($this->db === null) throw new Exception("DB is not connected");
		$query = "SELECT * FROM posts ORDER BY `id` DESC LIMIT :posts";
		$statement = $this->db->prepare($query);
		$statement->bindValue(':posts', $posts, PDO::PARAM_INT);
		$statement->execute();
		$this->result = $statement->fetchAll(PDO::FETCH_ASSOC);	
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
