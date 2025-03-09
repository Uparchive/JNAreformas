<?php
  // obrigado.php

  // Título da página
  $pageTitle = 'Mensagem Enviada - JNA Reformas & Soluções';
  
  // Variável para indicar que estamos na página de agradecimento
  $isThankYouPage = true;

  // Incluir cabeçalho
  include 'header.php';
?>

<section class="thank-you">
  <div class="container">
    <div class="thank-you-content">
      
      <div class="thank-you-icon">
        <i class="success-icon">✓</i>
      </div>

      <h1>Mensagem Enviada com Sucesso!</h1>
      <p class="thank-you-message">
        Agradecemos pelo seu contato! Recebemos sua mensagem e um de nossos especialistas 
        entrará em contato com você em breve.
      </p>
      
      <div class="thank-you-details">
        <p><strong>O que acontece agora?</strong></p>
        <ul>
          <li>Nossa equipe analisará sua solicitação</li>
          <li>Entraremos em contato em até 24 horas úteis</li>
          <li>Agendaremos uma visita técnica, se necessário</li>
          <li>Desenvolveremos um orçamento personalizado para seu projeto</li>
        </ul>
      </div>
      
      <div class="thank-you-contact">
        <p>Caso tenha alguma dúvida urgente, entre em contato diretamente:</p>
        <div class="quick-contact">
          <!-- Classes renomeadas para evitar conflito -->
          <a href="tel:+5511982602902" class="contact-item">
            <i class="thank-phone-icon"></i> (11) 98260-2902
          </a>
          <a href="mailto:contatojnareformas@gmail.com" class="contact-item">
            <i class="thank-email-icon"></i> contatojnareformas@gmail.com
          </a>
        </div>
      </div>
      
      <div class="thank-you-cta">
        <a href="index.php" class="btn btn-primary">Voltar para o site</a>
        <a href="index.php#projects" class="btn btn-secondary">Ver nossos projetos</a>
      </div>

    </div>
  </div>
</section>

<?php
  // Rodapé
  include 'footer.php';
?>
