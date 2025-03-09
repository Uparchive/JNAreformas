<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="JNA Reformas & Soluções - Serviços completos de reforma e construção em São Paulo com qualidade, segurança e pontualidade.">
  <meta name="keywords" content="reformas, construção, São Paulo, reforma de telhados, instalações hidráulicas, reformas residenciais, reformas comerciais">
  <meta name="author" content="JNA Reformas & Soluções">
  <meta name="robots" content="index, follow">
  <title><?php echo $pageTitle ?? 'JNA Reformas & Soluções'; ?></title>

  <!-- CSS principal (sempre carregado) -->
  <link rel="stylesheet" href="/jnasite/css/styles.css">

  <!-- CSS específico de posts (carregado somente se $isProjectPage estiver definido como true) -->
  <?php if (isset($isProjectPage) && $isProjectPage): ?>
    <link rel="stylesheet" href="/jnasite/css/post-styles.css">
  <?php endif; ?>

  <!-- CSS específico de página "Obrigado" (carregado somente se $isThankYouPage estiver definido como true) -->
  <?php if (isset($isThankYouPage) && $isThankYouPage): ?>
    <link rel="stylesheet" href="/jnasite/css/obrigado.css">
  <?php endif; ?>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/jnasite/img/favicon.ico" type="image/x-icon">
</head>
<body>
  <!-- ========================= HEADER ========================= -->
  <header>
    <div class="container">
      <!-- LOGO -->
      <?php if (isset($isProjectPage) && $isProjectPage): ?>
        <!-- Se for página de projeto, volta para /jnasite/index.php -->
        <a href="/jnasite/index.php" class="logo">
          <img src="/jnasite/img/logo.png" alt="JNA Reformas & Soluções" class="logo-img">
        </a>
      <?php else: ?>
        <!-- Nas demais páginas, link para index.php local -->
        <a href="index.php" class="logo">
          <img src="/jnasite/img/logo.png" alt="JNA Reformas & Soluções" class="logo-img">
        </a>
      <?php endif; ?>
      
      <!-- Container que agrupa contato + menu -->
      <div class="header-info">
        <!-- Contato (desktop) -->
        <div class="header-contact">
          <a href="mailto:contatojnareformas@gmail.com" class="header-email">
            <i class="contact-icon email-icon"></i> contatojnareformas@gmail.com
          </a>
          <a href="tel:+5511982602902" class="header-phone">
            <i class="contact-icon phone-icon"></i> (11) 98260-2902
          </a>
        </div>
        
        <!-- Menu principal -->
        <nav class="main-nav">
          <ul class="nav-list">
            <?php if (isset($isProjectPage) && $isProjectPage): ?>
              <!-- Se for página de projeto, todos os links voltam ao /jnasite/index.php -->
              <li><a href="/jnasite/index.php" class="nav-link">Home</a></li>
              <li><a href="/jnasite/index.php#video-presentation" class="nav-link">Apresentação</a></li>
              <li><a href="/jnasite/index.php#services" class="nav-link">Serviços</a></li>
              <li><a href="/jnasite/index.php#projects" class="nav-link">Projetos</a></li>
              <li><a href="/jnasite/index.php#testimonials" class="nav-link">Depoimentos</a></li>
              <li><a href="/jnasite/index.php#contact" class="nav-link">Contato</a></li>
            <?php else: ?>
              <!-- Links para a própria página (one-page) ou local -->
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="#video-presentation" class="nav-link">Apresentação</a></li>
              <li><a href="#services" class="nav-link">Serviços</a></li>
              <li><a href="#projects" class="nav-link">Projetos</a></li>
              <li><a href="#testimonials" class="nav-link">Depoimentos</a></li>
              <li><a href="#contact" class="nav-link">Contato</a></li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
  
      <!-- Botão Hamburguer (mobile) -->
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>
