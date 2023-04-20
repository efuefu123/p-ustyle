<?php
/*
Template Name: イベント情報一覧
*/
get_header();
?>
<main>
  <section class="p-event">
    <div class="p-event__container">
      <div class="c-lowerTitle p-event__title">
        <h2 class="c-lowerTitle__main">Event</h2>
        <p class="c-lowerTitle__sub">イベント情報</p>
      </div>
      <div class="p-event__content l-inner">
        <div class="p-event__cards">
          <!-- ループ開始 -->
          <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $the_query = new WP_Query(
              array(
                'post_type'      => 'event',
                'paged' => $paged,
                'posts_per_page' => 6,
              )
            );
            ?>
          <?php if ( $the_query->have_posts() ) : ?><?php while ( $the_query->have_posts() ) : ?>
          <?php $the_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-event__card">
            <?php if(has_post_thumbnail()): ?>
            <!--投稿にアイキャッチがある場合-->
            <div class="p-event__cardImgWrapper">
              <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-event__cardImg' ,'alt' => the_title_attribute('echo=0'))); ?>
            </div>
            <?php else: ?>
            <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
            <div class="p-event__cardImgWrapper p-event__cardImgWrapperNone">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_logo-thumbnail.png' ); ?>"
                alt="<?php the_title(); ?>" class="p-event__cardImg p-event__cardImgNone" />
            </div>
            <?php endif; ?>
            <h3 class="p-event__cardTitle"><?php the_title(); ?></h3>
            <time class="p-event__cardDate" datetime="<?php the_time('Y.n.j'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>
          </a>
          <!-- /.p-event__card -->
          <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
          <!-- ループ終了 -->
        </div>
        <!-- /.p-event__cards -->
        <div class="p-event__paginationWrapper">
          <?php
                the_posts_pagination( array(
                  'mid_size' => 1,
                  'prev_text' => '<',
                  'next_text' => '>'
                ) );
              ?>
        </div>
      </div>
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-event -->
  </section>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>