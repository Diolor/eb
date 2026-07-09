<?php
/**
 * Impressum – static legal notice, rendered regardless of page content.
 * Create a page with the slug "impressum" so this template is used.
 */
get_header();
?>

<section class="section impressum-page">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow"><span class="de">Rechtliches</span><span class="en">Legal notice</span><span class="tr">Yasal bilgiler</span></p>
      <h2>Impressum</h2>
    </div>
    <p><strong>Initiative Emmauswald Bleibt!</strong></p>
    <p>Dieter Kästner<br>
    Windbergstraße 10<br>
    07749 Jena</p>
    <p><span class="de">Kontakt:</span><span class="en">Contact:</span><span class="tr">İletişim:</span> <a href="mailto:EmmausWald@outlook.de">EmmausWald@outlook.de</a></p>
    <p style="margin-top:2rem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">← <span class="de">Zurück zur Startseite</span><span class="en">Back to the homepage</span><span class="tr">Ana sayfaya dön</span></a></p>
  </div>
</section>

<?php get_footer(); ?>
