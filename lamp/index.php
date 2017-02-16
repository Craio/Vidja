<?php
/*settings*/
if (isset($_POST['Kill'])){exec('sudo pkill python');}
if (isset($_POST['Wipe'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/Wipe.py');}

if (isset($_POST['DayWhite'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/DayWhite.py');}
if (isset($_POST['DayRed'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/DayRed.py');}
if (isset($_POST['DayGreen'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/DayGreen.py');}
if (isset($_POST['DayBlue'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/DayBlue.py');}
if (isset($_POST['DayNatural'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/DayNatural.py');}

if (isset($_POST['NightWhite'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/NightWhite.py');}
if (isset($_POST['NightRed'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/NightRed.py');}
if (isset($_POST['NightGreen'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/NightGreen.py');}
if (isset($_POST['NightBlue'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/NightBlue.py');}
if (isset($_POST['NightNatural'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/NightNatural.py');}

if (isset($_POST['Rainbow'])){exec('sudo pkill python ; sudo python /var/www/html/lamp/assets/scripts/Rainbow.py');}
?>

<!doctype html>
<html>
	<head>
		<title>Lamp</title>
		<!--<meta http-equiv="refresh" content="3" >-->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="apple-touch-startup-image" href="/lamp/assets/icons/apple-icon-114x114.png">
		<meta name="apple-mobile-web-app-title" content="Lamp">


		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<link rel="stylesheet" href="assets/style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400" rel="stylesheet">

		<!--icons-->
		<link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
		<link rel="manifest" href="assets/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

	</head>
	<body>
    <form method="post">
        <div id="body-block">
            <div id="links">
              <table>
								<td>
                	<tr class="section">
										<p class="link-cats">Settings</p>
                  	<button class="button" name="Kill">Kill Python</button>
                  	<button class="button" name="Wipe">Turn Off</button>
									</tr>
								<td>

								<td>
									<tr>
										<p class="link-cats">Daytime</p>
	                  <button class="button" name="DayWhite">White</button>
										<button class="button" name="DayRed">Red</button>
										<button class="button" name="DayGreen">Green</button>
										<button class="button" name="DayBlue">Blue</button>
										<button class="button" name="DayNatural">Natural</button>
									</tr>
								</td>

								<td>
									<tr>
										<p class="link-cats">Night-time</p>
										<button class="button" name="NightWhite">White</button>
										<button class="button" name="NightRed">Red</button>
										<button class="button" name="NightGreen">Green</button>
										<button class="button" name="NightBlue">Blue</button>
										<button class="button" name="NightNatural">Natural</button>
									</tr>
								</td>

								<td>
									<tr>
										<p class="link-cats">Party</p>
										<button class="button" name="Rainbow">Rainbow</button>
										<button class="button" name="White">White</button>
										<button class="button" name="White">White</button>
										<button class="button" name="White">White</button>
										<button class="button" name="White">White</button>
									</tr>
								</td>
              </table>
							<center><a class="link"href="index.php"><img src="/lamp/assets/icons/apple-icon-114x114.png"><a></center>
            </div>
        </div>
  	</form>
	</body>
</html>
