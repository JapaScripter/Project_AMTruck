<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/produtos.css"; ?>">

  <section class="introducao-interna interna_produtos">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown">LOCAÇÃO DE EMPILHADEIRAS</h1>
      <p data-anime="800" class="fadeInDown"><a href="inicio">HOME</a> > <a href="servicos">NOSSOS SERVIÇOS</a> > LOCAÇÃO DE EMPILHADEIRAS</p>
    </div>
  </section>

  <section class="missao_sobre container fadeInDown" data-anime="1200">

    <div class="grid-16">
      <h2 class="subtitulo">SAIBA TUDO SOBRE NOSSO SERVIÇO</h2>
      <p style="margin: -30px auto 50px auto; max-width: 100%; text-align:center">Profissionais altamente treinados e capacitados garantem um serviço de qualidade com total segurança e oferecendo as melhores soluções em tempo hábil.</p>
    </div>
    <div class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/empilhadeiras/locacao-de-empilhadeira-1.webp"?>" alt="Empilhadeiras"></div>
    <div class="grid-8">
      <h2 class="subtitulo-interno">SOBRE</h2>
        <p>Disponibilizamos as melhores empilhadeiras para locação, com equipamentos de alta qualidade que oferecem a você, movimentação de cargas com total confiança e segurança em suas demandas.
          <br/>Equipamentos de até 4 toneladas e outras opções sob consulta.</p>
        
      <br />
      <h2 class="subtitulo-interno">VEJA MAIS ALGUMAS INFORMAÇÕES PARA FAZER A ESCOLHA MAIS ADEQUADA: </h2>
      <p>
        Todos as empilhadeiras da AM Truck contam com manutenção especializada, além de diversos procedimentos de inspeção e controle de qualidade, todos os profissionais envolvidos no serviço são altamente treinados e especializados para garantir a total qualidade do serviço.
      </p>
    </div>

  </section>


  <section class="portfolio">
    <div class="container">
      <h2 class="subtitulo">CONHEÇA NOSSOS SERVIÇOS E EQUIPAMENTOS DISPONÍVEIS</h2>
      <p>
        Todos os nossos serviços e equipamentos, contam com uma equipe completa de profissionais especializados.<br />
        Veja como a AM Truck pode apoiar suas empresa ou demanda e proporcionar a você, o sucesso completado de sua demanda.
      </p>
      <ul class="portfolio_lista">
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/empilhadeiras/locacao-de-empilhadeira-1.webp"?>" alt="Empilhadeiras"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/empilhadeiras/locacao-de-empilhadeira-2.webp"?>" alt="Empilhadeiras"></li>        
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/empilhadeiras/locacao-de-empilhadeira-3.webp"?>" alt="Empilhadeiras"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/empilhadeiras/locacao-de-empilhadeira-4.webp"?>" alt="Empilhadeiras"></li>      </ul>
    </div>
    <div class="cta">
      <a href="contato.html" class="btn">FALE COM UM DE NOSSOS CONSULTORES</a>
    </div>

  </section>

  <section class="quebra2">
    <h2>EXPERIÊNCIA E COMPROMISSO</h2>
    <p>Quando você faz o que gosta, deixa de ser trabalho. Essa frase faz muito sentido para nós, que a cada dia nos comprometemos mais a você e ao sucesso do que você precisa.<br />
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
            CEP: Cep 11606-106 - Brasil</p>
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