<?php
/**
* 
*/
class DataReterive
{
	private $hostname;
	private $username;
	private $password;
	private $dbname;
	private $conn;

	function __construct($hostname, $username, $password, $dbname)
	{
		# code...
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;

	}

	public function connectToMysql(){
		$this->conn = mysqli_connect($this->hostname, $this->username, $this->password);
		if ($this->conn) {
			# code...
			echo "Connected successfully     ".$this->hostname ."<br/><br/>";
		}else{
			die("Could not connect to MySql". mysql_error().".");
		}
	}

	public function selectDb(){
		$result = mysqli_select_db($this->conn, $this->dbname);
		if ($result) {
			# code...
			echo "Database Selected successfully     ".$this->dbname."<br/><br/>";
		}else{
			echo "Could not connect to database";
		}
	}



	public function setTableName($tablename){
		$this->tablename = $tablename;
	}
	public function getTableName(){
		return $this->tablename;
	}

	public function getAllDataFromTable(){
		$sql = "SELECT * FROM anliplotteryresult LIMIT 10 ";
		$query = mysql_query($sql);
		$row = mysql_fetch_row($query);
		//return $row;

	}
}

$myConnection = new DataReterive("localhost", "root", "", "anlipo");
$myConnection->connectToMysql();
$myConnection->selectDb();
var_dump($myConnection->getAllDataFromTable());


$myconn = new DataReterive("localhost", "root", "", "classictours");
$myconn->connectToMysql();
$myconn->selectDb();
?>