<?php
if(isset($_GET['functionName']))
{
	$functionName = $_GET['functionName'];
	if($functionName == "update") 
	{
	$getFunc = new Rating();
	echo $getFunc->update($_GET['productid'], $_GET['rating']);
	} 
}



class Rating {
// Database credentials
private $host     = 'localhost';
private $username = 'root';
private $password = '';
private $database = 'Drapp';
public  $db;

public function __construct(){
if(!isset($this->db)){
	// Connect to the database    
	try {
	$this->db = new mysqli($this->host, $this->username, $this->password, $this->database);
	}catch (Exception $e){
	$error = $e->getMessage();
	echo $error;
	}
}
}
public function select()
{
$select = "SELECT * FROM `rating` ";
$result = mysqli_query($this->db ,$select);
return mysqli_fetch_all($result);
}

public function update($id, $rating) 
{
$update = "UPDATE `rating` SET rating = '$rating' WHERE id = '$id' ";
$result = mysqli_query($this->db ,$update);
if($result) { 
	return 'Data Updated Successfully';
}
} 
}
?>
