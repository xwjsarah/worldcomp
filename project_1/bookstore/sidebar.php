<aside>
    <h2>Navigation</h2>
    <ul>
	    <li>
		<a href="../index.html">Back to COMP</a>
		</li>
        <li>
            <a href=".">Home</a>
        </li>
		<li>
		    <a href="cart_index.php">Cart</a>
		</li>
		<li>
		    <a href="admin/admin_home.php">Book Manager</a>
		</li>
    </ul>
        
    <h2>Areas</h2>
    <ul>
     
        <?php
            require_once('model/db.php');
            require_once('model/area_db.php');
            $areas = get_areas();
            foreach($areas as $area) :
                $name = $area['areaName'];
                $id = $area['areaID'];
              
        ?>
        <li>
            <a href="action_index.php?area_id=<?php echo
                           $id; ?>">
               <?php echo htmlspecialchars($name); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    
</aside>
