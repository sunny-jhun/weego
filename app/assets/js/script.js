$(document).ready( () => {

	function validate_registration_form(){
		let errors =0;
		let username = $("#username").val();
		let password = $("#password").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();

		//username should be greater >= 10 chars

		if(username.length < 10){
			$("#username").next().html("Username is atleast 10 characters");
			$("#username").next().css('color','red');
			errors++;
		}else{
			$('#username').next().html('');
		}

		//password should be atleast 8 characters
		if(password.length < 8){
			$("#password").next().html("Please provide a stronger password");
			$("#password").next().css('color','red');
		}else{
			$('#password').next().html("Password is secured");
			$("#password").next().css('color','green');
		}

		//email
		if (!email.includes("@")) {
			$("#email").next().html("Please provide a valid email");
			$("#email").next().css('color','red');
		}else{
			$('#email').next().html('');
		}

		//address

		if (!address !="") {
			$("#address").next().html("Please provide address");
			$("#address").next().css('color','red');
		}else{
			$('#address').next().html('');
		}

		//firstname
		if (!firstname !="") {
			$("#firstname").next().html("Please provide firstname");
			$("#firstname").next().css('color','red');
		}else{
			$('#firstname').next().html('');
		}

		//lastname
		if (!lastname !="") {
			$("#lastname").next().html("Please provide lastname");
			$("#lastname").next().css('color','red');
		}else{
			$('#lastname').next().html('');
		}

		//confirm password

		if(password !== $("#confirm_password").val()){
			$("#confirm_password").next().html("Password Should match");
			$("#confirm_password").next().css('color','red');
			error++;
		}else{
			$("#confirm_password").next().html(" ");
		}

		if (errors > 0) {
			return false; //this means there are errors
		}else{
			return true;
		}


	}









	$("#add_user").click( (e) => {
		if (validate_registration_form()) {
		let username = $("#username").val();
		let password = $("#password").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();

		$.ajax({
			"url" : '../controllers/create_user.php',
			"method" : "POST",
			"data" : {
				'username' :username,
				'password' :password,
				'firstname' :firstname,
				'lastname' :lastname,
				'email' :email,
				'address' :address
			},
			"success":(data) => {

				if (data== "user_exists") {
					$("#username").next().html("Username already exists");
					$("#username").next().css('color','red');
				}else{
				alert("user created successfully");
				//redirect broswer
				window.location.replace("../../index.php")
				}
			}
		});
	  }
	});

	//login and session
	$("#login").click( (e) => {
		let username = $("#username").val();
		let password = $("#password").val();

		$.ajax({
			"url" : "../controllers/authenticate.php",
			"method" : "POST",
			"data": {
				'username':username,
				'password':password
			},
			"success":(data) => {
				if(data == "login_failed") {
					$("#username").next().html("Please provide correct credentials");
				} else {
					window.location.replace("../views/home.php");
				}
			}
		});

	});
	// prep for add to cart
	
	$(document).on('click', '.add-to-cart', (e) => {
		//to prevent default behavior and to override it with our own
		e.preventDefault();
		//prevent parent elements to be triggered
		e.stopPropagation();

		// target is the one who triggered event
		let item_id = $(e.target).attr("data-id");
		let item_quantity = parseInt($(e.target).prev().val());

		$.ajax({
			"url" : "../controllers/update_cart.php",
			"method" : "POST",
			"data" : {
				'item_id':item_id,
				'item_quantity':item_quantity
			},
			"success" : (data) => {
				$("#cart-count").html(data);
			}
		});


	});





});