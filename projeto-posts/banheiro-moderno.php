<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Banheiro Moderno - JNA Reformas & Soluções';

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
      <h1>Banheiro Moderno</h1>
      <p>
        Design arrojado e funcional para transformar seu banheiro em um ambiente sofisticado e prático.
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
            src="../img/banheiromoderno-slide1.png" 
            alt="Slide 1 - Banheiro Moderno em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/banheiromoderno-slide2.png" 
            alt="Slide 2 - Detalhes de um Banheiro Moderno"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/banheiromoderno-slide3.png" 
            alt="Slide 3 - Banheiro Moderno Finalizado"
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
      <a href="../index.php#projects" class="post-tag" data-filter="banheiros">Banheiro</a>
      <a href="../index.php#projects" class="post-tag">Moderno</a>
      <a href="../index.php#projects" class="post-tag">Design Funcional</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/banheiromoderno.png" 
      alt="Banheiro Moderno" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Projeto de banheiro com design contemporâneo e arrojado
    </p>

    <!-- Conteúdo do post -->
    <h2>Introdução</h2>
    <p>
      Um banheiro moderno alia estética e praticidade, criando um ambiente que não apenas facilite o dia a dia, 
      mas também ofereça um toque de sofisticação. O uso inteligente de materiais, cores e iluminação pode 
      transformar completamente esse espaço, tornando-o mais agradável e funcional.
    </p>

    <h2>Principais Características</h2>
    <ul>
      <li><strong>Linhas Retas e Minimalistas:</strong> A arquitetura e o mobiliário seguem um estilo limpo e sem excessos.</li>
      <li><strong>Mistura de Materiais:</strong> Combinação de madeira, vidro e metais em acabamento fosco ou polido.</li>
      <li><strong>Iluminação Estratégica:</strong> Luzes embutidas e spots direcionados para criar efeitos e valorizar áreas específicas.</li>
      <li><strong>Economia de Espaço:</strong> Móveis planejados e nichos otimizam a organização, mantendo a sensação de amplitude.</li>
    </ul>

    <h2>Processo de Execução</h2>
    <p>
      Antes de iniciar a obra, é essencial definir um projeto que equilibre beleza e praticidade. A escolha dos 
      revestimentos e louças deve levar em conta a resistência à umidade e a facilidade de limpeza. Em seguida, 
      vem a execução da reforma, que inclui adequação hidráulica, instalação de acabamentos e ajustes finais.
    </p>

    <h2>Depoimentos</h2>
    <blockquote>
      "Após a reforma, nosso banheiro se tornou o espaço mais elogiado da casa! A equipe da JNA conseguiu 
      unir design moderno com praticidade, superando nossas expectativas."
      <br><em>– Carlos e Marina Santos</em>
    </blockquote>
    <p>
      Muitos clientes relatam como a modernização do banheiro elevou o conforto do lar e trouxe mais 
      funcionalidade para o dia a dia.
    </p>

    <h2>Conclusão</h2>
    <p>
      Investir em um banheiro moderno é garantir um ambiente confortável, bonito e durável. Se você 
      deseja dar uma repaginada completa no seu espaço, conte com a nossa equipe especializada para 
      desenvolver um projeto que atenda às suas necessidades e reflita seu estilo de vida.
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
