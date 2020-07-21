<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
// $q = intval($_GET['q']);

// $con = mysqli_connect('localhost','root','','passwords');
// if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
// }
$sql = "SELECT sitenmae, username, password FROM passwords";
$result = mysqli_query($db,$sql);

echo "string";
if ($result) {
    echo "<table style=";
    echo "width:80%";
    
    echo "><tr><th>Site Name</th><th>User Name</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<tr><td>" . $row["sitename"]. "</td><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td><td>";
        // <!-- echo "<button  onclick=";
        // echo "document.getElementById('id01').style.display='block'";
        // echo  ">Register</button>"; -->
        echo  "</td></tr>";
        
            }
    echo "</table>";
} else {
    echo "0 results";
}

?>

<!-- mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?> -->
</body>
</html>