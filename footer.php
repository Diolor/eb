<!-- ======================= FOOTER ======================= -->
<footer class="footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/EmmausWald_logo_centered.png" alt="Emmauswald bleibt! Logo">
      <p>
        <span class="de">Initiative Emmauswald bleibt! – Gemeinsam für den Erhalt unseres Stadtwaldes.</span>
        <span class="en">Initiative Emmauswald bleibt! – Together for the preservation of our city forest.</span>
        <span class="tr">Emmauswald bleibt! Girişimi – Şehir ormanımızın korunması için hep birlikte.</span>
      </p>
      <p class="hashtags">#EmmausWaldBleibt #WaldStattAsphalt #AlleBäumeBleiben</p>
    </div>
    <nav class="footer-nav">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#wald"><span class="de">Der Wald</span><span class="en">The Forest</span><span class="tr">Orman</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#forderungen"><span class="de">Forderungen</span><span class="en">Demands</span><span class="tr">Talepler</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#news"><span class="de">News</span><span class="en">News</span><span class="tr">Haberler</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#presse"><span class="de">Pressespiegel</span><span class="en">Press review</span><span class="tr">Basında biz</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#spenden"><span class="de">Spenden</span><span class="en">Donate</span><span class="tr">Bağış</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#material"><span class="de">Material</span><span class="en">Material</span><span class="tr">Materyal</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#bilder"><span class="de">Bilder</span><span class="en">Gallery</span><span class="tr">Galeri</span></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#kontakt"><span class="de">Kontakt</span><span class="en">Contact</span><span class="tr">İletişim</span></a>
      <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a>
    </nav>
  </div>
  <div class="footer-bottom">
    <p>© <span id="year"><?php echo esc_html( date_i18n( 'Y' ) ); ?></span> Initiative Emmauswald bleibt! · <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a></p>
    <p class="credit">Made with 💚 by <a href="https://github.com/Diolor" target="_blank" rel="noopener">diolor</a></p>
  </div>
</footer>

<!-- ======================= LIGHTBOX ======================= -->
<div class="lightbox" id="lightbox" aria-hidden="true">
  <button class="lb-close" aria-label="Schließen / Close">×</button>
  <button class="lb-prev" aria-label="Vorheriges Bild / Previous image">‹</button>
  <img src="" alt="">
  <button class="lb-next" aria-label="Nächstes Bild / Next image">›</button>
</div>

<a class="to-top" href="#top" aria-label="Nach oben / Back to top">↑</a>

<?php wp_footer(); ?>
</body>
</html>
