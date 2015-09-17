<?php
        require_once("common.php");
?>
<!DOCTYPE html>
  <html lang="pt-br">
  
    <head>
    	<meta charset="utf-8">
	<meta http-equiv="refresh" content="300" >
	<meta name="description" content="Sistema de monitoramento de RB's e usuários do Projeto Piraquara Digital." />
	<meta name="author" content="Alexsandro Felix - http://blog.ffelix.eti.br" />
	<title><?php if(isset($title)) { print $title; } else { print "Default Title"; } ?></title>
	<link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    </head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '735732236559050',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pt_BR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>	
	<div id="container">
		<div class="starter-template">
			<header>
				<div id="logo">
					<img src="img/PrefeituraPiraquara.jpg" alt="Prefeitura Municipal de Piraquara" />
				</div>
			</header>
		</div>
