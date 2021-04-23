<?php 
  include_once 'header.php'; 
 ?>
    
    	<h2>Sign Up</h2>
        <form action="includes/registration.php" method="post">
		  <div class="mb-3">
		    <label for="id_number" class="form-label">ID Number</label>
		    <input type="text" name="ID" class="form-control" id="id_number" aria-describedby="emailHelp">
		    <div id="emailHelp" class="form-text">Put your student ID number here.</div>
		  </div>
		  <div class="mb-3">
		    <label for="name" class="form-label">Full Name</label>
		    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
		    <div id="emailHelp" class="form-text">Write your full name here.</div>
		  </div>
		  <div class="mb-3">
		    <label for="emailInput" class="form-label">Email address</label>
		    <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" name="pwd" class="form-control" id="passwordInput">
		    <div id="passwordHelpBlock" class="form-text">
			  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
			</div>
		  </div>
		  <div class="mb-3">
		    <label for="ConfirmPasswordInput" class="form-label">Confirm Password</label>
		    <input type="password" name="pwdrepeat" class="form-control" id="ConfirmPasswordInput">
		    <div id="passwordHelpBlock" class="form-text">
			  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
			</div>
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
		</form>

<?php 
  include_once 'footer.php'; 
 ?>