<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Remove Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
//  $dbc = mysqli_connect('localhost', 'root', '', 'webi2012shm')
$dbc = mysqli_connect('db590866597.db.1and1.com', 'dbo590866597', '#34ahca51', 'db590866597')
    or die('Error connecting to MySQL server.');

  $email = $_POST['email'];

  $query = "DELETE FROM wk4_email_list WHERE email = '$email'";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

  echo 'Customer removed: ' . $email;

  mysqli_close($dbc);
?>

</body>
</html>
