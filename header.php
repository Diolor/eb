<!DOCTYPE html>
<html <?php language_attributes(); ?> data-lang="de">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0e2a1c">
  <?php if ( is_front_page() ) : ?>
  <meta name="description" content="Der größte Wald Berlin-Neuköllns steht vor der Zerstörung. Die Initiative „Emmauswald bleibt!“ kämpft für den Erhalt des gesamten Waldes. | Neukölln's largest forest is facing destruction. Join the initiative to save it.">
  <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/IMG_20220526_095047-scaled.jpg">
  <meta property="og:title" content="Initiative Emmauswald bleibt!">
  <meta property="og:description" content="Gemeinsam für den Erhalt unseres Stadtwaldes! / Together for the preservation of our city forest!">
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/IMG_20220526_095047-scaled.jpg">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ======================= HEADER ======================= -->
<header class="site-header<?php echo is_front_page() ? '' : ' solid'; ?>">
  <nav class="nav container">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>#top">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/EmmausWald_logo_centered.png" alt="Emmauswald bleibt! Logo">
      <span>Emmauswald<em>bleibt!</em></span>
    </a>
    <button class="nav-toggle" aria-label="Menü öffnen / Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links">
      <li class="nav-lang">
        <div class="lang-switch" role="group" aria-label="Sprache / Language">
          <button data-set-lang="de" class="active">DE</button>
          <button data-set-lang="en">EN</button>
          <button data-set-lang="tr">TR</button>
        </div>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#wald"><span class="de">Der Wald</span><span class="en">The Forest</span><span class="tr">Orman</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#forderungen"><span class="de">Forderungen</span><span class="en">Demands</span><span class="tr">Talepler</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#mitmachen"><span class="de">Mitmachen</span><span class="en">Take Action</span><span class="tr">Katıl</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#news"><span class="de">News</span><span class="en">News</span><span class="tr">Haberler</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#kalender"><span class="de">Kalender</span><span class="en">Calendar</span><span class="tr">Takvim</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#presse"><span class="de">Presse</span><span class="en">Press</span><span class="tr">Basın</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#spenden"><span class="de">Spenden</span><span class="en">Donate</span><span class="tr">Bağış</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#bilder"><span class="de">Bilder</span><span class="en">Gallery</span><span class="tr">Galeri</span></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#kontakt"><span class="de">Kontakt</span><span class="en">Contact</span><span class="tr">İletişim</span></a></li>
      <li class="nav-cta"><a class="btn btn-small btn-accent" href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">
        <span class="de">Petition unterschreiben</span><span class="en">Sign the petition</span><span class="tr">Dilekçeyi imzala</span></a></li>
    </ul>
    <div class="lang-switch" role="group" aria-label="Sprache / Language">
      <button data-set-lang="de" class="active">DE</button>
      <button data-set-lang="en">EN</button>
      <button data-set-lang="tr">TR</button>
    </div>
  </nav>
</header>
