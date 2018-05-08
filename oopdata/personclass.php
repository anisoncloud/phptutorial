<?php

/**
* 
*/
class PersonClass
{
	private $conn;
	private $host="localhost";
	private $userid="root";
	private $password="";
	private $db="oopdata";
	public $table="personTable";
	public $personName;
	public $personEmail;
	public $personPhone;
	
	function __construct()
	{
		# code...
		$this->conn = @mysql_connect($this->host, $this->userid, $this->password);
		if ($this->conn) {
			# code...
			echo "Connection Success<br/>";
		}else{
			die("Cannot connect to database". mysql_error());
		}

		$selectdb= mysql_select_db($this->db, $this->conn);
		if ($selectdb) {
			# code...
			echo "The database is selected<br/>";
		}else{
			die("Db not selected". mysql_error());
		}
	}


	public function insert($data){

		for($i = 0; $i < count($data); $i++)
            {
                if(is_string($data[$i]))
                    $data[$i] = '"'.$data[$i].'"';
            }
           $data = implode(',',$data);


		$sql = "INSERT INTO persontable (personName, personPhone, personEmail) VALUES ($data)";
		$result = mysql_query($sql);
		if ($result) {
			# code...
			echo "Data inserted sussessfully";
		}else{
			echo "Data insert fail";
		}
	}
	public function getAll(){
		$sql = "SELECT * FROM persontable";
		$result = mysql_query($sql);
		


	}
	public function update(){}
	public function delete(){}



}

//$data = array('Abdur Rahman', '0161681818', 'rahman@gmail.com');

//echo count($data);


/*$person = new PersonClass;
$person->insert($data);*/

//$array = array('lastname', 'email', 'phone');
//$comma_separated = implode(",", $array);

//echo $comma_separated."<br/>"; // lastname,email,phone

//var_dump($comma_separated);

// Empty string when using an empty array:
//var_dump(implode('hello', array())); // string(0) ""


?>