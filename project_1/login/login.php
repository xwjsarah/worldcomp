<?php 
require 'secure_connection.php';
require '../db.php' ;
global $db; 

$area =  filter_input(INPUT_GET, 'area');

 if ($area==null) {
            $area=1;
    } 
 
    $query = "SELECT * FROM papers JOIN bookareas ON papers.area= bookareas.areaID 
	          WHERE area=$area";
	      		  
    $papers = $db->query($query);
    
    $query2 = "SELECT * FROM bookareas 
              WHERE areaID = $area";
    $area = $db->query($query2);
    $area = $area->fetch();
    $area_name = $area['areaName'];
			  
	
    
?>

<main>
<h1>Papers for reviewer</h1>
<body>
  
 <aside>
    
        <h2>Areas</h2>
        <nav>
        <ul>
	    <li><a href="login.php?area=2">Parallel processing</a></li>
		<li><a href="login.php?area=1" >Artificial Intelligent</a></li>
		<li><a href="login.php?area=3" >Cloud computing</a></li>
	    <li><a href="login.php?area=5" >Human Computer Interface</a></li>
		<li><a href="login.php?area=4" >Computer Visualization</a></li>
        </ul>
        </nav>          
    </aside>

	<section>
       
        <h2><?php echo $area_name; ?></h2>
          <table border="1">
		  <tr><th>Subarea</th><th>FileName</th></tr>
		  
            <?php foreach ($papers as $paper) : ?>
			
             <tr>
			 <td><?php echo $paper['subarea']; ?></td>
			 <td><a href="../upload/<?php echo $paper['filename']; ?>"><?php echo $paper['filename']; ?></a></td>
			 
			 </tr>
            <?php endforeach; ?>
           </table>
       
    </section>
	
<p><a href="http://localhost/book_apps/project_1/login.html">Logout</a></p>
</body>
</main>