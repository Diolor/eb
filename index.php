<?php
/**
 * Fallback template (post archives, search, etc.).
 */
get_header();
?>

<section class="section impressum-page">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">News</p>
      <h2><span class="de">Aktuelles aus der Initiative</span><span class="en">Latest from the initiative</span><span class="tr">Girişimden son haberler</span></h2>
    </div>
    <div class="news-list">
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          ?>
          <article class="news-item">
            <div class="news-meta"><time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></time></div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="news-content">
              <?php the_excerpt(); ?>
            </div>
          </article>
          <?php
        endwhile;
        the_posts_pagination();
      else :
        ?>
        <p class="muted">
          <span class="de">Keine Beiträge gefunden.</span>
          <span class="en">No posts found.</span>
          <span class="tr">Gönderi bulunamadı.</span>
        </p>
        <?php
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
