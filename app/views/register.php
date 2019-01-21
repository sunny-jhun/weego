<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	global $conn;  ?>

	<div class="container">
		<div class="jumbotron text-light text-center mt-2" id="jumbo-reg">
			<h2>Have your account with us.</h2>
		</div> <!-- end jumbo -->

		<form>
			<div class="row justify-content-right">
				<div class="col-sm-3">
					<div class="form-group">
						<label for="firstname">First Name:</label>
						<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter Your First Name Here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter Your Last Name Here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email Here">
						<span class="validation"></span>
					</div>

					<div class="form-group mb-5">
						<label for="address">Address:</label>
						<input type="text" id="address" class="form-control" name="address" placeholder="Enter Your Address">
						<span class="validation"></span>
					</div>
				</div> <!-- end left side -->

				<div class="col-sm-3">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" id="username" class="form-control" name="username" placeholder="Enter Your Username Here">
						<span class="validation"></span>
					</div>					

					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
						<span class="validation"></span>
					</div>					

					<div class="form-group">
						<label for="confirm_password">Confirm Password:</label>
						<input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Enter Password">
						<span class="validation"></span>
					</div>	
				</div> <!-- end right side -->
				<div class="col-sm-6">
					<div>
						<img src="../assets/images/register.jpeg" id="img-reg">
						
					</div>
					
				</div> <!-- end of background div -->
			</div> <!-- end row -->
		</form> <!-- end form -->
		
		<div class="py-4 mb-5" id="reg-btn">
			<a href="./login.php" class="btn btn-secondary"> Login </a>
			<button id="add_user" type="button" class="btn btn-primary">Register</button>
		</div>


	</div> <!-- end container -->



<?php } ?>