<?php // CÓDIGO DO CABEÇALHO ?>
<html>
<head>
    <title>Pagina 1</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        
</head>
    <body>
        <header class="topo">
           <div class="display-4"><center> Séries <img alt="Resultado de imagem para icone png claquete" src="https://png.icons8.com/metro/1600/cinema-.png" style="width: 70px; height: 70px;" /></center></div> 
        </header>

        

<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">Página inicial</a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>



  
        
   