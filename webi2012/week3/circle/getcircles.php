<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //  $dbc = mysqli_connect('database url', 'username', 'pw', 'database')
        $dbc = mysqli_connect('db590866597.db.1and1.com', 'dbo590866597', '#34ahca51', 'db590866597')
        or die('Error connecting to MySQL server.');
        
        $query = "call sp_getcircles()";
        
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        
        while ($row = mysqli_fetch_array($result)) {
            $circumference = $row['circumference'];
            $area = $row['area'];
            
            echo "<div>$circumference $area</div>";
        }
        
        mysqli_close($dbc);
        
        ?>
    </body>
</html>
