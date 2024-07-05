<!DOCTYPE html>
<html lang="pt-br">
	
   
	<?php wp_head(); ?>

	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/normalize.css"; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/reset.css"; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/grid.css"; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/style.css"; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/responsivo.css"; ?>">

	<script>document.documentElement.classList.add("js");</script>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="container">
			<a href="index.html" class="grid-4">
				<img src="https://amtruck.com.br/wp-content/uploads/2020/11/amtruck-preto.png" alt="Ammunck">
			</a>
			<nav class="grid-12 header_menu">
				<ul>
					<li><a href="inicio">Início</a></li>
					<li><a href="sobre">A Empresa</a></li>
					<li><a href="servicos">Nossos Serviços</a></li>			
					<li><a href="contato">Fale Conosco</a></li>
				</ul>
			</nav>
		</div>
	</header>

