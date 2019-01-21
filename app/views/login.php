<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>
	
	<div class="container">
		<div class="jumbotron text-light text-center col-12 col-md-6 offset-md-3 mb-0 mt-3" id="jumbo-login">
			<h2>Access your WeeGo account</h2>
		</div> <!-- end jumbo -->

		<form class="col-4 offset-4" id="form-login">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
				<span class="validation"></span>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
				<span class="validation"></span>
			</div>

		</form>
			<div class="text-center col-6 offset-3 py-4">
				<a href="./register.php" class="btn btn-secondary">Register</a>
				<button type="button" class="btn btn-primary" id="login">Login</button>
			</div>
	</div> <!-- end container -->

<?php } ?>