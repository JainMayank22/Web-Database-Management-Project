<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>PROFILE</title>
  <link rel="stylesheet" type="text/css" href="../cuidad.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
        <li><a href="Blog.php">&nbsp Blog &nbsp/</a></li>
        <li><a href="contacto.php">&nbsp Contacto &nbsp/</a></li>
        <li><a class="color" href="userPanel.php">&nbsp Profile &nbsp/</a></li>
        <li style="float:right"><a href = "logout.php">&nbsp Log Out</a></li>
      </ul>
    </div>
  </div>
    <div class="pageinfo">
      <br>
      <h2>USER PROFILE</h2>
      <h6>INICIO > PROFILE</h6>
    </div>
    <div id="innerwrapper">
    	<div id="usercen">
        <h2>Register Events</h2>
		</div>
		<div id="lowerbar1">
		<ul>
			<li><a href="userViewEvents.php">View Events</a></li>
			<li><a href="userRegisterEvents.php">Register Events </a></li>
		</ul>
	</div>
    </div>
    <div id="bottom1">
      <br>
      <h2><span class="white">Escríbenos, te invitamos a brindar lo mejor de ti para el bien común,</span> <span class="italicOrange">queremos conocer acerca de tus ideas para mejorar.</span></h2>
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
</body>
</html>
