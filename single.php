<?php
/**
 * Single news post.
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
        <p class="eyebrow">News</p>
        <h2><?php the_title(); ?></h2>
        <p class="muted"><time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></time></p>
      </div>
      <div class="story">
        <?php the_content(); ?>
      </div>
      <?php
    endwhile;
    ?>
    <p style="margin-top:2rem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#news">← <span class="de">Zurück zu den News</span><span class="en">Back to the news</span><span class="tr">Haberlere dön</span></a></p>
  </div>
</section>

<?php get_footer(); ?>
