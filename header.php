<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Professional Pest Control</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qksEo0eJrO94slA6kShhhs+ZpJ3VKgf3fjJkzboTKZKXf7vHgQ8f6RWqLPWbKChG" crossorigin="anonymous"></script>
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3j5rU0TUtB0D5jpvMd0v+jPx3N5+e/D+oIbE2CkLZFK4OgIlKv6ZZm0dF4klyYIsCe4HQmyKcs1Z4rF+M8qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Owl Carousel Theme CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-UX0gGPhOxh5T9I0FsT6qPtk+UuYCO0tF7Zg/5Jc08EkTjQ6oPZAm9SOqH4lM1SpG6PmQo0n5ZfH/6L5I45lN6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- ======= Css files Include ======= -->
  <?php include_once 'css-files.php' ?>

</head>

<body>
  <header>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white py-2">
      <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="./assets/image/dekiller.webp" alt="Logo">
        </a>

        <!-- Contact Info (Desktop Only) -->
        <div class="d-none d-lg-flex flex-grow-1 justify-content-center align-items-center top-contact">
          <div class="d-flex align-items-center contact-info contact-info-1">
            <a href="mailto:dkiller@gmail.com">
              <img src="./assets/image/icons/mail.png" alt="Email Icon">
              <span>dkiller@gmail.com</span>
            </a>
          </div>
          <div class="d-flex align-items-center contact-info">
            <a href="tell:+919876543210">
              <img src="./assets/image/icons/phone.png" alt="Phone Icon">
              <span>+91 98765-43210</span>
            </a>
          </div>
          <div class="d-flex align-items-center contact-info contact-info-social">
            <a href="https://www.facebook.com/" target="_blank" class="me-2"><i class="bi bi-facebook"></i></a>
            <a href="https://x.com/" target="_blank" class="me-2"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank" class="me-2"><i class="bi bi-instagram"></i></a>
            <a href="https://in.pinterest.com/login/" target="_blank" class="me-2"><i class="fab fa-pinterest"></i></a>
          </div>
        </div>

        <!-- Mobile Toggler -->
        <button class="btn d-lg-none ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
          <i class="bi bi-list" style="font-size: 1.5rem;"></i>
        </button>
      </div>
    </nav>


    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
      <div class="offcanvas-header">
        <a href="index.php"><img src="./assets/image/dekiller.webp" class="img-fluid" alt="Logo"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        <hr>
      </div>

      <div class="offcanvas-body d-flex flex-column justify-content-between">
        <!-- Navigation Links -->
        <ul class="navbar-nav mb-4">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="bi bi-house-door me-2"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">
              <i class="bi bi-info-circle me-2"></i> About Us
            </a>
          </li>
          <li class="nav-item">
            <!-- Dropdown Toggle -->
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#offcanvasDropdown" role="button" aria-expanded="false" aria-controls="offcanvasDropdown">
              <span><i class="bi bi-list-check me-2"></i> Our Services</span>
              <i class="bi bi-chevron-down dropdown-chevron"></i>
            </a>
            <!-- Dropdown Menu -->
            <div class="collapse" id="offcanvasDropdown">
              <ul class="list-unstyled ps-4">
                <li><a class="" href="Cockroach-Control-Services-in-Coimbatore.php">Cockroach Control</a></li>
                <li><a class="" href="Ant-Pest-Control-in-Coimbatore.php">Ant Pest Control</a></li>
                <li><a class="" href="Bed-Bug-Treatment-in-Coimbatore.php">Bedbug Treatment</a></li>
                <li><a class="" href="Termite-Control-in-Coimbatore.php">Termite Control</a></li>
                <li><a class="" href="Rodent-Control-Services-in-Coimbatore.php">Rodent Control</a></li>
                <li><a class="" href="Mosquito-Control-in-Coimbatore.php">Mosquito Fogging</a></li>
                <li><a class="" href="General-Pest-Control-in-Coimbatore.php">General Pest Cotrol</a></li>
                <li><a class="" href="Disinfection-&-Sanitization-Services.php">Disinfection Services</a></li>
                <li><a class="" href="Commercial-Pest-Control-Services.php">Commercial pest Control </a></li>
                <li><a class="" href="Pest-Control-for-Apartments-&-Gated-Communities.php">Apartments pest control</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <i class="bi bi-journal-text me-2"></i> Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.php">
              <i class="bi bi-telephone me-2"></i> Contact Us
            </a>
          </li>
        </ul>

        <!-- Social Media Links -->
        <div class="social-links text-center mb-3">
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
        </div>

        <!-- Contact Details -->
        <div class="offcanvas-contact mt-auto pt-3 border-top">
          <h6 class="fw-bold mb-2">Contact Us</h6>
          <p class="mb-1"><a href="tell:+919876543210 "><i class="bi bi-telephone-fill me-2"></i> +91 98765-43210 </a></p>
          <p class="mb-1"><a href="mailto:dkiller"><i class="bi bi-envelope-fill me-2"></i>dkiller</a></p>
          <p class="mb-0"><a href="https://maps.app.goo.gl/tDRNDYk7s2ziQYX5A" target="_blank"><i class="bi bi-geo-alt-fill me-2"></i>194/C6, Sankara Eye Hospital Rd, Saravanampatti, Siranandha Puram, Coimbatore, Tamil Nadu 641035 </a></p>
        </div>
      </div>
    </div>



    <!-- Navigation Bar Bottom (Desktop Menu) -->
    <div class="bg-white  d-none d-lg-block">
      <div class="container">
        <ul class="nav justify-content-center fw-bold py-2">
          <li class="nav-item"><a class="nav-link text-dark" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-dark" href="about-us.php">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="Cockroach-Control-Services-in-Coimbatore.php">Cockroach Control</a></li>
              <li><a class="dropdown-item" href="Ant-Pest-Control-in-Coimbatore.php">Ant Pest Control</a></li>
              <li><a class="dropdown-item" href="Bed-Bug-Treatment-in-Coimbatore.php">Bedbug Treatment</a></li>
              <li><a class="dropdown-item" href="Termite-Control-in-Coimbatore.php">Termite Control</a></li>
              <li><a class="dropdown-item" href="Rodent-Control-Services-in-Coimbatore.php">Rodent Control</a></li>
              <li><a class="dropdown-item" href="Mosquito-Control-in-Coimbatore.php">Mosquito Fogging</a></li>
              <li><a class="dropdown-item" href="General-Pest-Control-in-Coimbatore.php">General Pest Cotrol</a></li>
              <li><a class="dropdown-item" href="Disinfection-&-Sanitization-Services.php">Disinfection Services</a></li>
              <li><a class="dropdown-item" href="Commercial-Pest-Control-Services.php">Commercial pest Control </a></li>
              <li><a class="dropdown-item" href="Pest-Control-for-Apartments-&-Gated-Communities.php">Apartemtns pest control</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link text-dark" href="blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link text-dark" href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </header><button class="back-to-top" aria-label="Back to Top">
    <svg class="pest-icon" viewBox="0 0 24 24">
      <path d="M12 4L4 12h3v8h10v-8h3L12 4zm0-2.83L18.17 10H15v8H9v-8H5.83L12 1.17z" />
    </svg>
    <span class="tooltip">Back to Top</span>
  </button>

  <!-- what ap icon -->
  <ul class="social-float">
    <li class="social-icon whatsapp-float">
      <a href="https://wa.me/917598575556" target="_blank" class="text-white">
        <span class="social-tooltip">Chat on WhatsApp</span>
        <img src="./assets/image/icons/whatapp.gif" class="img-fluid" alt="Chat on WhatsApp">
      </a>

    </li>

  </ul>


  <!-- what app icon -->
  <script>
    setTimeout(() => {
      document.querySelector('.whatsapp-float').style.animation = 'none';
    }, 5000);
  </script>

  <!-- click to top btn -->
  <script>
    window.addEventListener('scroll', function() {
      var backToTopButton = document.querySelector('.back-to-top');
      if (window.pageYOffset > 300) {
        backToTopButton.classList.add('visible');
      } else {
        backToTopButton.classList.remove('visible');
      }
    });

    document.querySelector('.back-to-top').addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });

      this.classList.add('clicked');
      setTimeout(() => {
        this.classList.remove('clicked');
      }, 500);
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>