<?
// error_reporting(E_ALL);
class Mysql{
	private $host;
	private $username;
	private $password;
	private $dbname;
	private $con;

	function Mysql(){
		$this->host = "localhost:3307";
		$this->username = "root";
		$this->password = "root";
		$this->dbname = "rgz";
	}
	
	function connect(){	
		$this->con = new mysqli(
			$this->host, $this->username, $this->password, $this->dbname);
		// Check connection status
		if ($this->con->connect_error) {
		  die("Connection failed: " . $this->con->connect_error);
		}

		mysqli_set_charset($this->con, 'utf8');
		mysqli_query($this->con, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
		mysqli_query($this->con, "SET CHARACTER SET 'utf8'");
		// echo "<p class='success'>Data Base was connected successfully</p>";
	}
	function close(){
		$this->con->close();
	}

	// insert users to mysql table
	function insertUser($login, $password){
		$sql = "INSERT INTO `users`
				(`login`, `password`, `score`)
				VALUES (?, ?, 0);";
		$stmt = $this->con->prepare($sql);
		$stmt->bind_param("ss", $login,
			$password);
		if($stmt->execute() != TRUE){
			die("Error: " . $sql . "<br>" . $this->con->error);
		}

		return true;
	}
	// authorization
	function authorization($login, $password){
		$sql = "SELECT * FROM `users` WHERE 
				(`login`= ? AND `password`= ? ) LIMIT 1";
		$stmt = $this->con->prepare($sql);
		$stmt->bind_param("ss", $login, $password);
		if($stmt->execute() != TRUE){
			die("Error: " . $sql . "<br>" . $this->con->error);
		}
		$result = $stmt->get_result();
		
		return $result;
	}

	// update user's score at mysql table
	function updateScore($login, $score){
		$sql = "UPDATE `users`
				SET score = score + ?
				WHERE login = ?;";
		$stmt = $this->con->prepare($sql);
		$stmt->bind_param("ss", $score,
			$login);
		if($stmt->execute() != TRUE){
			die("Error: " . $sql . "<br>" . $this->con->error);
		}

		return true;
	}

	// getScore
	function getScore($login){
		$sql = "SELECT score FROM `users` WHERE 
				(`login`= ?) LIMIT 1";
		$stmt = $this->con->prepare($sql);
		$stmt->bind_param("s", $login);
		if($stmt->execute() != TRUE){
			die("Error: " . $sql . "<br>" . $this->con->error);
		}
		$result = $stmt->get_result();
		
		return $result;
	}

	function getAllUsers(){
		$sql = "SELECT * FROM `users`";
		$stmt = $this->con->prepare($sql);
		if($stmt->execute() != TRUE){
			die("Error: " . $sql . "<br>" . $this->con->error);
		}
		$result = $stmt->get_result();
		
		return $result;
	}

	function zeroScore($login){
		$sql = "UPDATE `users`
				SET score = 0
				WHERE login = ?;";
		$stmt = $this->con->prepare($sql);
		$stmt->bind_param("s", $login);
		if($stmt->execute() != TRUE){
			die("Error: " . $sql . "<br>" . $this->con->error);
		}

		return true;
	}
	
}
?>