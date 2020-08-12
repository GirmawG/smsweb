<?php
require_once 'DBConfigration.php';

class Follow extends DBConfigration
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getData($query)
	{
		$result = $this->connection->query($query);

		if ($result == false) {
			return false;
		}

		$rows = array();

		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}

		return $rows;
	}
	public function login($email, $password)
	{	
		$stmt = $this->connection->prepare("SELECT * FROM smsadminuser WHERE email = ? and password=?");
		$stmt->bind_param("ss", $email, $password);
		$stmt->execute();
		$result = $stmt->get_result();
		$count = $result->fetch_all(MYSQLI_ASSOC);

		$stmt->close();
		
		return $count;
	}

	public function execute($query)
	{
		$result = $this->connection->query($query);

		if ($result == false) {
			return false;
		} else {
			return true;
		}
	}


	public function row_no($query)
	{
		$result = $this->connection->query($query);
		if(!$result==null){
		$num_rows = mysqli_num_rows($result);
		
		return $num_rows;
	}else{
		return 0;
	}
		

	}


	public function delete($id, $table)
	{
		session_start();
		$user_id=$_SESSION['ind'];
		
		$query = "DELETE FROM $table WHERE id = '$id'";

		$result = $this->connection->query($query);

		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}

	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
	public function checkemail($email)
	{
		$stmt = $this->connection->prepare("SELECT * FROM smsadminuser WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$count = $result->fetch_all(MYSQLI_ASSOC);

		$stmt->close();
		return $count;
	}

	public function checkusername($email)
	{
		$stmt = $this->connection->prepare("SELECT * FROM smsadminuser WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$count = $result->fetch_all(MYSQLI_ASSOC);

		$stmt->close();
		return $count;
	}


	public function username_exists($username)
	{
		$result = $this->connection->query("SELECT * FROM auth where username='$username'");
		if (mysqli_num_rows($result) != 0) {
			return true;
		} else {
			return false;
		}
	}

} ?>
