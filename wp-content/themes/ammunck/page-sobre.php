<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/sobre.css"; ?>">

	<section class="introducao-interna interna_sobre">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">A Empresa</h1>
			<p data-anime="800" class="fadeInDown"><a href="/">HOME</a> > A EMPRESA</p>
		</div>
	</section>

	<section class="missao_sobre container fadeInDown" data-anime="1200">

		<div class="grid-16">
			<h2 class="subtitulo">ANOS DE EXPERIÊNCIA REPLETOS DE SUCESSO</h2>
			<p style="margin: -35px auto 10px auto; max-width: 100%; text-align:center">Nos tornamos referência no que fazemos, entregamos os melhores resultados em todas as necessidades de nossos clientes.</p>
		</div>
		<div class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/empresa/locacao-de-geradores-de-energia-locacao-de-guindaste-articulado-locacao-de-empilhadeiras.webp"?>" width="500px" alt="Sobre a Amtruck">
			<br/></div>
		<div class="grid-8">
			<h2 class="subtitulo-interno">MAIS QUALIDADE E CONFIANÇA</h2>
			<p>A AM Truck Locações é especializada em movimentação de cargas, transportes de equipamentos pesados e remoção industrial, locação de geradores de energia e locação de empilhadeiras. Nossa estrutura está organizada para atender desde operações mais simples até as mais complexas. Empresa constituída em 2008, que opera no mercado de forma profissional e ética, atuando diretamente na logística de cargas pesadas e transportes de alta precisão e através de anos de experiência e qualidade, nos tornamos referência no que fazemos. 


				Em atuação na região do litoral Norte de São Paulo, oferecemos qualidade e atendimento diferenciado a nossos clientes, de modo a compreender exatamente suas necessidades, tirar todas as dúvidas e oferecer a melhor solução. A empresa oferece ainda, soluções personalizadas com opção de investimento em equipamentos especiais, de acordo com a necessidade do cliente. 
				A empresa conta com equipamentos e acessórios com manutenção impecável e também com mão-de-obra especializada. 
				 <br/><br/> <b>*Dispomos de equipamentos menores sob consulta. </b>
				</b>
			</p>
			<br />
			<h2 class="subtitulo-interno">SERVIÇOS REALIZADOS:</h2>
			<p> <b>-</b> Transporte Pesado Mudanças Industriais<br />
				<b>-</b> Carga e descarga<br />
				<b>-</b> Locação de Guindauto<br />
				<b>-</b> Locação de Geradores de Energia<br />
				<b>-</b> Locação de Empilhadeiras<br />
				<b>-</b> Movimentação de Cargas em Locais Confinados</p>
		</div>

	</section>

	<section class="qualidade container">
		<div class="sub">
			<h2 class="subtitulo">NOSSOS PRINCÍPIOS </h2>
			<p style="margin-top:30px;max-width: 100%; text-align:center">Princípios que geram valor para a nossos clientes, equipe e a sociedade.
			</p><br/>
		</div>

		<img src="<?php echo get_template_directory_uri() . "/img/logo.png"?>" alt="Amtruck">
		<ul class="qualidade_lista">
			<li class="grid-1-3">
				<h3>Missão</h3>
				<p>Nossa missão é promover soluções integradas com qualidade e compromisso, além de, oferecer a você e a nossos colaboradores satisfação e qualidade.</p>
			</li>
			<li class="grid-1-3">
				<h3>Visão</h3>
				<p>Tornar-se uma empresa de locação de equipamentos mais eficiente sempre, com soluções ágeis e integradas, além de ter o melhor custo benefício do mercado.</p>
			</li>
			<li class="grid-1-3">
				<h3>Valores</h3>
				<p>Nosso valores são a responsabilidade socioambiental, valorização do ser humano, agilidade, compromisso, ética, lucro proporcional e honestidade.</p>
			</li>
		</ul>
		<div class="call">
			<br /><br />
			<a href="contato" class="btn btn-preto">FALE COM UM DE NOSSOS CONSULTORES</a>
		</div>
	</section>

	<section class="quebra2">
		<h2>EXPERIÊNCIA E COMPROMISSO</h2>
		<p>Quando você faz o que gosta, deixa de ser trabalho. Essa frase faz muito sentido para nós,<br /> que a cada dia nos comprometemos mais a você e ao sucesso do que você precisa.<br />
			Conte conosco sempre. </p>
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

				<div class="grid-8 contato_form formulario">
					<h2>FALE COM A NOSSA CENTRAL DE ATENDIMENTO</h2>
					<p style="margin-bottom: 30px!important">Preencha abaixo com suas informações, nossa equipe responderá sua solicitação em breve.</p>
					<?php echo do_shortcode('[contact-form-7 id="26" title="Formulário de contato 1"]');?>
				</div>

			
	</section>
	
<?php get_footer(); ?>