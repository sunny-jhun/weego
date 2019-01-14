<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	global $conn;  ?>



	<!-- <div class="container" id="reg">
		<div class="jumbotron bg-dark text-light text-center mt-5">
			<h4>Register</h4>
		</div>  -->
	<form id="form-reg">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="firstname">First Name:</label>
						<input style="width: 70%;" type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter your first name here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input style="width: 70%;" type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter Your Last Name Here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input style="width: 70%;" type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email Here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="address">Address:</label>
						<input style="width: 70%;" type="text" id="address" class="form-control" name="address" placeholder="Enter Your Address Here">
						<span class="validation"></span>
					</div>
				</div> <!-- end left side -->

				<div class="col-sm-6">
					<div class="form-group">
						<label for="username">Username:</label>
						<input style="width: 70%;" type="text" id="username" class="form-control" name="username" placeholder="Enter Username Here">
						<span class="validation"></span>
					</div>					

					<div class="form-group">
						<label for="password">Password:</label>
						<input style="width: 70%;" type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
						<span class="validation"></span>
					</div>					

					<div class="form-group">
						<label for="confirm_password">Confirm Password:</label>
						<input style="width: 70%;" type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Enter Password">
						<span class="validation"></span>
					</div>	
					<div class="text-center py-4 mb-5">
						<a href="./login.php" class="btn btn-secondary"> Login </a>
						<button id="add_user" type="button" class="btn btn-success">Register</button>
					</div>

				</div> <!-- end right side -->
			</div> <!-- end row -->
		</form> <!-- end form -->


	</div> <!-- end container -->



<?php } ?>