<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Airsofteams | Los mejores equipos, grupos, escuadrones de airsoft</title>
	<meta name="description" value="Ranking, puntuaciones de equipos, grupos y escuadras de airsoft.  Valoraciones realizadas por los propios jugadores con partidas reales.">
	<meta name="keywords" value=""/>
	
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript" ></script>
	<script src="/static/js/jquery.ui.map.full.min.js" type="text/javascript"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<style>
		body, html { height: 100%; width: 100%;}
		header {position:absolute;width:100%;}
		section#content { width: 100%; height: 100%; }		
	</style>
</head>
<body>

<div id="page">
	<header>
		<nav>
			<ul>
				<li><a href="#">Mapa</a></li>
				<li><a href="#">Equipos</a></li>
				<li><a href="#">Ranquing</a></li>
			</ul>
		</nav>
		<div>
			<form name="search_frm" method="post">
				<input type="text" name="query">
			</form>
		<div>
		<div>
			<form name="login_frm" method="post">
				<input type="text" name="login">
				<input type="password" name="login">
				<input type="submit">
			</form>
		</div>
	</header>
	<section id="content">
		<div id="map_canvas" style="height:100%;width:100px;margin:0 auto;"></div>
	</section>
	<footer>
		&copy; 2014 Airsofteams;
	</footer>
</div>
	


</body>
</html>