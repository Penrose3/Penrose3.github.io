<?php

// Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  
  // Grab the profile data from the database
  if (!isset($_GET['user_id'])) {
    $query = "SELECT user_id FROM wk8mismatch_user WHERE user_id = '" . $_SESSION['user_id'] . "'";
  }
  else {
    $query = "SELECT user_id FROM wk8mismatch_user WHERE user_id = '" . $_GET['user_id'] . "'";
  }
  $data = mysqli_query($dbc, $query);
  $row = mysqli_fetch_array($data);

  // Generate the navigation menu
  echo '<hr />';
  if (isset($_SESSION['username'])) {
    echo '<a href="index.php">Home</a> &#10084; ';
    echo '<a href="viewprofile.php">View Profile</a> &#10084; ';
    echo '<a href="editprofile.php?user_id=' . $row['user_id'] . '">Edit Profile</a> &#10084; ';
    echo '<a href="logout.php">Log Out (' . $_SESSION['username'] . ')</a>';
  }
  else {
    echo '<a href="login.php">Log In</a> &#10084; ';
    echo '<a href="signup.php">Sign Up</a>';
  }
  echo '<hr />';
?>
