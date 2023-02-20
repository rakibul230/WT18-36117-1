<?php


//for storing image

$target_dir ="image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
{
	echo "The file" . basename($_FILES["image"]["name"]) . "has been uploaded";
}

else
 {
 	echo "sorry, there is a problem.";
 }






//for printing name

 if(isset($_POST['name'] ))
 {
    
 $Name=$_POST['name'];
 $myfile = fopen('inputs.txt', 'a');
 fwrite($myfile, $Name, );
 fclose($myfile);

}





//for printing email

if(isset($_POST['email'] ))
 {

 $Email=$_POST['email'];
 $myfile = fopen('inputs.txt', 'a');
 fwrite($myfile, $Email, );
 fclose($myfile);

}




//for printing password

if(isset($_POST['pass'] ))
 {

 $password=$_POST['pass'];
 $myfile = fopen('inputs.txt', 'a');
 fwrite($myfile, $password, );
 fclose($myfile);

}



?>