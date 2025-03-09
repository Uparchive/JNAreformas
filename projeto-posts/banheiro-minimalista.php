<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Banheiro Minimalista - JNA Reformas & Soluções';

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
      <h1>Banheiro Minimalista</h1>
      <p>
        Estilo clean e elegante para quem busca praticidade e sofisticação em um único ambiente.
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
            src="../img/banheirominimalista-slide1.png" 
            alt="Slide 1 - Banheiro Minimalista em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/banheirominimalista-slide2.png" 
            alt="Slide 2 - Detalhes de um Banheiro Minimalista"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/banheirominimalista-slide3.png" 
            alt="Slide 3 - Banheiro Minimalista Finalizado"
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
      <a href="../index.php#projects" class="post-tag">Minimalista</a>
      <a href="../index.php#projects" class="post-tag">Design Clean</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/banheirominimalista.png" 
      alt="Banheiro Minimalista" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Projeto de banheiro com estilo minimalista, clean e funcional
    </p>

    <!-- Conteúdo do post -->
    <h2>Introdução</h2>
    <p>
      O banheiro minimalista é definido por linhas retas, cores neutras e a ausência de elementos 
      supérfluos. A proposta é oferecer um ambiente prático, de fácil manutenção e esteticamente 
      sofisticado. Neste tipo de design, cada detalhe é pensado para manter o equilíbrio entre 
      funcionalidade e beleza.
    </p>

    <h2>Principais Características</h2>
    <ul>
      <li><strong>Cores Claras:</strong> Tons como branco, bege e cinza claro ampliam o ambiente e trazem sensação de limpeza.</li>
      <li><strong>Móveis Simples:</strong> Armários e bancadas sem puxadores ou adornos excessivos, valorizando a praticidade.</li>
      <li><strong>Linhas Retas:</strong> Acabamentos e louças com design clean, evitando curvas e ornamentos complexos.</li>
      <li><strong>Organização:</strong> Nichos e prateleiras discretos para guardar itens, mantendo o espaço livre de bagunça.</li>
    </ul>

    <h2>Execução e Reforma</h2>
    <p>
      Para transformar um banheiro comum em um espaço minimalista, é fundamental planejar cada detalhe:
    </p>
    <ul>
      <li><strong>Revestimentos:</strong> Opte por pisos e paredes em tons neutros, com acabamento fosco ou acetinado.</li>
      <li><strong>Louças e Metais:</strong> Escolha peças de design simples, de preferência em linhas retas ou levemente arredondadas.</li>
      <li><strong>Iluminação:</strong> Luz branca e focada em pontos estratégicos, como espelhos e áreas de banho, reforça a sensação de amplitude.</li>
      <li><strong>Acabamentos:</strong> Prefira superfícies lisas e sem texturas pesadas, para manter o ambiente clean.</li>
    </ul>

    <h2>Depoimentos</h2>
    <blockquote>
      "O banheiro minimalista superou todas as minhas expectativas. A equipe da JNA conseguiu criar 
      um espaço que parece maior, mais iluminado e extremamente funcional. Estou apaixonada pelo resultado!"
      <br><em>– Juliana Costa</em>
    </blockquote>
    <p>
      Muitos clientes destacam a facilidade de limpeza e a sensação de tranquilidade que o design 
      minimalista traz ao dia a dia, tornando o momento de cuidado pessoal mais agradável.
    </p>

    <h2>Conclusão</h2>
    <p>
      O estilo minimalista é ideal para quem busca simplicidade, elegância e praticidade em um só lugar. 
      Se você deseja transformar seu banheiro em um espaço moderno e clean, nossa equipe especializada 
      pode desenvolver um projeto sob medida para atender às suas necessidades.  
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
