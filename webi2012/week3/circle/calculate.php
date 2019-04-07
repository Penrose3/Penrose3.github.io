<?php 

$radius = $_POST['radius'];

$diameter = 2 * $radius;

$circumference = round(2 * pi() * $radius,3);

//$dbc = mysqli_connect('localhost', 'root', '', 'webi2012shm')
//or die('Error connecting to MySQL server.');
$dbc = mysqli_connect('db590866597.db.1and1.com', 'dbo590866597', '#34ahca51', 'db590866597')
or die('Error connecting to MySQL server.');
  
$query = "call sp_insertcircle('$circumference', '$diameter')";

$result = mysqli_query($dbc, $query)
or die('Error querying database.');

mysqli_close($dbc);
  
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculation</title>
</head>
<body>
    <?php
    echo "<p>Radius: $radius</p>";
    echo "<p>Diameter: $diameter</p>";
    echo "<p>Circumference: $circumference</p>";
    ?>
</body>
</html>