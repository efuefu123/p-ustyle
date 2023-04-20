<?php
/*
Template Name: ブログ個別
*/
get_header();
?>

<main>
  <article class="p-blogDetail">
    <div class="p-blogDetail__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Blog</h2>
        <p class="c-lowerTitle__sub">ブログ</p>
      </div>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <section class="p-blogDetail__content l-inner">
        <div class="p-blogDetail__head">
          <time class="p-blogDetail__date" datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.m.d'); ?></time>
          <h3 class="p-blogDetail__mainTitle"><?php the_title(); ?></h3>
        </div>
        <?php the_content(); ?>
      </section>
      <?php endwhile;?>
      <?php endif; ?>
      <!-- /.p-blogDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-blogDetail -->
  </article>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>