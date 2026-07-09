<?php
/**
 * Generic page template.
 */
get_header();
?>

<section class="section impressum-page">
  <div class="container">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <div class="section-head">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="story">
        <?php the_content(); ?>
      </div>
      <?php
    endwhile;
    ?>
    <p style="margin-top:2rem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">← <span class="de">Zurück zur Startseite</span><span class="en">Back to the homepage</span><span class="tr">Ana sayfaya dön</span></a></p>
  </div>
</section>

<?php get_footer(); ?>
