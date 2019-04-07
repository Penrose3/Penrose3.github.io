<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $the_date = $_POST['the_date'];
        
        // $dbc = mysqli_connect('database url','username','password','database name');
        $dbc = mysqli_connect('localhost','root','','webi2012shm') or die('MySQL connect error');
        // $dbc = mysqli_connect('','','','') or die('MySQL connect error');
        
        $query = "insert into wk2demo (firstname, lastname, email, the_date) values ('$first_name', '$last_name', '$email', '$the_date')";
        
        $result = mysqli_query($dbc,$query) or die('MySQL query error');
        
        mysqli_close($dbc);
        
        echo 'Thanks for submitting the form.<br>';
        echo 'Your email is ' . $email;
        ?>
    </body>
</html>
