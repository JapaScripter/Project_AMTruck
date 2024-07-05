<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/contato.css"; ?>">

	<section class="introducao-interna interna_contato">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">Fale Conosco</h1>
			<p data-anime="800" class="fadeInDown"><a href="/">HOME</a> > FALE CONOSCO</p>
		</div>
	</section>

	<section class="orcamento">
		<div class="container">
			<h2 class="subtitulo">FALE COM A NOSSA CENTRAL DE ATENDIMENTO</h2>
			<p>Fale conosco agora mesmo e receba suas cotações em breve de nossa equipe de consultores.</p>
			<div class="info grid-8">
				<img src="<?php echo get_template_directory_uri() . "/img/logo.png"?>" alt="Logo">
				<div class="linha"></div>
				<div class="info-conteudo">
					<p>Telefone: (12) 97405-0632</p><br />
					<p>Email: contato@amtruck.com.br</p><br />
					<p>Rua Valentim Francisco de Matos, 128<br />
						Ponto da Cruz - São Sebastião/SP,<br />
						CEP: 11606-106 - Brasil</p>
				</div>
			</div>
			<form id="form_orcamento" method="POST" action="./enviar.php" class="form contato_form grid-8 formphp">
				<h2 class="subtitulo">FALE COM A NOSSA CENTRAL DE ATENDIMENTO</h2>
				<p>Fale conosco agora mesmo e receba suas cotações em breve de nossa equipe de consultores.</p>
				<input type="text" id="nome" name="nome" placeholder="Nome" required>
				<input type="email" id="email" name="email" placeholder="Email" required>
				<input type="text" id="telefone" placeholder="Telefone" name="telefone">
				<select name="modalidade" id="modadelidade">
					<option value="locacao_caminhao_ammunck">Locação de Guindaste Articulado</option>
					<option value="venda_locacao_empilhadeiras">Locação de Empilhadeiras</option>
					<option value="venda_locacao_geradores">Locação e Venda de Geradores</option>
				</select>
				<textarea id="mensagem" name="mensagem" required placeholder="Fale sobre a sua necessidade"></textarea>
				<button id="enviar" name="enviar" type="submit" class="btn btn-branco">Enviar</button>
			</form>
	</section>

	<?php get_footer(); ?>

</html>