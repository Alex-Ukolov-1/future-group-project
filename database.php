<?php
class ADD
{
public $name;
public $winner;

public function __construct($name,$age)
 {
 $this->$name=$_POST['play'];
 $this->$winner=$_POST['message'];
 }
}

$servername="localhost";
$username="root";
$password="root";
$dbname="data";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
  die("connection failed:" . $conn->connect-error);
}

$sql="insert into data(имя,комментарий)
values ('$name','$winner')";

if($conn->query($sql)===true)
{
  echo "";
}
else
{
echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
