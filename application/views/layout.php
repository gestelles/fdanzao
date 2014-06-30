<?php echo doctype('html5'); ?>
<html lang="<?php echo $this->config->item('language_abbr'); ?>">
<head>
	<title>Airsoft Rank</title>
	<?php  
	echo meta(array(
		array('charset' => 'utf-8'),
		array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
		array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'),
		array('name' => 'Cache-Control', 'content' => 'no-cache','type' => 'equiv'),
		array('name' => 'Pragma', 'content' => 'no-cache','type' => 'equiv'),
		array('name' => 'description', 'value' => 'La primera comunidad para jugadores de airsoft. The first comunity for airsoft players'),
		array('name' => 'keywords', 'value' => 'airsoft, community, airsoft player, jugador airsoft, equipos airsoft, airsoft teams, airsoft battle, war, airsoft game'),
	));
	?>

	<link href="//fonts.googleapis.com/css?family=Iceland|Aldrich|Kaushan+Script" rel="stylesheet" type="text/css"/>
	<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<?php
		echo link_tag('static/img/favicon.ico', 'shortcut icon', 'static/img/favicon.ico');
		echo link_tag('static/css/my.css?v0.0');
	?>	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<!--script type="text/javascript" src="<?php echo static_url('js/modernizr.custom.91887.js'); ?>"></script-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-48226502-1', 'airsoftrank.com');
	  ga('send', 'pageview');
	</script>

	
</head>
<body>
	<header><?php if (isset($header)) include ('inc/'.$header.'.php'); else include ('inc/header.php'); ?></header>
	<div id="page" class="<?php echo str_replace('/','-', $pagina); ?> clearfix"><?php include('inc/' . $pagina . '.php') ?></div>
	<footer><?php include ('inc/footer.php')?></footer>
</body>
</html>