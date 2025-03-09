<?php
  // Definir variável para indicar que estamos em uma página de projeto
  $isProjectPage = true;

  // Definir o título da página
  $pageTitle = 'Sala em Reforma - JNA Reformas & Soluções';

  // Incluir o arquivo de cabeçalho
  include '../header.php';
?>

<!-- Carrega o CSS específico para posts -->
<link rel="stylesheet" href="/jnasite/css/post-styles.css">

<!-- ========================= CONTEÚDO PRINCIPAL ========================= -->
<main>
  <!-- Seção Hero específica do post -->
  <section class="post-hero">
    <div class="container">
      <h1>Sala em Reforma</h1>
      <p>
        Descubra como atualizar sua sala de estar para torná-la moderna, funcional e acolhedora 
        com dicas de planejamento, execução e design.
      </p>
    </div>
  </section>

  <!-- Seção do Slider (Slide de Imagens) -->
  <section class="post-gallery">
    <div class="container">
      <div class="slideshow-container">
        <!-- Slide 1 -->
        <div class="slide fade">
          <img 
            src="../img/salaemreforma-slide1.png" 
            alt="Slide 1 da Sala em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/salaemreforma-slide2.png" 
            alt="Slide 2 da Sala em Reforma"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/salaemreforma-slide3.png" 
            alt="Slide 3 da Sala em Reforma"
          >
        </div>
        <!-- Botões de navegação do slideshow -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>
  </section>

  <!-- Seção do Post -->
  <section class="post-content">
    <!-- Tags ou categorias -->
    <div class="post-tags">
      <a href="../index.php#projects" class="post-tag" data-filter="residenciais">Residencial</a>
      <a href="../index.php#projects" class="post-tag">Sala de Estar</a>
      <a href="../index.php#projects" class="post-tag">Reforma Completa</a>
    </div>

    <!-- Imagem principal do post -->
    <img src="../img/salaemreforma.png" alt="Sala em Reforma" class="post-image">

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Projeto de renovação completa de sala de estar residencial
    </p>

    <!-- Introdução -->
    <h2>Introdução</h2>
    <p>
      A sala de estar é o coração da residência – o local onde familiares se reúnem e amigos se encontram.
      Uma reforma bem planejada pode não apenas atualizar o visual, mas também aumentar a funcionalidade
      e o conforto deste ambiente essencial.
    </p>

    <!-- Planejamento e Preparação -->
    <h2>Planejamento e Preparação</h2>
    <p>
      Todo projeto de reforma começa com um planejamento detalhado. É importante definir os objetivos da
      reforma e estabelecer um orçamento realista, levando em conta custos com mão de obra, materiais
      e imprevistos. Considere:
    </p>
    <ul>
      <li><strong>Definição de Estilo:</strong> Escolha entre moderno, contemporâneo, rústico ou industrial, de acordo com sua personalidade e a arquitetura da casa.</li>
      <li><strong>Orçamento:</strong> Estabeleça um valor que contemple todas as etapas da obra e reserve uma margem para imprevistos.</li>
      <li><strong>Consultoria Profissional:</strong> Se possível, contrate um designer de interiores ou arquiteto para auxiliar na criação do projeto.</li>
    </ul>

    <!-- Execução da Reforma -->
    <h2>Execução da Reforma</h2>
    <p>
      Com o planejamento definido, inicia-se a execução. Durante essa fase, é fundamental:
    </p>
    <ul>
      <li><strong>Selecionar Materiais de Qualidade:</strong> Invista em pisos, revestimentos e tintas que garantam durabilidade e conforto.</li>
      <li><strong>Contratar Profissionais Especializados:</strong> Uma equipe qualificada faz toda a diferença na qualidade final da obra.</li>
      <li><strong>Gerenciar o Cronograma:</strong> Acompanhe cada etapa da reforma para evitar atrasos e garantir que o projeto seja concluído no prazo.</li>
    </ul>

    <!-- Dicas de Design e Decoração -->
    <h2>Dicas de Design e Decoração</h2>
    <p>
      Para transformar sua sala em um ambiente inspirador, siga estas dicas de design:
    </p>
    <ul>
      <li><strong>Iluminação:</strong> Combine luz natural com pontos de luz indireta para criar um ambiente acolhedor.</li>
      <li><strong>Mobiliário Funcional:</strong> Escolha móveis que equilibrem conforto e praticidade, sem sobrecarregar o espaço.</li>
      <li><strong>Cores e Acessórios:</strong> Utilize uma paleta de cores neutras com toques de cor em acessórios, como almofadas e quadros.</li>
      <li><strong>Organização:</strong> Aposte em soluções de armazenamento que mantenham o ambiente limpo e organizado.</li>
    </ul>

    <!-- Depoimentos e Inspirações -->
    <h2>Depoimentos e Inspirações</h2>
    <p>
      Confira o depoimento de clientes que passaram por uma transformação similar:
    </p>
    <blockquote>
      "A reforma da nossa sala superou todas as expectativas. O ambiente ficou mais funcional e a decoração,
      incrivelmente moderna. Foi uma experiência transformadora!"<br>
      <em>– Família Silva</em>
    </blockquote>
    <p>
      Inspire-se em projetos de sucesso e veja como pequenas mudanças podem ter um impacto significativo
      no visual e na funcionalidade do ambiente.
    </p>

    <!-- Conclusão -->
    <h2>Conclusão</h2>
    <p>
      Reformar a sala de estar é investir na qualidade de vida. Com um bom planejamento, execução profissional 
      e atenção aos detalhes de design, seu espaço pode se transformar em um ambiente perfeito para receber 
      pessoas e criar memórias inesquecíveis. Se você busca uma reforma completa e personalizada, entre em 
      contato conosco para um orçamento sem compromisso!
    </p>

    <!-- CTA interno -->
    <div style="text-align: center; margin-top: 40px;">
      <a href="../index.php#contact" class="btn">
        Solicite seu Orçamento
      </a>
    </div>
  </section>
</main>

<!-- Botão WhatsApp -->
<a href="https://wa.me/5511982602902" class="whatsapp-btn" target="_blank" rel="noopener">
  <img src="../img/whatsapplogo.png" alt="WhatsApp" class="whatsapp-icon">
</a>

<!-- Botão Voltar ao Topo -->
<button id="backToTop" class="back-to-top">
  <i class="arrow-up-icon"></i>
</button>

<?php
  // Incluir o arquivo de rodapé
  include '../footer.php';
?>
