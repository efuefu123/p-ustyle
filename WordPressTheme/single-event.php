<?php
/*
Template Name: イベント情報個別
*/
get_header();
?>
<main>
  <article class="p-eventDetail">
    <div class="p-eventDetail__container">
      <div class="c-lowerTitle p-event__title">
        <h2 class="c-lowerTitle__main">Event</h2>
        <p class="c-lowerTitle__sub">イベント情報</p>
      </div>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <section class="p-eventDetail__content l-inner">
        <div class="p-eventDetail__head">
          <time class="p-eventDetail__date" datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.m.d'); ?></time>
          <h3 class="p-eventDetail__mainTitle"><?php the_title(); ?></h3>
        </div>
        <?php the_content(); ?>
      </section>
      <?php endwhile;?>
      <?php endif; ?>
      <!-- /.p-eventDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-eventDetail -->
  </article>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>