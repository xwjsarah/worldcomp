<?php 
require 'db.php' ;
 
    $fname= filter_input(INPUT_POST, 'Firstname');
    $lname= filter_input(INPUT_POST, 'Lastname');
	$email= filter_input(INPUT_POST, 'email');
	$title= filter_input(INPUT_POST, 'title');
	$area= filter_input(INPUT_POST, 'area');
	$subarea=filter_input(INPUT_POST, 'subarea');
   
    $target_dir = "upload/";
    $file = $_FILES["userfile"]["name"];
	$file_ext = substr($file, strripos($file, '.')); // get file name
	$newfilename = $title.$file_ext ;
   if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_dir.$newfilename)) {
        echo "The file has been uploaded.";
   
    $query= "INSERT INTO papers
	
	       (FirstName, LastName, emailAddress, title, area, subarea, filename)
	VALUES 
	       ('$fname','$lname','$email','$title','$area','$subarea','$newfilename')";
     $db->exec($query);

    echo "Your add has been submited, you will be redirected to your account page in 3 seconds...."; 
	header( "Refresh:3; url=submit.html", true, 303);
   
    } 
        else {
        echo "Sorry, there was an error uploading your file.";
		echo "<h1> Please submit again! </h1>";
		echo "<a href='submit.html'> Go ahead! </a>"; 
    }

   

	




?>
