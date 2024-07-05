<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/produtos.css"; ?>">

  <section class="introducao-interna interna_produtos">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown">LOCAÇÃO E VENDA DE GERADORES</h1>
      <p data-anime="800" class="fadeInDown"><a href="inicio">HOME</a> > <a href="servicos">NOSSOS SERVIÇOS</a> > LOCAÇÃO E VENDA DE GERADORES</p>
    </div>
  </section>

  <section class="missao_sobre container fadeInDown" data-anime="1200">

    <div class="grid-16">
      <h2 class="subtitulo">SAIBA TUDO SOBRE NOSSO SERVIÇO</h2>
      <p style="margin: -30px auto 50px auto; max-width: 100%; text-align:center">Profissionais altamente treinados e capacitados garantem um serviço de qualidade com total segurança e oferecendo as melhores soluções em tempo hábil.</p>
    </div>
    <div class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/gerador-energia/locacao-e-venda-de-geradores.webp"?>" alt="Geradores"></div>
    <div class="grid-8">
      <h2 class="subtitulo-interno">SOBRE</h2>
      <p>
        Fornecemos os geradores para a locação com a opção de venda ao final do contrato*, com instalação, contratos de manutenção e peças. 
        <br/>*Para planos de locação de 12 a 24 meses, os geradores podem se tornar do locador ao final do contrato, pelo valor residual.
      </p>
      <br />
      <h2 class="subtitulo-interno">OS MELHORES EQUIPAMENTOS DO MERCADO:</h2>
      <p>Modelos de 25 kVa até 750 kVa, monofásicos ou trifásicos, 110, 220, 380 e 440v, abertos ou silenciados, resistentes a corrosão marítima ou não e modelos especiais desenvolvidos de acordo com a necessidade do cliente. <br />
        Opção de monitoramento e controle remoto a distância, das unidades geradoras, através de seu PC ou celular.
      </p>
    </div>

  </section>


  <section class="portfolio">
    <div class="container">
      <h2 class="subtitulo">CONHEÇA NOSSOS SERVIÇOS E EQUIPAMENTOS DISPONÍVEIS</h2>
      <p>
        Todos os nossos serviços e equipamentos, contam com uma equipe completa de profissionais especializados.<br />
        Veja como a AMMUNCK pode apoiar suas empresa ou demanda e proporcionar a você, o sucesso completado de sua demanda.
      </p>
      <ul class="portfolio_lista">
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/gerador-energia/locacao-e-venda-de-geradores.webp"?>" alt="Gerador de energia"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/gerador-energia/locacao-e-venda-de-geradores-2 (1).webp"?>" alt="Gerador de energia"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/gerador-energia/locacao-e-venda-de-geradores-3.webp"?>" alt="Gerador de energia"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/gerador-energia/locacao-e-venda-de-geradores-4.webp"?>" alt="Gerador de energia"></li>
      </ul>
    </div>
    <div class="cta">
      <a href="contato" class="btn">FALE COM UM DE NOSSOS CONSULTORES</a>
    </div>

  </section>

  <section class="quebra2">
    <h2>EXPERIÊNCIA E COMPROMISSO</h2>
    <p>Quando você faz o que gosta, deixa de ser trabalho. Essa frase faz muito sentido para nós, que a cada dia nos comprometemos mais a você e ao sucesso do que você precisa.<br />
      Conte conosco sempre. </p>
  </section>
  <section class="orcamento">
    <div class="container">
      <h2 class="subtitulo">RECEBA UMA COTAÇÃO GRATUITA</h2>
      <p>Tire suas dúvidas, faça suas cotações ou sugestões, nossos consultores estarão disponíveis para você.</p>
      <div class="info grid-8">
        <img src="<?php echo get_template_directory_uri() . "/img/logo.png"?>" alt="Logo">
        <div class="linha"></div>
        <div class="info-conteudo">
          <p>Telefone: (12) 97405-0632</p><br />
          <p>Email: contato@ammunck.com.br</p><br />
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