<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Add Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
//  $dbc = mysqli_connect('localhost', 'root', '', 'webi2012shm')
    $dbc = mysqli_connect('db590866597.db.1and1.com', 'dbo590866597', '#34ahca51', 'db590866597')
    or die('Error connecting to MySQL server.');

  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $street_address = $_POST['street_address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $state_id = $_POST['state_id'];

  $query = "INSERT INTO wk4_email_list (first_name, last_name, email, street_address, city, zip, state_id)  VALUES ('$first_name', '$last_name', '$email', '$street_address', '$city', '$zip', '$state_id')";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

  echo 'Customer added.';

  mysqli_close($dbc);
?>

</body>
</html>
