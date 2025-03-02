document.addEventListener('DOMContentLoaded', function () {
    // Inicialização de componentes
    initNavigation();
    initScrollEffects();
    initTestimonialSlider();
    initProjectFilters();
    initFAQ();
    initContactForm();
    initVideoLoading();
    animateOnScroll();
  
    // Eventos globais
    window.addEventListener('scroll', handleScrollEvents);
    window.addEventListener('resize', handleResizeEvents);
  
    // Inicializa o menu hambúrguer para dispositivos móveis
    initMobileMenu();
  });
  
  /* ---------- Menu Mobile (Hambúrguer) ---------- */
  function initMobileMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.main-nav');
    if (menuToggle && navMenu) {
      menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
      });
    }
  }
  
  /* ---------- Navegação (Links Internos e Smooth Scroll) ---------- */
  function initNavigation() {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        // Fecha o menu mobile, se estiver aberto
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNav = document.querySelector('.main-nav');
        if (menuToggle && menuToggle.classList.contains('active')) {
          menuToggle.classList.remove('active');
          mainNav.classList.remove('active');
        }
        const targetId = this.getAttribute('href').substring(1);
        if (!targetId) return;
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
    updateActiveNavLink();
  }
  
  /* ---------- Botão "Voltar ao Topo" ---------- */
  function initScrollEffects() {
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
      backToTopBtn.addEventListener('click', function () {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
  }
  
  /* ---------- Carrossel de Depoimentos ---------- */
  function initTestimonialSlider() {
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.testimonial-dots .dot');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    let currentSlide = 0;
    let sliderInterval = null;
    if (testimonialCards.length === 0) return;
  
    function showSlide(index) {
      index = (index + testimonialCards.length) % testimonialCards.length;
      testimonialCards.forEach(card => card.classList.remove('active'));
      testimonialCards[index].classList.add('active');
      dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
      currentSlide = index;
    }
    function nextSlide() {
      showSlide(currentSlide + 1);
    }
    function prevSlide() {
      showSlide(currentSlide - 1);
    }
    function startAutoSlide() {
      stopAutoSlide();
      sliderInterval = setInterval(nextSlide, 5000);
    }
    function stopAutoSlide() {
      if (sliderInterval) {
        clearInterval(sliderInterval);
        sliderInterval = null;
      }
    }
  
    showSlide(0);
    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        prevSlide();
        stopAutoSlide();
        startAutoSlide();
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        nextSlide();
        stopAutoSlide();
        startAutoSlide();
      });
    }
    dots.forEach((dot, index) => {
      dot.addEventListener('click', function () {
        showSlide(index);
        stopAutoSlide();
        startAutoSlide();
      });
    });
    const slider = document.querySelector('.testimonial-slider');
    if (slider) {
      slider.addEventListener('mouseenter', stopAutoSlide);
      slider.addEventListener('mouseleave', startAutoSlide);
    }
    startAutoSlide();
  }
  
  /* ---------- Filtro de Projetos ---------- */
  function initProjectFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    if (filterBtns.length === 0 || projectCards.length === 0) return;
  
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const filter = this.getAttribute('data-filter');
        projectCards.forEach(card => {
          card.style.display = (filter === 'all' || card.getAttribute('data-category') === filter)
            ? 'block'
            : 'none';
        });
      });
    });
  }
  
  /* ---------- Seção de FAQ ---------- */
  function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (faqItems.length === 0) return;
  
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      if (!question) return;
      question.addEventListener('click', function () {
        item.classList.toggle('active');
        const toggle = this.querySelector('.faq-toggle');
        if (toggle) {
          toggle.textContent = item.classList.contains('active') ? '-' : '+';
        }
      });
    });
  }
  
  /* ---------- Formulário de Contato ---------- */
  function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;
  
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (validateForm(form)) {
        showFormMessage(form, true, 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
        form.reset();
      } else {
        showFormMessage(form, false, 'Por favor, corrija os erros no formulário.');
      }
    });
    const phoneInput = form.querySelector('#phone');
    if (phoneInput) {
      phoneInput.addEventListener('input', function () {
        applyPhoneMask(this);
      });
    }
  }
  
  /* ---------- Validação e Exibição de Mensagens ---------- */
  function validateForm(form) {
    form.querySelectorAll('.form-error').forEach(error => {
      error.style.display = 'none';
    });
    let isValid = true;
    const name = form.querySelector('#name');
    if (name && (!name.value.trim() || name.value.trim().length < 3)) {
      showFieldError(name, 'Por favor, informe seu nome completo (mínimo 3 caracteres).');
      isValid = false;
    }
    const email = form.querySelector('#email');
    if (email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email.value.trim() || !emailRegex.test(email.value)) {
        showFieldError(email, 'Por favor, informe um e-mail válido.');
        isValid = false;
      }
    }
    const phone = form.querySelector('#phone');
    if (phone) {
      const phoneRegex = /^\(\d{2}\) \d{4,5}-\d{4}$|^\d{10,11}$/;
      if (!phone.value.trim() || !phoneRegex.test(phone.value)) {
        showFieldError(phone, 'Por favor, informe um telefone válido com DDD.');
        isValid = false;
      }
    }
    const service = form.querySelector('#service');
    if (service && !service.value) {
      showFieldError(service, 'Por favor, selecione um serviço.');
      isValid = false;
    }
    const message = form.querySelector('#message');
    if (message && (!message.value.trim() || message.value.trim().length < 10)) {
      showFieldError(message, 'Por favor, descreva seu projeto (mínimo 10 caracteres).');
      isValid = false;
    }
    return isValid;
  }
  
  function showFieldError(field, message) {
    const errorElement = document.getElementById(field.id + 'Error');
    if (errorElement) {
      errorElement.textContent = message;
      errorElement.style.display = 'block';
    }
  }
  
  function showFormMessage(form, isSuccess, message) {
    const formMessage = form.querySelector('#formMessage');
    if (!formMessage) return;
    formMessage.textContent = message;
    formMessage.className = 'form-message';
    formMessage.classList.add(isSuccess ? 'success' : 'error');
    formMessage.style.display = 'block';
    if (isSuccess) {
      setTimeout(() => {
        formMessage.style.display = 'none';
      }, 5000);
    }
  }
  
  /* ---------- Máscara de Telefone ---------- */
  function applyPhoneMask(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length > 11) {
      value = value.slice(0, 11);
    }
    if (value.length <= 10) {
      input.value = value.replace(/^(\d{2})(\d{4})(\d{0,4})$/, "($1) $2-$3");
    } else {
      input.value = value.replace(/^(\d{2})(\d{5})(\d{0,4})$/, "($1) $2-$3");
    }
  }
  
  /* ---------- Carregamento de Vídeo ---------- */
  function initVideoLoading() {
    const videoIframe = document.querySelector('.video-container iframe') ||
                        document.querySelector('.video-wrapper iframe');
    if (!videoIframe) return;
    const videoContainer = videoIframe.parentElement;
    if (!videoContainer.querySelector('.loading-indicator')) {
      videoContainer.insertAdjacentHTML('beforeend', '<div class="loading-indicator">Carregando vídeo...</div>');
    }
    setTimeout(() => {
      const src = videoIframe.src;
      videoIframe.src = '';
      setTimeout(() => {
        videoIframe.src = src;
        setTimeout(() => {
          const indicator = videoContainer.querySelector('.loading-indicator');
          if (indicator) {
            indicator.style.opacity = '0';
            setTimeout(() => {
              indicator.remove();
            }, 500);
          }
          videoContainer.classList.add('loaded');
        }, 2000);
      }, 100);
    }, 500);
  }
  
  /* ---------- Animação ao Rolar a Página ---------- */
  function animateOnScroll() {
    const sections = document.querySelectorAll('section');
    const windowHeight = window.innerHeight;
    sections.forEach(section => {
      const sectionTop = section.getBoundingClientRect().top;
      if (sectionTop < windowHeight - 150) {
        section.classList.add('visible');
      }
    });
  }
  
  /* ---------- Atualização do Link Ativo ---------- */
  function updateActiveNavLink() {
    const navLinks = document.querySelectorAll('.nav-link');
    if (navLinks.length === 0) return;
    const scrollPosition = window.scrollY;
    const scrollOffset = 150;
    document.querySelectorAll('section[id]').forEach(section => {
      const sectionTop = section.offsetTop - scrollOffset;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === '#' + sectionId) {
            link.classList.add('active');
          }
        });
      }
    });
    if (scrollPosition < 100) {
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#') {
          link.classList.add('active');
        }
      });
    }
  }
  
  /* ---------- Eventos de Scroll e Resize ---------- */
  function handleScrollEvents() {
    animateOnScroll();
    updateActiveNavLink();
    const header = document.querySelector('header');
    if (header) {
      header.classList.toggle('sticky', window.scrollY > 100);
    }
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
      backToTopBtn.classList.toggle('visible', window.scrollY > 500);
    }
  }
  
  function handleResizeEvents() {
    animateOnScroll();
  }
  
  /* ---------- Animação de Valores (Contadores) ---------- */
  function animateValue(selector, delay, duration) {
    const elements = document.querySelectorAll(selector);
  
    elements.forEach(el => {
      // Captura o texto original
      const originalText = el.textContent.trim();
  
      // Extrai apenas o número (ex.: de "95%" vira 95)
      const finalValue = parseFloat(originalText.replace(/[^0-9.-]+/g, ''));
  
      // Detecta se tem '%' ou '+'
      const hasPercent = originalText.includes('%');
      const hasPlusSign = originalText.includes('+');
  
      const startValue = 0;
  
      setTimeout(() => {
        const range = finalValue - startValue;
        // Se finalValue for 0, evita divisão por zero
        const stepTime = range > 0 ? Math.abs(Math.floor(duration / range)) : duration;
  
        let current = startValue;
        const timer = setInterval(() => {
          current += 1;
  
          // Se tinha '+', usa '+', se tinha '%', usa '%'
          if (hasPlusSign) {
            el.textContent = `${current}+`;
          } else if (hasPercent) {
            el.textContent = `${current}%`;
          } else {
            el.textContent = current;
          }
  
          if (current >= finalValue) {
            clearInterval(timer);
          }
        }, stepTime);
      }, delay);
    });
  }  
  
  /* ---------- Ao Carregar a Página ---------- */
  window.addEventListener('load', function() {
    document.body.classList.add('loaded');
    animateValue('.stat-number', 500, 2000);
  });
  