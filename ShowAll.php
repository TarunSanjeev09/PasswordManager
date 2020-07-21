<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
  table {
  width: 80%;
  border-collapse: collapse;
  align-items: center;
  padding-left: 20px;
}

table, td, th {
  border: 2px solid black;
  padding: 5px;
}

th {text-align: center;}
</style>
</head>
<body>

<?php
// $q = intval($_GET['q']);

// $con = mysqli_connect('localhost','root','','passwords');
// if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
// }
$sql = "SELECT sitename, username, password FROM passwords";
$result = mysqli_query($db,$sql);

// echo "<h4 href= 'http://localhost/workindia/addpasswords.php'>Want to add more passwords?</h4>"; 
// echo "<button onclick='http://localhost/workindia/addpasswords.php'>Click Here</button>";
// <a href="addpasswords.php">click here!</a>
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
      
        
            }
    echo "</table>";
} else {
    echo "0 results";
}

?>


</body>
</html>
