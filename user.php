 <?php
require_once('PasswordHash.php');

class user {
	private $loggedIn = false;
	

	public function CheckPassword($dbh,$password){
		$hasher = new PasswordHash(8, false);
		$dbh->gethash();
		$hash = $dbh->hash;
		$this->loggedIn = $hasher->CheckPassword($password, $hash);
		return $this->loggedIn;
	}

	public function logout(){
		$this->loggedIn = false;
	}

	public function checkLoggedIn(){
		return $this->loggedIn;
	}

	public function changePassword($dbh,$newPassword,$newPassword1){
		if ($newPassword1 == $newPassword){
			$hasher = new PasswordHash(8, false);
			$newhash = $hasher->HashPassword($newPassword);
			if (strlen($newhash) < 20){
				return "Failed to hash new password";
			}else{
				$dbh->writehash($newhash);
				return "Password Updated";
			}
			
		}else{
			return "Passwords did not match!";
		}
	
	}





}