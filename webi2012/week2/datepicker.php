<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enter your data</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
	/*
	email reg expression
	/[A-Za-z0-9]\w{2,}@[A-Za-z0-9-]{3,}\.[A-Za-z]{3}/
	*/
        $(function() {
            $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});
        });
       
        function checkme() {
            // = is an assignment operator
            
            var error_string = "";
            var email_regexp = /[A-Za-z0-9]\w{2,}@[A-Za-z0-9-]{3,}\.[A-Za-z]{3}/;
            var email = document.getElementById('email').value;
            var date_regexp = /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
            var the_date = document.getElementById('datepicker').value;
            
            // replace the_form and the_text with your text field options.
            // if statements are conditional logic.
            // == is a comparison operator
            if (document.getElementById('firstname').value == "") {
                error_string += "Please enter your first name.\n";
            }
            // replace the_form and the_select with your select menu options.
            if (window.document.getElementById('lastname').value == "") {
                error_string += "Please enter your last name.\n";
            }
            if (email_regexp.test(email)) {
                
            }
            else {
                error_string += "Your email address is incorrect.\n";
            }
            if (date_regexp.test(the_date)) {
                
            }
            else {
                error_string += "Your date is incorrect.\n";
            }
            
            // Do not add code below this line.
            if (error_string == "") {
                // when a function returns a value, the function equals the value returned
                return true;
            }
            else {
                 error_string = "We found the following errors in your listing: \n" + error_string;
                alert(error_string);
                return false;
            }
        }
	</script>
</head>

<body>
<h3>Enter your data</h3>

<form action="insert.php" method="post" onsubmit="return checkme();">

<label for="firstname">First Name:</label>
<input type="text" id="firstname" name="firstname" size="20" /> <br /><br />
<label for="lastname">Last Name:</label>
<input type="text" id="lastname" name="lastname" size="25" /> <br /><br />
<label for="email">Email:</label>
<input type="text" id="email" name="email" size="25" /> <br /><br />
<label for="datepicker">Date:</label>
<input type="text" id="datepicker" name="the_date" /> <br><br>

<input type="submit" name="submit" value="Submit form" />

</form>
</body>
</html>
