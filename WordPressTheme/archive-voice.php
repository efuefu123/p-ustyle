<?php
/*
Template Name: お客様の声一覧
*/
get_header();
?>

<main>
  <section class="p-voice">
    <div class="p-voice__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Voice</h2>
        <p class="c-lowerTitle__sub">お客様の声</p>
      </div>
      <div class="p-voice__content l-inner">
        <div class="p-voice__cards">
          <!-- ループ開始 -->
          <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $the_query = new WP_Query(
              array(
                'post_type'      => 'voice',
                'paged' => $paged,
                'posts_per_page' => 6,
              )
            );
            ?>
            <?php if ( $the_query->have_posts() ) :?><?php while ( $the_query->have_posts() ) : ?> <?php $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="p-voice__card">
            <?php if(has_post_thumbnail()): ?>
                <!--投稿にアイキャッチがある場合-->
                <div class="p-voice__cardImgWrapper">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-voice__cardImg' ,'alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <?php else: ?>
                  <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
                  <div class="p-voice__cardImgWrapper p-voice__cardImgWrapperNone">
                    <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_logo-thumbnail.png' ); ?>" alt="<?php the_title(); ?>" class="p-voice__cardImg p-voice__cardImgNone" />
                  </div>
                <?php endif; ?>
              <h3 class="p-voice__cardMainTitle"><?php the_title(); ?></h3>
              <time class="p-voice__cardDate" datetime="<?php the_time('Y.n.j'); ?>">
                <?php the_time('Y.m.d'); ?>
              </time>
            </a>
            <!-- /.p-voice__card -->
            <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
            <!-- ループ終了 -->
          </div>
          <!-- /.p-voice__cards -->
        <div class="p-voice__paginationWrapper">
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
    <!-- p-voice -->
  </section>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>