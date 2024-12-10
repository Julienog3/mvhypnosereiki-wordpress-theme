<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <section class="hero">
    <div class="hero-container container">
      <div class="column">
        <h1 class="hero__title"><?= get_the_title(); ?></h1>
        <p class="hero__description"><?= get_the_excerpt() ?></p>
      </div>
      <div class="picture">
        <?php the_post_thumbnail('original', array('class' => 'picture')) ?>
      </div>
    </div>
  </section>
  <img class="wave" src="<?= esc_url(get_parent_theme_file_uri() . '/images/wave_1.svg'); ?>" alt="" />
  <section class="post">
    <div class="post-container container">
      <?php the_content() ?>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>