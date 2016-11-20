<?php 
require 'secure_connection.php';
?>
<style>
main {
	   width: 450px;
	   height: 250px;
	   background-color:rgb(232,236,237); 
	   margin-left: 27em;	
       margin-top: 6em;
	   border:1px solid #000;
}
 
main p {text-align:center;
        margin-top:7em; }

</style>

<main>
<form method="post" action="login_index.php">
<p><label>Email: </label> <input type="email" name="email" required/>
<input type="submit" name="action" value="get_password">
</p>

</form>

</main>