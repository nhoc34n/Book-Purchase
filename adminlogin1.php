<!DOCTYPE html>
<html>
<head>
	<title>Transparent Login Form</title>
	
	<style>
		body {
			background: url('images/01.jpg')
		}

		form {
		display: flex;
		flex-direction: column;
		height: 500px;
		width: 400px;
		
		align-items: center;
		margin: auto;
		margin top: 50px;
		background-color: rgba(0,0,0,0.5);
        box-shadow: inset -5px -5px rgba(0,0,0,0.5);
        border-radius: 25px;
		}
		
		form h2{
			margin-top: 70px;
			color : white;
			
		}

		input[type="text"], input[type="password"] {
			
			padding: 12px;
			margin: 20px;
			width: 65%;
			
			border-radius: 20px;
			border: none;
			background-color: rgba(0,0,0,0.5);
            box-shadow: inset -3px -3px rgba(0,0,0,0.5);
            color: white;
			
		}

		input[type="submit"] {
			background-color: rgba(0,0,0,0.5);
			box-shadow: inset -3px -3px rgba(0,0,0,0.5);
			color: white;
			padding: 10px 20px;
			margin-top:60px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-bottom: 30px;
			transition: background-color 0.1s;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>

	<form action="login1.php" method="post">
	
		<h2>Login</h2>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" value="Login">
		
		<a href "index1.php">Back</a>
	</form>
</body>
</html>
