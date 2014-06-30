<?php echo doctype('html5'); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Airsofteams | Los mejores equipos, grupos, escuadrones de airsoft</title>
	<meta name="description" value="Ranking, puntuaciones de equipos, grupos y escuadras de airsoft.  Valoraciones realizadas por los propios jugadores con partidas reales.">
	<meta name="keywords" value=""/>
	
		<?php  
			echo meta(array(
 				array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
				array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'),
				array('name' => 'Cache-Control', 'content' => 'no-cache','type' => 'equiv'),
				array('name' => 'Pragma', 'content' => 'no-cache','type' => 'equiv'),
			));
			echo link_tag('favicon.ico', 'shortcut icon', 'static/img/favicon.ico');
			echo link_tag('static/css/my.css');	
		?>

		
	<script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<!--script src="//code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript" ></script-->
	
	<script src="<?php echo base_url("static/js/jquery.ui.map.full.min.js")?>" type="text/javascript"></script>
	</head>
<body class="<?php echo $pagina; ?>">
<?php  echo Modules::run('login/index/index'); ?>
<div id="page">
	<header><?php include ('inc/header.php')?></header>
	<section id="content"><?php include('inc/' . $pagina . '.php') ?></section>
	<footer>&copy; 2014 Airsofteams;</footer>
</div>

</body>
</html>