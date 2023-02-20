<!DOCTYPE html>
<html>
<head>
	
	<title>Registration</title>
</head>



<body style="background-color:lavender;">
	<form action="imageUpload.php" method="post" enctype="multipart/form-data"> 
    <fieldset>

    <legend>Registration</legend>

    Name: <input type="text" name="name" placeholder= "Enter your name" ><br><br><hr>

    E-Mail: <input type="email" name="email" placeholder = "Eter your email"><br><br><hr>

    Password: <input type="password" name="pass" placeholder="Enter your password"><br><br><hr>

    Your Image: <input type="file"  name="image" id="image" ><br><br><hr>

    <center> 
    	<input style="background-color: seagreen  ;" type="submit" value="Submit"> 
    </center>

    </fieldset>


	</form>

</body>

</html>