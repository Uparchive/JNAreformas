<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Cozinha Planejada - JNA Reformas & Soluções';

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
      <h1>Cozinha Planejada</h1>
      <p>
        Espaço otimizado e moderno para valorizar seu ambiente e tornar o dia a dia mais prático.
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
            src="../img/cozinhaplanejada-slide1.png" 
            alt="Slide 1 - Cozinha Planejada em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/cozinhaplanejada-slide2.png" 
            alt="Slide 2 - Detalhes de uma Cozinha Planejada"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/cozinhaplanejada-slide3.png" 
            alt="Slide 3 - Cozinha Planejada Finalizada"
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
      <a href="../index.php#projects" class="post-tag">Planejada</a>
      <a href="../index.php#projects" class="post-tag">Moderna</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/cozinhaplanejada.png" 
      alt="Cozinha Planejada" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Projeto de cozinha planejada, unindo praticidade e design contemporâneo
    </p>

    <!-- Conteúdo do post -->
    <h2>Introdução</h2>
    <p>
      A cozinha é um dos ambientes mais importantes de qualquer casa. Com uma cozinha planejada, é 
      possível aproveitar cada centímetro do espaço, garantindo organização, funcionalidade e um visual 
      moderno. Móveis sob medida, iluminação bem distribuída e escolha correta de revestimentos são 
      fatores-chave para transformar esse cômodo em um lugar mais prático e agradável.
    </p>

    <h2>Principais Vantagens</h2>
    <ul>
      <li><strong>Otimização do Espaço:</strong> Cada área é projetada para um uso específico, evitando desperdício de metragem.</li>
      <li><strong>Layout Funcional:</strong> Móveis e eletrodomésticos são dispostos de maneira a facilitar o fluxo de trabalho.</li>
      <li><strong>Personalização:</strong> Possibilidade de escolher materiais, cores e acabamentos que combinem com seu estilo.</li>
      <li><strong>Valorização do Imóvel:</strong> Cozinhas bem planejadas são altamente atrativas para futuros compradores.</li>
    </ul>

    <h2>Etapas da Reforma</h2>
    <p>
      Ao optar por uma cozinha planejada, é essencial seguir algumas etapas:
    </p>
    <ul>
      <li><strong>Consultoria e Planejamento:</strong> Definição das necessidades, medição do espaço e criação do projeto 3D.</li>
      <li><strong>Escolha de Materiais:</strong> Seleção de revestimentos, bancadas, armários e acabamentos de acordo com seu gosto e orçamento.</li>
      <li><strong>Execução:</strong> Demolição (se necessária), adequação de pontos hidráulicos e elétricos, instalação dos móveis e acabamento final.</li>
      <li><strong>Entrega e Ajustes:</strong> Limpeza, verificação de detalhes e eventuais ajustes antes da entrega definitiva.</li>
    </ul>

    <h2>Depoimentos</h2>
    <blockquote>
      "A reforma da nossa cozinha foi incrível. Os armários planejados trouxeram muito mais espaço, 
      e a disposição dos eletrodomésticos deixou o ambiente prático e funcional. Ficou exatamente 
      como sonhávamos!"
      <br><em>– Família Lopes</em>
    </blockquote>
    <p>
      Muitos clientes relatam que a cozinha planejada não só facilita o dia a dia, mas também se torna 
      um ponto de encontro para a família e amigos, graças ao seu design convidativo.
    </p>

    <h2>Conclusão</h2>
    <p>
      Investir em uma cozinha planejada é garantir mais conforto, organização e beleza para o seu lar. 
      Nossa equipe está pronta para desenvolver um projeto personalizado, que atenda às suas necessidades 
      e reflita o seu estilo de vida.  
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
