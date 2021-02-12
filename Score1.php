<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$con=mysqli_connect($servername,$username,$password,$dbname);
if (!$con)
{echo"server not connected";}
//else
//{
//echo"server is connected";
//}
if(!mysqli_select_db($con,$dbname))
{
echo"database not connected";
}

$query="SELECT score FROM student ";
$result=mysqli_query($con,$query);

?>

<html>
<head>
</head>
<body>
<?php
// <h1>ALL ROLL NOs</h1>
echo "<h1>ALL SCORES ARE --></h1>";
while($row=mysqli_fetch_assoc($result))
{
  echo $row['score'];
  echo "<br>";
}

?>
</body>
</html>
