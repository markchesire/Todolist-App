<?php
/*Database class*/
class DatabaseClass{
	//Database attributes
	private $servername;
	private $username;
	private $password;
	private $databasename;
	//Database connection method
	public function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->databasename = "todolist";
		//instantiating db class
		$conn = new mysqli($this->servername,$this->username,$this->password,$this->databasename);
		//check db connection
		if ($conn === false){
  			echo "Failed to connect to MySQL: " . $database_connection->connect_error;
		}
		return $conn;
	}

	public function getlist(){
		$result = "SELECT * FROM duties";
		$result = mysqli_query($this->connect(),$result);
	    return $result;
	}

	public function insertlist(){
		if(isset($_POST["submit"])){
		$id = $_POST["id"];
		$duty_desc = $_POST["duty_desc"];
		$event_day = $_POST["event_day"];
		$event_time = $_POST["event_time"];
		$sql = "INSERT INTO duties (id,duty_desc,event_day,event_time) VALUES ('$id', '$duty_desc','$event_day','$event_time')";
		if($result = $this->connect()->query($sql)){ 
        echo "Data inserted successfully.";
		}else{echo"Error encounterd";}	
	   }
    }

    public function editlist(){
		if(isset($_POST["submit"])){
		$id =$_REQUEST["id"];
		$duty_desc =$_REQUEST["duty_desc"];
		$event_day = $_REQUEST["event_day"];
		$event_time =$_REQUEST["event_time"];	
		$sqledit = "update duties set id='".$id."',duty_desc='".$duty_desc."',event_day='".$event_day."',event_time='".$event_time."'
		WHERE id='".$id."' ";
		if($result = $this->connect()->query($sqledit)){ 
        echo"Data edited successfully.";
        //header("Location:https:index.php");
		}else{echo"Error encounterd";}	
	   }
    }

    public function delete(){
	    if(isset($_POST["submit"])){
		$id =$_REQUEST["id"];
		$sql = "DELETE FROM duties WHERE id='".$id."'";
		$result= mysqli_query($this->connect(),$sql);
		if($result = $this->connect()->query($sql))
			{ 
				echo"data deleted successfully";
			}else
				{
					echo"error encounterd";
				}
	    }

	}

	public function search(){
		if(isset($_POST["submit"])){
	    $query = $_POST['search'];
        $sqlquery = "SELECT * FROM duties WHERE id LIKE '%$query%' OR duty_desc LIKE '%$query%' OR event_day LIKE '%$query%' OR event_time LIKE '%$query%'";
        $result= mysqli_query($this->connect(),$sqlquery);
        return $result;
    	}  	
    }
}