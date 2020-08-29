

<?php include "scriptl.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="../css/cuidad.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="wrapper">
		<div class="row">
			<div class="con1">
			<img src="../pic/i.jpg" alt="logo">
		</div>
		<div class="con2">
			<ul>
				<li><a href="Inicio.php">Inicio &nbsp/</a></li>
                <li><a href="Nosotros.php">&nbsp Nosotros &nbsp/</a></li>
                <li><a href="Equipos.php">&nbsp Equipos &nbsp /</a></li>
                <li><a href="http://maj1066.uta.cloud/wordpress/">&nbsp Blog &nbsp/</a></li>
                <li><a href="contacto.php">&nbsp Contacto &nbsp/</a></li>
                <li><a href="iniciodesession.php">&nbsp Inicio de Sesion</a></li>
            </ul>
        </div>
			</div>
        <div class="pageinfo">
        	<br>
        	<h2 class="montserrat">REGISTRATION</h2>
        </div>
        <div id="innerwrapper">
            <h2 class="montserrat">Please fill this form to create an account.</h2>
              <hr>
              <form id="userform" name="c_form" method ="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
              <span id="c2_error" class="error"><?php if (isset($msg1)) {echo '<div id="formmessage"><p>', $msg1, '</p></div>';}?></span>
              <div class="reg">
                <label class="roboto" for="name"><b>Name</b></label><br>
                <input class="roboto"  id="ourname" type="text" placeholder="Enter name" name="ourname"  pattern="[a-zA-Z]+"><br>
                
                <label class="roboto" for="email"><b>Email</b></label><br>
                <input class="roboto"  id="ouremail" type="email" placeholder="Enter email" name="ouremail" ><br>

                <label class="roboto" for="pws"><b>Password</b></label><br>
                <input class="roboto" id="ourpassword" type="password" placeholder="Enter password" name="ourpassword"  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"><br><?php if (isset($err_passlength)) { echo $err_passlength; } ?>

                <label class="roboto"  for="pws-repeat"><b>Repeat Password</b></label><br>
                <input class="roboto"  id="ourpassword_conf" type="password" placeholder="Repeat password" name="ourpassword_conf"  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"><br><?php if (isset($err_mypassconf)) { echo $err_mypassconf; } ?>

                <label class="roboto" for="cntn"><b>Contact No.</b></label><br>
                <input class="roboto" id="ourphone" type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="Enter contact no." name="ourphone"><br>

                <label class="roboto" for="adr"><b>Address</b></label><br>
                <input class="roboto" id="ouradr" type="text"  pattern="[a-zA-Z0-9]+" placeholder="Enter address" name="ouradr" ><br>
                <button type="submit" class="rgtrbtn" name ="action" value="submit" style="background-color:orange;">Register</button><span id="c_error" class="error"></span><br><?php if (isset($msg)) {echo '<div id="formmessage"><p>', $msg, '</p></div>';}?>
              </div>
              </form>
              <hr>
              <p style="text-align:center;">By creating an account you agree to our <a href="#">Terms and Privacy</a>.</p>
              <hr>
              <p style="text-align:center;">Already have a account? <a href="iniciodesession.php">Sign in</a></p>
        </div>
        <div id="bottom">
            <br>
            <br>
            <h2><span class="white">Contactate con</span> <span class="italicOrange">Nosotros</span></h2>
            <input title="email" type="text" name="email" placeholder="Email">
            <button class="button">ENVIAR</button>
        </div>
				<div class="footer">
					<p></p>
					<div class="iconsfoot">
						<div class="icf">
							<i class='far fa-envelope' style='font-size:35px'></i>
							<i class='fab fa-twitter' style='font-size:35px'></i>
							<i class='fab fa-instagram' style='font-size:35px'></i>
						</div>

					</div>
				</div>
	 <div class="footer2">
		 <br>
			<label><span class="color">DiazApps </span><span class="grey">&copy 2020 All Rights Reserved</span></label>
	 </div>
    </div>
    <script src="validatel.js"></script>
</body>
</html>
