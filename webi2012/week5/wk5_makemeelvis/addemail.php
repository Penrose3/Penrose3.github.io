<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<title>Week 5</title>
</head>

<body>

<img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
<img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
<p>Enter your information to be added to the <strong>Make Me Elvis</strong> mailing list.</p>    
    
<?php 
$show_form = True;

if (isset($_POST['submit_data'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $street_address = $_POST['street_address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $state_id = $_POST['state_id'];
    
    if(empty($first_name) || empty($last_name) || empty($email) || empty($street_address) || empty($city) || empty($zip) || empty($state_id))
    {
        echo 'Please fill out the form';
    }
    else
    {
    $dbc = mysqli_connect('db590866597.db.1and1.com', 'dbo590866597', '#34ahca51', 'db590866597')
    or die('Error connecting to MySQL server.');

    $query = "INSERT INTO wk5_email_list (first_name, last_name, email, street_address, city, zip, state_id)  VALUES ('$first_name', '$last_name', '$email', '$street_address', '$city', '$zip', '$state_id')";
    
    mysqli_query($dbc, $query)
    or die('Error querying database.');
    
    echo 'Customer added.';

    mysqli_close($dbc);
    
    $show_form = False;
    }
    
    
}

?>

<?php 
if ($show_form)
{
?>    
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
First Name:
<input type="text" name="firstname" id="firstname" value="<?php if(isset($first_name)) {echo $first_name;} ?>" /><br>
Last Name:
<input type="text" name="lastname" id="lastname" value="<?php if(isset($last_name)) {echo $last_name;} ?>" /><br>
Email:
<input type="text" name="email" id="email" value="<?php if(isset($email)) {echo $email;} ?>" /><br>
Street Address:
<input type="text" id="street_address" name="street_address" value="<?php if(isset($street_address)) {echo $street_address;} ?>" /><br />
City:
<input type="text" id="city" name="city" value="<?php if(isset($city)) {echo $city;} ?>" /><br />
ZIP Code:
<input type="text" id="zip" name="zip" value="<?php if(isset($zip)) {echo $zip;} ?>" /><br />
State:
<select name="state_id" id="state_id"><br>
<?php
$current_state_id = $state_id;

$dbc = mysqli_connect('db590866597.db.1and1.com', 'dbo590866597', '#34ahca51', 'db590866597')
or die('Error connecting to MySQL server.');

$query = "SELECT * FROM states order by state";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');

while ($row = mysqli_fetch_array($result)){
    $state_id = $row['state_id'];
    $state = $row['state'];
    
    if ($current_state_id === $state_id)
        {
            echo "<option value='$state_id' selected>$state</option>";
        }
    else
        {
            echo "<option value='$state_id'>$state</option>";
        }
}

mysqli_close($dbc);

?>
</select>
<br>
<input type="submit" name="submit_data" id="submit_data" />
</form>
    
<?php 
}
else
{
    echo 'Thanks for submitting the form.';
}
?>

</body>
</html>
