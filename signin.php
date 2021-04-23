<?php 
  include_once 'header.php'; 
 ?>
    
    	<h2>Sign In</h2>
        <form action="includes/verify.php" method="post">
		  <div class="mb-3">
		    <label for="id_number" class="form-label">ID Number/Email</label>
		    <input type="text" name="ID" class="form-control" id="id_number" aria-describedby="emailHelp">
		    <div id="emailHelp" class="form-text">Put your student ID number here or email address.</div>
		  </div>		  
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" name="pwd" class="form-control" id="passwordInput">
		    <div id="passwordHelpBlock" class="form-text">
			  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
			</div>
		  </div>		  
		  <button type="submit" class="btn btn-primary">Sign In</button>
		</form>

<?php 
  include_once 'footer.php'; 
 ?>