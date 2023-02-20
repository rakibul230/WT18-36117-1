<!DOCTYPE html>
<html>
<head>
	
	<title>registration</title>
</head>
<body>
<form> 

<fieldset>

	<legend><h1>Registration</h1></legend><br><br>

	<label for ="name">Name:</label>
	<input type ="text" name="name" placeholder="Enter your name"><br> <hr> <br>

    <label for ="email">Email:</label>
	<input type ="text" name="email" placeholder="Enter your email"><br><hr><br>

	<label for ="u_name">User Name:</label>
	<input type ="text" name="uname" placeholder="Enter your user name"><br><hr><br>

	<label for ="password">Password:</label>
	<input type ="password" name="password" placeholder="Enter your password"><br><hr><br>

	<label for ="c_password">Confirm Password:</label>
	<input type ="password" name="cpassword" placeholder="Enter your password again"><br><hr><br>


	
	<fieldset>

	<legend><h3>Gender</h3></legend><br>
    <input type="radio" name="male">
    <label for= male>Male</label>

    <input type="radio" name="female">
    <label for= female>Female</label>

    <input type="radio" name="other">
    <label for= other>Other</label>
    
   

	</fieldset><hr>

	<fieldset> 
		<legend><h3>Date of Birth</h3></legend>
<input type="text"> / <input type="text"> / <input type="text"> (dd/mm/yyyy)


	</fieldset><hr> 
	<button>Submit</button>
	<button>Reset</button>
</fieldset>

</form>




</body>
</html>