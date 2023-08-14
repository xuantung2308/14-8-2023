<!DOCTYPE html>
<html>
	<head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
		<?php
			require('function.php');
		?>
	</head>

	<style>
		body{
			align-items: center;
			height: 100vh;
		}

		.index-input{
			width: 100%;			
			padding: 10px 20px;
			display: flex;
			align-items: center;
			text-align: center;
		}
		 
		.index-input input{
			width: 100%;
			border: 0;
			outline: 0;
			padding: 0;
		}

		.i-btn{
			padding: 5px 10px;
			margin: 10px;
			background-color: pink;
			border: 1px solid pink;
			border-radius: 15px;
			font-size: 22px;
			width: 93%;
			color: white;
		}

		.r-btn{
			padding: 5px 10px;
			margin: 10px;
			background-color: #00bfff;
			border: 1px solid #00bfff;
			border-radius: 15px;
			font-size: 22px;
			width: 93%;
			color: white;
		}

		button{
			width: 100%;
			padding: 10px 20px;
		}

		@media only screen and (max-width: 600px){
			form{
				width: 95%;
			}
		}
			
		@media only screen and (min-width: 600px){
			form{
				width: 95%;
				height: 100vh;
			}
		}
			
	</style>

		<body>
			<form action="login.php" method="post" style="text-align: center;">
				<h2 style="color: pink; float: left;" ><b>Đăng nhập</h2></b><br><br>
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>		
				
				<div class="surround">
					<div class="index-input">
						<input type="text" placeholder="Tên đăng nhập" name="uname">
					</div>
				</div>
				<div class="surround">
					<div class="index-input">
						<input type="password" placeholder="Mật khẩu" id="password" name="password">
						<img src="eye-close.png" style="width: 5%; cursor: pointer" id="eyeicon" onclick='showhidden("password","eyeicon")'>
					</div>
				</div>

				<div>
					<button type="submit" class="i-btn"> Đăng nhập</button>
				</div>

				<div style="margin-top: 10px;">
					<a href="forget.php" style="text-decoration: none; font-size: 18px; color: #00bfff">Quên mật khẩu</a>
				</div>
				<div>
					<hr width="93%" size="1px" color="black">
				</div>
				<div >
					<a href="reform.php"><button type="button" class="r-btn">Đăng ký</button></a>
				</div>
				
			</form>
		</body>
</html>
