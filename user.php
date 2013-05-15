 <?php
require_once('PasswordHash.php');

class user {
	private $loggedIn = false;
	private $dbh;

	
	public function __construct($databaseHandle) {
       $this->dbh = $databaseHandle;
       $this->loggedIn = $_SESSION['check'];
    }

    private function updateSession(){
		$_SESSION['check'] = $this->loggedIn;
	}


	public function CheckPassword($password){
		$hasher = new PasswordHash(8, false);
		$this->dbh->gethash();
		$hash = $this->dbh->hash;
		//$val = $hasher->HashPassword($password);
		//echo $val;
		$this->loggedIn = $hasher->CheckPassword($password, $hash);
		$this->updateSession();
	}

	public function logout(){
		$this->loggedIn = false;
		$this->updateSession();
	}

	public function checkLoggedIn(){
		return $this->loggedIn;
	}

	public function changePassword($newPassword,$newPassword1){
		if ($newPassword1 == $newPassword){
			$hasher = new PasswordHash(8, false);
			$newhash = $hasher->HashPassword($newPassword);
			if (strlen($newhash) < 20){
				return "Failed to hash new password";
			}else{
				$this->dbh->writehash($newhash);
				return "Password Updated";
			}
			
		}else{
			return "Passwords did not match!";
		}
	
	}






}