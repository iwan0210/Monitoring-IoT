<?php
	session_start();	
	if(isset($_SESSION['user'])) {
		header('Location: dashboard.php');
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body {
				margin: 0;
				padding: 0;
				background: #e6e6e6;
				font-family: verdana, sans-serif;
				color: #ccc;
			}
			* {
				box-sizing: border-box;
			}
			.login-container {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			.login-container:before {
				content: "";
				position: absolute;
				left: 50%;
				transform: translateX(-50%);
				top: -8px;
				display: inline-block;
				height: 50%;
				width: 98%;
				background: rgba(255, 255, 255, 0.5);
				z-index: -1;
				border-radius: 10px;
			}
			.login-container .login-box {
				padding: 20px 50px;
				background: #fff;
				border-radius: 10px;
				width: 400px;
				box-shadow: 2px 4px 4px #dcdcdc, -2px 4px 4px #dcdcdc;
			}
			.login-container .login-box .header {
				height: 50px;
				line-height: 50px;
				position: relative;
				color: #333;
			}
			.login-container .login-box .header:before {
				content: "";
				position: absolute;
				left: -50px;
				top: 0;
				display: inline-block;
				height: 100%;
				width: 8px;
				background: #333;
			}
			.login-container .login-box .content {
				padding: 10px;
			}
			.login-container .login-box .content .input-box {
				margin-top: 20px;
				margin-bottom: 20px;
				text-align: center;
				display: inline-block;
				width: 100%;
				position: relative;
			}
			.login-container .login-box .content .input-box input {
				width: 100%;
				border: none;
				border-bottom: 2px solid #333;
				height: 40px;
				line-height: 40px;
				font-size: 0.9em;
				outline: none;
				background: transparent;
			}
				.login-container .login-box .content .input-box input:focus + span:first-of-type, .login-container .login-box .content .input-box input:not(:placeholder-shown) + span:first-of-type {
				font-size: .8em;
				top: -10px;
			}
				.login-container .login-box .content .input-box input:focus ~ span:last-of-type, .login-container .login-box .content .input-box input:not(:placeholder-shown) ~ span:last-of-type {
				width: 100%;
			}
			.login-container .login-box .content .input-box span:first-of-type {
				color: #ccc;
				position: absolute;
				top: 10px;
				left: 0;
				text-align-last: left;
				pointer-events: none;
				transition: all .1s linear;
			}
			.login-container .login-box .content .input-box span:last-of-type {
				position: absolute;
				left: 0;
				bottom: 0;
				height: 1px;
				width: 0px;
				background: #1f6b98;
				transition: all .2s linear;
			}
			.login-container .login-box .content .input-box button {
				width: 70%;
				background: transparent;
				border: 2px solid #333;
				padding: 15px;
				color: #333;
				cursor: pointer;
				font-weight: bold;
				border-radius: 10px;
			}
			.login-container .login-box .content .input-box a {
				display: inline-block;
				text-decoration: none;
				color: #ccc;
				font-size: 0.9em;
				padding-top: 20px;
			}
		</style>
	</head>
	<body>
		<div class="login-container">
			<div class="login-box">
				<div class="header">
					<h3>LOGIN</h3>
				</div>
					<div class="content">
						<form method="POST" id="login_form">
							<div class="input-box"><input id="user" name="user" type="text" placeholder="Username" required /></div>
							<div class="input-box"><input id="pass" name="pass" type="password" placeholder="Password" required /></div>
							<div class="input-box"><button id="button" type="submit" form="login_form">SIGN IN</button>
							</div>
						</form>
					</div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	<script>
		$(document).ready(() => {
			$('#login_form').submit((e) => {
				e.preventDefault()
				$('#button').html('<i class="fa fa-circle-o-notch fa-spin"></i>')
				$('#button').attr('disabled', true)
				
				const username = $('#user').val().trim()
				const password = $('#pass').val().trim()
				
				if (!username || !password) {
					$('#button').html("SIGN IN")
					$('#button').removeAttr('disabled')
					return alert("Harus diisi semua")
				}

				const data = {
					"user": username,
					"pass": password
				}
				
				$.ajax({
					url: 'function.php?action=login',
					type: 'post',
					data: data,
                    dataType:'json',
					success: (data) => {
						$('#button').html("SIGN IN")
						$('#button').removeAttr('disabled')
						console.log(data)
						if (data.status === 'fail') {
							return alert(data.message)
						}
						location.href = 'dashboard.php';
					}
				})
			})
		})
	</script>
</html>