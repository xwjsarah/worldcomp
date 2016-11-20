<?php 
require 'db.php' ;

$now=date('m-d-Y'); 

$fname= filter_input(INPUT_POST, 'Firstname');
$lname= filter_input(INPUT_POST, 'Lastname');
$company= filter_input(INPUT_POST, 'company');
$title= filter_input(INPUT_POST, 'title');
$address=filter_input(INPUT_POST, 'address');
$city= filter_input(INPUT_POST, 'city');
$state =filter_input(INPUT_POST, 'state');
$zip= filter_input(INPUT_POST, 'zip');
$phone=filter_input(INPUT_POST, 'phone');
$email=filter_input(INPUT_POST, 'email');
$occupation=filter_input(INPUT_POST, 'occupation');
$Cardtype= filter_input(INPUT_POST, 'Cardtype');
$cardnumber= filter_input(INPUT_POST, 'cardnumber');
$expirationdate= filter_input(INPUT_POST, 'expirationdate');
$billingadd= filter_input(INPUT_POST, 'billingadd');

if($expirationdate<$now) { echo 'Your card has expired.'; }

else {
	$confirmation=''; 
    for($x=1;$x<=10;$x++){ 
        $rnd = rand(0,9); 
        $confirmation.= (string)$rnd; 
    }
	
    $query = "INSERT INTO registrations
                 (FirstName, LastName, Company, Title, Address, City, State, ZipCode, Phone, emailAddress, Occupation, cardType, cardNumber, cardExpires, BillAddress, confirmation)
              VALUES
                 ('$fname', '$lname', '$company', '$title', '$address', '$city', '$state', '$zip', $phone, '$email', '$occupation', '$Cardtype', '$cardnumber', '$expirationdate', '$billingadd', '$confirmation' )";
    $db->exec($query);
	
	echo "<div id=main>" ;
    echo "<h1> Thank you for your registration ! </h1>";
    echo "<h2> Your confirmation number is:" . $confirmation . "<h2>";
    echo "<a href='index.html'> Go Home! </a>";
    echo "</div>"; 
	include 'footer.php';
     }
?>



