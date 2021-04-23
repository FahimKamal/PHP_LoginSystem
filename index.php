<?php 
  include_once 'header.php'; 
 ?>
   		<?php 
   			if (isset($_SESSION["userid"])) {
   				echo "<h1>Welcome to Homepage <br>".$_SESSION["userName"] .".</h1>";
   			}
   			else {
   				echo "<h1>Welcome to Homepage.</h1>";
   			}
   		?> 
        

<?php 
  include_once 'footer.php'; 
 ?>