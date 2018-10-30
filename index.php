<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery.js"></script>
<?php
    echo "<title>NOIREGYAAAAAAAA</title>";
	$log_file_name = 'mylog.log'; // Change to the log file name
	$myfile = fopen("testfile.txt", "w");
	//var_dump($_POST);// incoming message
	//file_put_contents($log_file_name, $variable, FILE_APPEND);
	//<!--
            // get user details
        $user_agent = $_SERVER['HTTP_USER_AGENT']; //user browser
        $ip_address = $_SERVER["REMOTE_ADDR"];     // user ip adderss
        $page_name = $_SERVER["SCRIPT_NAME"];      // page the user looking
        $query_string = $_SERVER["QUERY_STRING"];   // what query he used
        $current_page = $page_name."?".$query_string; 

		// get time
        date_default_timezone_set('Europe/Paris');
        $date = date("Y-m-d");
        $time = date("H:i:s");
         //-->	
		$string = '==== New connection at '.$time.' on the '.$date."\r\n".$user_agent."\r\n".$ip_address."\r\n".$page_name."\r\n".$query_string."\r\n";
		file_put_contents($log_file_name, $string, FILE_APPEND);
?>
	  <form id= "form1" action = "<?php $_PHP_SELF ?>" method = "POST">
         <input id="varinput" type = "hidden" name = "variable" value= "unset"/>
</form>
	  <script>	
	  $variable = "Agent: ";
	  document.getElementById('varinput').value = $variable;
	  </script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-color:#212137;
    min-height: 100%;
	min-width: 100%;
    background-position: center;
    background-size: cover;
	display: flex;
	align-items: center;
	justify-content: center;
}
.modal-img{
	max-width: 100%;
	max-height: 500px;
	margin-left: auto;
    margin-right: auto;
	display: block;
}
</style>
</head>
<body>

<div class="bgimg w3-display-container w3-text-white">
<img class="modal-img" src="img/weblogo.png"/>
  <div class="w3-display-middle w3-jumbo">
    <!-- <p>LOGO</p> -->
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('mages').style.display='block'" class="w3-button w3-black">MAGES.</button></p>
    <p><button onclick="document.getElementById('adventure').style.display='block'" class="w3-button w3-black">HDN Adventure</button></p>    
	<p><button onclick="document.getElementById('community').style.display='block'" class="w3-button w3-black">Community</button></p> 
	<p><button onclick="document.getElementById('anime_session').style.display='block'" class="w3-button w3-black">Anime session</button></p>
  </div>
  
  <div class="w3-display-bottomleft w3-container">
	<p class="w3-xlarge">Contact me</p>
    <p class="w3-large">On discord: Noiregya#1111</p>
    <p class="w3-large">By email: noiregya@gmail.com</p>
  </div>
</div>

<div id="mages" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('mages').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>MAGES. bot</h1>
    </div>
    <div class="w3-container">
      <h5>MAGES. is a neptunia character, but also an awesome discord bot! It will offer a self assigning role system and a console war feature!</h5>
    </div>
    <div class="w3-container w3-black">
      <h1>MAGES. website</h1>
    </div>
    <div class="w3-container">
      <h5>Find the official website by clicking on her face.</h5>
	  <a href="http://mages-bot.alwaysdata.net/"><img class="modal-img" src="img/magesbanner.jpg" alt="MAGES."></a>
    </div>
	<div class="w3-container w3-black">
      <h1>MAGES. in action</h1>
    </div>
    <div class="w3-container">
      <h5>MAGES. is being beta tested on Ultradimension Neptunia, join it to see it in action!</h5>
	  <a href="https://discord.gg/ak8fXzW"><img class="modal-img" src="img/UDNLogo.png" alt="UDNLogo"></a>
    </div>
  </div>
</div>

<div id="adventure" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('adventure').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Hyperdimension Neptunia Adventure</h1>
    </div>
    <div class="w3-container">
      <h5>Hyperdimension Neptunia Adventure is a <b>text-based adventure game</b> in multiplayer that you can play directly on Discord!</h5>
    </div>
    <div class="w3-container w3-black">
      <h1>How to play</h1>
    </div>
    <div class="w3-container">
      <h5>The game wasn't released yet, did you travel through time and dimensions?</h5>
    </div>
  </div>
</div>

<div id="community" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('community').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Hyperdimension neptunia on discord.</h1>
    </div>
    <div class="w3-container">
      <h5>This server is a great community that will fulfill all your nep needs!</h5>
      <h5>Join the server by clicking the banner.</h5>
	  <a href="https://discord.gg/bqAErqu"><img class="modal-img" src="img/HDN_Logo_smol.png" alt="HDN_Banner"></a>
	  <a href="img/HDN_Logo.png">I made this, click here for full size</a>
    </div>
  </div>
</div>

<div id="anime_session" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('anime_session').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Join us to watch anime together</h1>
    </div>
    <div class="w3-container">
      <h5>Hyperdimension neptunia episode 1-4 soon:</h5>
<iframe src="http://free.timeanddate.com/countdown/i6hasf7a/n195/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcfff/tcfff/fs100/szw320/szh135/tatTime%20left%20to%20Event%20in/tac000/tptTime%20since%20Event%20started%20in/tpc000/mac000/mpc000/iso2018-10-30T20:30:00" allowTransparency="true" frameborder="0" width="181" height="69"></iframe>
<br><h5>EP 5-8 Coming soon.</h5>

	  <a href="http://rabbit.gya.neptunia.chat/">Join session!</a>
    </div>
  </div>
</div>

<!-- Rei I love you!
			-Noiregya-->

</body>
</html>

