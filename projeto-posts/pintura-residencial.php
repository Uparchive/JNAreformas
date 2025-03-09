<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Pintura Residencial - JNA Reformas & Soluções';

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
      <h1>Pintura Residencial</h1>
      <p>
        Paredes recebendo novos acabamentos, transformando ambientes com cores e qualidade profissional.
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
            src="../img/pinturaresidencial-slide1.png" 
            alt="Slide 1 da Pintura Residencial"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/pinturaresidencial-slide2.png" 
            alt="Slide 2 da Pintura Residencial"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/pinturaresidencial-slide3.png" 
            alt="Slide 3 da Pintura Residencial"
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
      <a href="../index.php#projects" class="post-tag" data-filter="residenciais">Residencial</a>
      <a href="../index.php#projects" class="post-tag">Pintura</a>
      <a href="../index.php#projects" class="post-tag">Acabamentos</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/paredesendopintada.png" 
      alt="Pintura Residencial" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Paredes recebendo novos acabamentos e cores vibrantes
    </p>

    <!-- Seções do post -->
    <h2>Introdução</h2>
    <p>
      Uma nova pintura pode revitalizar completamente o ambiente de uma residência. Seja para renovar 
      paredes desgastadas ou simplesmente dar um ar mais moderno, a pintura residencial é um investimento 
      que valoriza o imóvel e aumenta o conforto dos moradores.
    </p>

    <h2>Benefícios de uma Boa Pintura</h2>
    <ul>
      <li><strong>Proteção das Paredes:</strong> Uma camada de tinta de qualidade protege contra umidade e pequenas fissuras.</li>
      <li><strong>Valorização do Imóvel:</strong> Ambientes bem pintados transmitem sensação de cuidado e podem aumentar o valor de revenda.</li>
      <li><strong>Estética e Conforto:</strong> Cores bem escolhidas influenciam no clima e na sensação de aconchego.</li>
      <li><strong>Personalização:</strong> A pintura permite criar estilos únicos, com efeitos especiais, texturas e combinações de cores.</li>
    </ul>

    <h2>Processo de Execução</h2>
    <p>
      Antes de iniciar, é importante avaliar o estado das paredes, corrigir imperfeições e proteger móveis 
      e pisos. Em seguida, aplicamos as camadas de tinta necessárias, respeitando tempos de secagem e 
      recomendações do fabricante. Finalizamos com retoques e limpeza geral.
    </p>

    <h2>Depoimentos</h2>
    <blockquote>
      "Contratamos a JNA para pintar todo o interior da nossa casa. Ficamos impressionados com a rapidez, 
      organização e qualidade do trabalho. As paredes parecem novas e o resultado superou nossas expectativas!"
      <br><em>– Família Oliveira</em>
    </blockquote>
    <p>
      Vários clientes relatam o impacto positivo que uma boa pintura traz para o dia a dia, seja no conforto 
      visual, seja na sensação de limpeza e renovação dos espaços.
    </p>

    <h2>Conclusão</h2>
    <p>
      A pintura residencial é um dos métodos mais acessíveis e eficientes de renovar um ambiente. Se você 
      busca cores novas, estilo diferenciado ou apenas proteger suas paredes, conte com nossa equipe 
      especializada para garantir um acabamento impecável.
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
