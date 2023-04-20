<?php
/*
Template Name: モデルハウス一覧
*/
get_header();
?>
<main>
  <section class="p-modelHouse">
    <div class="p-modelHouse__container">
      <div class="p-modelHouse-list p-modelHouse__list">
        <div class="p-modelHouse-list__container l-inner">
          <div class="c-lowerTitle">
            <h2 class="c-lowerTitle__main">Model House</h2>
            <p class="c-lowerTitle__sub">公開中のモデルハウス</p>
          </div>
          <div class="p-modelHouse-list__content">
            <p class="p-modelHouse-list__lead">現在公開中のモデルハウスを紹介します。<br />ご見学予約はお問い合わせフォームより<br class="u-mobile" />お願いいたします。
            </p>
            <div class="p-modelHouse-list__cards">
          <!-- ループ開始 -->
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $the_query = new WP_Query(
              array(
                'post_type'      => 'modelhouse',
                'posts_per_page' => 6,
                'paged' => $paged,
              )
            );
            ?>
            <?php if ( $the_query->have_posts() ) : query_posts('posts_per_page=6') ?><?php while ( $the_query->have_posts() ) : ?> <?php $the_query->the_post(); ?>
              <article class="p-modelHouse-list__card">
                <a href="<?php the_permalink(); ?>" class="p-modelHouse-list__cardLink">
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-modelHouse-list__cardImg' ,'alt' => the_title_attribute('echo=0'))); ?>
                  <?php endif; ?>
                  <?php if( get_field('modelHouse_subTitle')) : ?>
                  <p class="p-modelHouse-list__cardSubTitle"><?php the_field('modelHouse_subTitle'); ?></p>
                  <?php endif; ?>
                  <h3 class="p-modelHouse-list__cardTitle"><?php the_title(); ?></h3>
                  <div class="p-modelHouse-list__cardCategories">
                    <?php
                      $terms = get_the_terms($post->ID, 'modelhouse_category');
                      if ($terms) :
                          foreach ($terms as $term) {
                            $termSlug=$term->slug;
                            if ($termSlug === 'sale' || $termSlug === 'tour_in_progress') {
                              echo '<div class="p-modelHouse-list__cardCategory __cardCategory--yellow">' . $term->name . '</div>';
                            } else {
                              echo '<div class="p-modelHouse-list__cardCategory __cardCategory--gray">' . $term->name . '</div>';
                            }
                          }
                      endif;
                      ?>
                  </div>
                </a>
              </article>
              <!-- /.p-modelHouse-list__card -->
            <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
            <!-- ループ終了 -->
            </div>
            <!-- /.p-modelHouse-list__cards -->
            <div class="p-modelHouse-list__btnWrapper">
              <?php
                the_posts_pagination( array(
                  'mid_size' => 1,
                  'prev_text' => '<',
                  'next_text' => '>'
                ) );
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- /.p-modelHouse-list -->

      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-modelHouse -->
  </section>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>