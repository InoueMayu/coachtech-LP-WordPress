<?php wp_body_open(); ?>

<header class="header header_flex__item sticky-top">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/estra_logo.png" alt="">
    </a>
    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( 'news' ) ); ?>">News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#service">Service</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url( 'blog' ) ); ?>#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#company" tabindex="-1" aria-disabled="true">Company</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>