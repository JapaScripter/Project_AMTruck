<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/produtos.css"; ?>">


  <section class="introducao-interna interna_produtos">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown">LOCAÇÃO DE GUINDASTE ARTICULADO</h1>
      <p data-anime="800" class="fadeInDown"><a href="inicio">HOME</a> > <a href="servicos">NOSSOS SERVIÇOS</a> > LOCAÇÃO DE GUINDASTE ARTICULADO</p>
    </div>
  </section>

  <section class="missao_sobre container fadeInDown" data-anime="1200">

    <div class="grid-16">
      <h2 class="subtitulo">SAIBA TUDO SOBRE NOSSO SERVIÇO</h2>
      <p style="margin: -30px auto 50px auto; max-width: 100%; text-align:center">Profissionais altamente treinados e capacitados garantem um serviço de qualidade com total segurança e oferecendo as melhores soluções em tempo hábil.</p>
    </div>
    <div class="grid-8">
      <img src="<?php echo get_template_directory_uri() . "/img/caminhao-munck/locacao-de-guindaste-articulado.webp"?>" alt="Caminhao Ammunck"><br>
      <img src="<?php echo get_template_directory_uri() . "/img/caminhao-munck/rtaruga-dianteira-tartaruga-traseira.webp"?>" alt="Caminhao Ammunck">
    </div>
    <div class="grid-8">
      <h2 class="subtitulo-interno">SOBRE</h2>
      <p>A AM Truck conta com equipamentos de grande capacidade, prontos para suprir as necessidades de logística, gerando economia de tempo e dinheiro. Nós trabalhamos com Guindastes Articulas com manutenção impecável, e todas as linhas de acessórios para atender você com alta qualidade.
      </p>
      <br />
      <h2 class="subtitulo-interno">ACESSÓRIOS</h2>
      <p>
        <b>-</b> Cesto aéreo;
        <br/><b>-</b> Balancim para içamento de carga;
        <br/><b>-</b> Aterramento para serviços em torres elétricas;
        <br/><b>-</b> Garra para levantamento de chapas;
        <br/><b>-</b> Garra para levantamento de tambores;
        <br/><b>-</b> Garfo paleteiro;
        <br/><b>-</b> Caçamba para içamento de concreto em lages;
        <br/><b>-</b> Perfuratriz de solo com brocas diâmetro de 300mm e 600mm com profundidade até 4 mts;
        <br/><b>-</b> Transpaleteira hidráulica;
        <br/><b>-</b> Tartaruga Dianteira e Traseira com capacidade de até 4 toneladas para movimentação de cargas em locais confinados;       
        </p>
    </div>

  </section>


  <section class="portfolio">
    <div class="container">
      <h2 class="subtitulo">CONHEÇA NOSSOS SERVIÇOS E EQUIPAMENTOS DISPONÍVEIS</h2>
      <p>Todos os nossos serviços e equipamentos, contam com uma equipe completa de profissionais especializados.<br />
        Veja como a AMTRUCK pode apoiar suas empresa ou demanda e proporcionar a você, o sucesso completado de sua demanda.
      </p>
      <ul class="portfolio_lista">
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/caminhao-munck/locacao-de-guindaste-articulado.webp"?>" alt="Caminhão Ammunck"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/caminhao-munck/servico-dia-a-dia-locacao-caminhao-munck-2.jpg"?>" alt="Caminhão Ammunck"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/caminhao-munck/locacao-de-guindaste-articulado-2.webp"?>" alt="Caminhão Ammunck"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri() . "/img/caminhao-munck/servico-dia-a-dia-locacao-caminhao-munck-4.jpg"?>" alt="Caminhão Ammunck"></li>
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