<?php 

require '../db.php' ;
global $db; 
$action = filter_input(INPUT_POST, 'action');
$action = strtolower($action);
if($action==null) {header('location: ../login.html');}
switch ($action) {
    case 'register':

        include 'login_register.php';
        break;
		
    case 'login':
	   
	    $email= $_POST['email']; 
		$password=$_POST['password']; 
		$password=trim($_POST['password']);
		
		$query = "SELECT * FROM reviewer
		          WHERE emailAddress=:email" ;
		$statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();	
		
		if($result['emailAddress']!== null) { 
	
	      if (password_verify($password, $result['password'])) {
			   include 'login.php'; 
		   } else {header( 'location: ../login.html'); }
		}else {header('location: ../login.html');}
        break;
	 
	case 'get_password':
        $email=$_POST['email']; 
		$query = "SELECT * FROM reviewer
		          WHERE emailAddress=:email" ;
		$statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();		  

		
		$query3 = "SELECT * FROM registrations
		          WHERE emailAddress=:email" ;
		$statement = $db->prepare($query3);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $regi = $statement->fetch();
        $statement->closeCursor();	
		
		
		if($result['emailAddress']=== null & $regi['emailAddress']!==null) {
		
	    $password=''; 
        for($x=1;$x<=6;$x++){ 
        $rnd = rand(0,9); 
        $password.= (string)$rnd; 
          }
		$password=trim($password); 
		$hash= password_hash($password, PASSWORD_DEFAULT);
		$query2="INSERT INTO reviewer 
		         (emailAddress, password)
				VALUES ('$email', '$hash')" ;
		 $db->exec($query2);     
		
	    echo "<p> Your Password is: " .$password ."</p>" ;
          }else { echo 'Your Email is invalid, please  '    ;  } 
	    
		echo "<a href='../login.html'>   Go to login! </a>" ; 
        break;
        
	  default:
        $error = 'Unknown catalog action: ' . $action;
        echo $error;
        break;
}

?>