<?php 

$radius = $_POST['radius'];

$diameter = 2 * $radius;

$circumference = round(2 * pi() * $radius,3);

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