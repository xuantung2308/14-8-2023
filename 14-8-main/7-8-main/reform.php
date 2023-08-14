<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <?php
            require('function.php');
        ?>
    </head>

    <style>
        body{
            height: 100vh;
            text-align: center;
        }

        .re-input{
            width: 100%;			
			padding: 10px 20px;
			display: flex;
			align-items: center;
			text-align: center;
        }

        .re-input input{
            width: 100%;
            border: 0;
            outline: 0;
            padding: 0;
        }

        .re-btn{
            width: 93%;
            background-color: #00bfff;
            border: 1px solid #00bfff;
            border-radius: 25px;
            padding: 5px 10px;
            margin-top: 30px;
            font-size: 22px;
            color: white
        }

        @media only screen and (max-width: 600px){
			form{
				width: 95%;
			}
		}
			
		@media only screen and (min-width: 600px){
			form{
				width: 95%;
			}
		}

    </style>

    <body>
        <form action="register.php" method = "post" >
            <?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>		

            <h2 style="color: pink; font-size: 40px"><b>Đăng Ký</b></h2><br>
            <div class="surround">
                <div class="re-input">
                    <input type="text" name="uname" placeholder="Tên đăng nhập">
                </div>
            </div>

            <div class="surround">
                <div class="re-input">
                    <input type="text" name="email" placeholder="Email">
                </div>
            </div>

            <div class="surround">
                <div class="re-input">
                    <input type="password" name="password" placeholder="Mật khẩu" id="password">
                    <img src="eye-close.png" style="width: 5%; cursor: pointer" id="eyeicon" onclick='showhidden("password","eyeicon")'>
                </div>
            </div>

            <div class="surround">
                <div class="re-input">
                    <input type="password" name="cfpassword" placeholder="Nhập lại mật khẩu" id="repassword">
                    <img src="eye-close.png" style="width: 5%; cursor: pointer" id="reeyeicon" onclick='showhidden("repassword","reeyeicon")'>
                </div>
            </div>

            <div>
                <button class="re-btn">Đăng ký</button>
            </div>
        </form>
    </body>
</html>