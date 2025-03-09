<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Cozinha Branca - JNA Reformas & Soluções';

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
      <h1>Cozinha Branca</h1>
      <p>
        Iluminação e amplitude para valorizar ainda mais o coração da sua casa.
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
            src="../img/cozinhabranca-slide1.png" 
            alt="Slide 1 - Cozinha Branca em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/cozinhabranca-slide2.png" 
            alt="Slide 2 - Detalhes de uma Cozinha Branca"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/cozinhabranca-slide3.png" 
            alt="Slide 3 - Cozinha Branca Finalizada"
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
      <a href="../index.php#projects" class="post-tag" data-filter="cozinhas">Cozinha</a>
      <a href="../index.php#projects" class="post-tag">Branca</a>
      <a href="../index.php#projects" class="post-tag">Iluminação e Amplitude</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/cozinhabranca.png" 
      alt="Cozinha Branca" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Cozinha branca moderna, destaque em luminosidade e sensação de espaço
    </p>

    <!-- Conteúdo do post -->
    <h2>Introdução</h2>
    <p>
      A cozinha branca é sinônimo de elegância e amplitude. Ao utilizar tons claros em paredes, móveis 
      e bancadas, o ambiente ganha uma sensação de luminosidade que realça cada detalhe. Além disso, 
      esse estilo atemporal combina facilmente com diferentes tipos de decoração, permitindo que você 
      adicione pontos de cor ou materiais diferenciados para criar uma identidade única.
    </p>

    <h2>Por que Apostar em uma Cozinha Branca?</h2>
    <ul>
      <li><strong>Amplo e Iluminado:</strong> O branco reflete a luz natural, tornando o espaço mais claro e convidativo.</li>
      <li><strong>Fácil de Combinar:</strong> Permite adicionar elementos em madeira, metal ou cores vibrantes sem perder a harmonia.</li>
      <li><strong>Sensação de Limpeza:</strong> Transmite um aspecto limpo e organizado, ideal para áreas de preparo de alimentos.</li>
      <li><strong>Estilo Atemporal:</strong> Nunca sai de moda, garantindo um visual moderno por muito mais tempo.</li>
    </ul>

    <h2>Etapas da Reforma</h2>
    <p>
      Para garantir um resultado impecável, cada passo da reforma deve ser planejado com cuidado:
    </p>
    <ul>
      <li><strong>Definição de Layout:</strong> Otimize a disposição de móveis e eletrodomésticos para facilitar a circulação.</li>
      <li><strong>Escolha dos Materiais:</strong> Bancadas em quartzo ou granito claro, armários laqueados e revestimentos de fácil limpeza.</li>
      <li><strong>Iluminação Adequada:</strong> Pontos de luz embutidos, luminárias pendentes e luzes de LED sob armários.</li>
      <li><strong>Toques de Personalidade:</strong> Use detalhes em aço inox, madeira ou cores suaves para quebrar a monotonia.</li>
    </ul>

    <h2>Depoimentos</h2>
    <blockquote>
      "A cozinha branca transformou completamente a dinâmica da nossa casa. Agora, temos um ambiente 
      mais claro, espaçoso e que combina com tudo. Estamos muito satisfeitos com o resultado!"
      <br><em>– Família Moreira</em>
    </blockquote>
    <p>
      Muitos proprietários relatam que a cozinha branca traz não só vantagens estéticas, mas também 
      maior valorização do imóvel, pois esse estilo agrada a maioria dos compradores em potencial.
    </p>

    <h2>Conclusão</h2>
    <p>
      Se você busca um projeto que una iluminação, sensação de amplitude e elegância, a cozinha branca 
      é uma excelente escolha. Conte com a nossa equipe especializada para desenvolver um layout 
      funcional e incorporar materiais de alta qualidade, garantindo um resultado duradouro e cheio 
      de personalidade.
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
