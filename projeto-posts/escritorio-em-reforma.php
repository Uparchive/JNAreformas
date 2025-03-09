<?php
// Indica que esta é uma página de projeto
$isProjectPage = true;

// Define o título da página
$pageTitle = 'Escritório em Reforma - JNA Reformas & Soluções';

// Inclui o cabeçalho
include '../header.php';
?>

<!-- ========================= CONTEÚDO PRINCIPAL ========================= -->
<main>
  <!-- Seção Hero específica do post -->
  <section class="post-hero">
    <div class="container">
      <h1>Escritório em Reforma</h1>
      <p>
        Melhorias em ambientes corporativos para ampliar produtividade, conforto e imagem profissional.
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
            src="../img/escritorioemreforma-slide1.png" 
            alt="Slide 1 do Escritório em Reforma"
          >
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
          <img 
            src="../img/escritorioemreforma-slide2.png" 
            alt="Slide 2 do Escritório em Reforma"
          >
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
          <img 
            src="../img/escritorioemreforma-slide3.png" 
            alt="Slide 3 do Escritório em Reforma"
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
      <a href="../index.php#projects" class="post-tag">Escritório</a>
      <a href="../index.php#projects" class="post-tag">Reforma</a>
    </div>

    <!-- Imagem principal do post -->
    <img 
      src="../img/escritorioemreforma.png" 
      alt="Escritório em Reforma" 
      class="post-image"
    >

    <!-- Legenda (opcional) -->
    <p class="image-caption">
      Ambiente corporativo em processo de renovação
    </p>

    <h2>Introdução</h2>
    <p>
      Reformar um escritório é mais do que apenas renovar paredes e pisos. É criar um ambiente propício 
      ao bem-estar, à produtividade e à imagem que sua empresa deseja transmitir. Uma reforma bem planejada 
      pode otimizar o uso do espaço, melhorar a ergonomia e ainda valorizar o seu negócio no mercado.
    </p>

    <h2>Por que Reformar seu Escritório?</h2>
    <ul>
      <li><strong>Produtividade:</strong> Ambientes modernos e funcionais estimulam a criatividade e o engajamento da equipe.</li>
      <li><strong>Imagem Corporativa:</strong> Um espaço bem cuidado reflete profissionalismo e seriedade perante clientes e parceiros.</li>
      <li><strong>Conforto e Ergonomia:</strong> Móveis e layout adequados reduzem problemas de saúde ocupacional e aumentam o bem-estar.</li>
      <li><strong>Valorização do Imóvel:</strong> Uma boa reforma pode agregar valor ao local, seja ele próprio ou alugado.</li>
    </ul>

    <h2>Etapas da Reforma</h2>
    <p>
      Cada projeto corporativo tem suas particularidades, mas algumas etapas são comuns:
    </p>
    <ul>
      <li><strong>Planejamento:</strong> Definição de necessidades, orçamento e cronograma.</li>
      <li><strong>Layout e Design:</strong> Criação de um projeto que equilibre estética, funcionalidade e normas de segurança.</li>
      <li><strong>Execução:</strong> Demolição, adequação de infraestrutura (hidráulica, elétrica, etc.), acabamentos e decoração.</li>
      <li><strong>Finalização:</strong> Limpeza, revisão de detalhes e entrega do espaço pronto para uso.</li>
    </ul>

    <h2>Depoimentos</h2>
    <blockquote>
      “A reforma do nosso escritório foi um divisor de águas para a empresa. Agora, a equipe se sente 
      muito mais motivada e nossos clientes elogiam o espaço moderno e funcional.”
      <br><em>– Equipe XPTO Solutions</em>
    </blockquote>
    <p>
      Muitos gestores relatam que, após a reforma, houve aumento de produtividade e satisfação 
      dos colaboradores, além de uma melhor percepção do negócio por parte dos clientes.
    </p>

    <h2>Conclusão</h2>
    <p>
      Investir em uma reforma de escritório vai muito além de estética: significa cuidar da sua 
      equipe, otimizar processos e fortalecer a imagem corporativa. Conte com a JNA Reformas & 
      Soluções para planejar e executar cada etapa com excelência, garantindo um resultado 
      que reflita os valores da sua empresa.
    </p>

    <!-- Chamada para ação (CTA) -->
    <div style="text-align: center; margin-top: 40px;">
      <a href="../index.php#contact" class="btn">
        Solicite seu Orçamento
      </a>
    </div>
  </section>
</main>

<!-- ========================= BOTÃO VOLTAR AO TOPO ========================= -->

<?php
// Inclui o arquivo de rodapé
include '../footer.php';
?>
