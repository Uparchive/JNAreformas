<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Ambiente Comercial - JNA Reformas & Soluções';

// Inclui o cabeçalho
include '../header.php';
?>

<!-- Carrega o CSS específico para posts -->
<link rel="stylesheet" href="/jnasite/css/post-styles.css">

<!-- ========================= CONTEÚDO PRINCIPAL ========================= -->
<main>
  <!-- Seção Hero específica do post -->
  <section class="post-hero">
    <div class="container">
      <h1>Ambiente Comercial</h1>
      <p>
        Transformação de espaços de vendas para atrair mais clientes e aumentar a funcionalidade do seu negócio.
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
            src="../img/ambientecomercial-slide1.png" 
            alt="Slide 1 - Ambiente Comercial em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/ambientecomercial-slide2.png" 
            alt="Slide 2 - Ambiente Comercial em Reforma"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/ambientecomercial-slide3.png" 
            alt="Slide 3 - Ambiente Comercial em Reforma"
          >
        </div>
        <!-- Botões de navegação do slideshow -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>
  </section>

  <!-- Seção de conteúdo do post -->
  <section class="post-content">
    <!-- Tags ou categorias -->
    <div class="post-tags">
      <a href="../index.php#projects" class="post-tag" data-filter="comerciais">Comercial</a>
      <a href="../index.php#projects" class="post-tag">Espaços de Vendas</a>
      <a href="../index.php#projects" class="post-tag">Reforma</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/ambientecomercialemreforma.png" 
      alt="Ambiente Comercial em Reforma" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Espaço comercial passando por uma transformação completa
    </p>

    <!-- Conteúdo do post -->
    <h2>Introdução</h2>
    <p>
      A reforma de um ambiente comercial vai muito além de uma simples mudança estética. Ela é capaz 
      de impactar a experiência dos clientes, a eficiência da equipe e a imagem que seu negócio 
      transmite ao mercado. Um projeto bem planejado torna o espaço mais funcional, agradável e 
      atrativo, gerando melhores resultados e fortalecendo a marca.
    </p>

    <h2>Principais Vantagens</h2>
    <ul>
      <li><strong>Atração de Clientes:</strong> Um ambiente moderno e organizado desperta o interesse e melhora a experiência de compra.</li>
      <li><strong>Melhor Uso do Espaço:</strong> Layouts funcionais permitem acomodar mais produtos ou serviços, facilitando o fluxo de pessoas.</li>
      <li><strong>Identidade Visual:</strong> Uma reforma pode reforçar a identidade da marca e transmitir confiança e profissionalismo.</li>
      <li><strong>Conforto para a Equipe:</strong> Áreas bem planejadas influenciam na produtividade e satisfação dos colaboradores.</li>
    </ul>

    <h2>Etapas da Reforma</h2>
    <p>
      Cada projeto comercial tem suas particularidades, mas alguns passos são comuns:
    </p>
    <ul>
      <li><strong>Diagnóstico e Planejamento:</strong> Avaliação das necessidades, definição de prazos e orçamento.</li>
      <li><strong>Layout e Design:</strong> Criação de um projeto que valorize a identidade da marca e a funcionalidade do espaço.</li>
      <li><strong>Execução da Obra:</strong> Demolição, adequações de infraestrutura, instalações e acabamentos.</li>
      <li><strong>Finalização e Entrega:</strong> Limpeza, decoração, testes de equipamentos e entrega pronta para uso.</li>
    </ul>

    <h2>Depoimentos</h2>
    <blockquote>
      "A reforma transformou nosso ponto de venda em um ambiente acolhedor e moderno. As vendas subiram 
      e os clientes elogiam o novo espaço. Valeu a pena cada etapa!"
      <br><em>– Equipe StoreX</em>
    </blockquote>
    <p>
      Muitos empresários relatam que, após a reforma, houve aumento no fluxo de clientes, melhor organização 
      dos produtos e, consequentemente, um crescimento significativo nas vendas.
    </p>

    <h2>Conclusão</h2>
    <p>
      Investir em um ambiente comercial bem planejado é essencial para quem deseja se destacar no mercado. 
      A transformação do seu espaço de vendas pode trazer benefícios imediatos e duradouros, tanto para 
      clientes quanto para colaboradores. Conte com a nossa equipe especializada para garantir uma reforma 
      completa, dentro do prazo e do orçamento.
    </p>

    <!-- Chamada para ação (CTA) -->
    <div style="text-align: center; margin-top: 40px;">
      <a href="../index.php#contact" class="btn">
        Solicite seu Orçamento
      </a>
    </div>
  </section>
</main>

<!-- ========================= BOTÃO WHATSAPP ========================= -->
<a href="https://wa.me/5511982602902" class="whatsapp-btn" target="_blank" rel="noopener">
  <img src="../img/whatsapplogo.png" alt="WhatsApp" class="whatsapp-icon">
</a>

<!-- ========================= BOTÃO VOLTAR AO TOPO ========================= -->
<button id="backToTop" class="back-to-top">
  <i class="arrow-up-icon"></i>
</button>

<?php
// Inclui o arquivo de rodapé
include '../footer.php';
?>
