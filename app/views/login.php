<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>

	<div class="container">
		<div class="jumbotron bg-dark text-light text-center mt-5">
			<h4>Login</h4>
		</div>

		<form>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
				<span class="validation"></span>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
				<span class="validation"></span>
			</div>
		</form>
			<div class="text-center py-4">
				<a href="./register.php" class="btn btn-secondary">Register</a>
				<button type="button" class="btn btn-primary" id="login">Login</button>
			</div>
	</div>


<?php } ?>