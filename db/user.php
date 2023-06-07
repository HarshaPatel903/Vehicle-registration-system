<?php
 
class user{
	private $db;
	function __construct($conn){
		$this->db = $conn;
	}
	
	public function insertuser($uname,$pass){
		try{
			$result = $this->getuserbyusername($uname);
			if($result['num'] > 0){
				return false;
			}else{
				$new_password = md5($pass.$uname);
			    $sql = "INSERT INTO users (uname,pass) VALUES (:uname,:pass)";
			    $stmt = $this->db->prepare($sql);
			    $stmt->bindparam(':uname' ,$uname);
			    $stmt->bindparam(':pass' ,$new_password);
			    $stmt->execute();
			    return true;
			}
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
    public function getuser($uname,$pass){
		try{
			$sql = "select * from users where uname = :uname AND pass = :password";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':uname' ,$uname);
			$stmt->bindparam(':pass' ,$password);
			$stmt->execute();
			$result = $stmt->fetch();
			return $result;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function getuserbyusername($uname){
		try{
			$sql = "select count(*)as num from users where uname = :uname";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':uname' ,$uname);
			$stmt->execute();
			$result = $stmt->fetch();
			return $result;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function getusers(){
		try{
			$sql = "SELECT * FROM users";
			$result = $this->db->query($sql);
			return $result;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	
}
 ?>