<?php
	
	//Select dos Ultimos 100 anos!

	echo "<select>";

	for ($i=date("Y"); $i > date("Y")-200 ; $i--) { 
		
		echo '<option value="'.$i.'">'.$i.'</option>';
	}

	echo "</select>";

 ?>