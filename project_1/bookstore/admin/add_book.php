<?php 

require_once('../model/db.php');
  
    $query = 'SELECT * FROM bookareas
              ORDER BY areaID';
     $areas = $db->query($query);

?>

<head>
    <title>Add Book</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">
        <div id="header">
            <h1>Books Management Application</h1>
        </div>

        <div id="main">
            <h1>Add Book</h1>
            <form action="add_book_index.php" method="post"
                 enctype="multipart/form-data">
                <table>
               <tr><td><label>Areas:</label></td>
                <td><select name="area_id">
                <?php foreach ($areas as $area) : ?>
                    <option value="<?php echo $area['areaID']; ?>">
                        <?php echo $area['areaName']; ?>
                    </option>
                <?php endforeach; ?>
                </select></td>
				</tr>
				
				<tr>
                 <td> <label>Name:</label></td>
                <td><input type="text" name="name" /></td>
                </tr>
  
                <tr>
                <td><label>List Price:</label></td>
                <td><input type="text" name="price" /></td>
				</tr>
				
				<tr>
                <td><label>Descriptions:</label></td>
                <td> <textarea rows="10" cols="100"  name="description"/></textarea></td>
				</tr>
				
				<tr>
                <td><label>Photo Upload:</label></td>
                <td><input type="file" name="picture" /></td>
				</tr>
				
                </table>

               
                <input type="submit" name="submit" value="Add Book" />
                <br />
            </form>
            <p><a href="admin_home.php">Home</a></p>
        </div><!-- end main -->

   
   

    </div><!-- end page -->
</body>