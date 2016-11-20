<?php 
  require_once('../model/db.php');

	if (isset($_POST['submit'])) {
	 $area_id = $_POST['area_id'];
     $name = $_POST['name'];
     $price = $_POST['price'];
     $description = $_POST['description'];
	
	 $target_dir = "../images/";
	 $file=$_FILES["picture"]["name"];
     $file_ext = substr($file, strripos($file, '.')); // get file name
	 $newfilename = $name.$file_ext ;
	if (move_uploaded_file($_FILES["picture"]["tmp_name"],  $target_dir.$newfilename)) 
	{
		 $query= "INSERT INTO books
	
	       (bookName, areaID, price, description)
	VALUES 
	       ('$name','$area_id','$price','$description')";
     $db->exec($query);
	echo "Your add has been submited, you will be redirected to homepage in 3 seconds...."; 
	header( "Refresh:3; url=add_book.php", true, 303);
	} 
	} else {echo "Sorry, there was an error uploading your file.";}
?>