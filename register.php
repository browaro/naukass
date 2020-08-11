<!DOCTYPE html>
<html lang="en"><head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="registrationform.php" method="POST"> First name:

        <input type="text" name="first_name"> <br> Last name:

        <input type="text" name="last_name"> 

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">
        
    </form>
    
    
    <?php 
    
       if(isset($_POST['submit'])) 
   {
       echo("First name: " . $_GET['external_id'] . "<br />\\n");
       echo("First name: " . $_POST['username'] . "<br />\\n");
       echo("First name: " . $_POST['email'] . "<br />\\n");
       echo("First name: " . $_POST['first_name'] . "<br />\\n");
       echo("First name: " . $_POST['last_name'] . "<br />\\n");
       echo("First name: " . $_POST['password'] . "<br />\\n");
       echo("First name: " . $_POST['root_admin'] . "<br />\\n");
       echo("First name: " . $_POST['language'] . "<br />\\n");
    }
    
    

    ?>
    
