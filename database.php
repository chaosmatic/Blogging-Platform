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
		$this->result = $statement->fetchAll(/*PDO::FETCH_ASSOC*/);
		var_dump($this->result);
		
	}
}

?>
