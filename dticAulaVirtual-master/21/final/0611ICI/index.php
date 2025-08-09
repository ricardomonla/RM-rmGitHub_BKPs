<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	
	$dest = URL."21/final/0611ICI/";

	$titu = "Proyecto Final - Ingeniería Civil - UTNLaRioja";
	$desc = "[11Jun 19Hs.] - SISTEMA DE TRANSPORTE POR CABLE - COMPLEJO TELEFÉRICO LA RIOJA";
	
	$genialyID = "60c01d06c19a390d26818224";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = $dest."img.jpg";

	$time = 1800;

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/21/final/0611ICI?01

	echo <<<HTML

	<html>
		<head>
			<title>$titu</title>
			<meta name="description"   content="$desc">
			<meta property="og:title"  content="$titu">
			<meta property="og:image"  content="$imag">
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<center>
				<p>
					<div">
						<div >
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$genialyURL" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

