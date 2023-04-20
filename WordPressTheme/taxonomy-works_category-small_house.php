<?php
/*
Template Name: 施工事例一覧
*/
get_header();
?>
<main>
  <section class="p-works">
    <div class="p-works__container">
      <div class="c-lowerTitle p-works__title">
        <h2 class="c-lowerTitle__main">Works</h2>
        <p class="c-lowerTitle__sub">施工事例</p>
      </div>
      <div class="p-works__content l-inner">
        <div class="p-works__head">
          <p class="p-works__lead">下のボタンをクリックすると「絞り込み検索」ができます。</p>
          <div class="p-works__categories">
            <a href="<?php echo get_term_link( 'courtyard' , 'works_category' ); ?>" class="p-works__category">中&emsp;庭</a>
            <a href="<?php echo get_term_link( 'one_storied_house', 'works_category' ); ?>"  class="p-works__category">平&emsp;屋</a>
            <a href="<?php echo get_term_link( 'two_storied_house', 'works_category' ); ?>"  class="p-works__category">新平屋（2階建て）</a>
            <a href="<?php echo get_term_link( 'standard_housing', 'works_category' ); ?>"  href="<?php echo get_term_link( 'standard_housing', 'works_category' ); ?>"  class="p-works__category">規格住宅</a>
            <a href="<?php echo get_term_link( 'small_house', 'works_category' ); ?>"  class="p-works__category">狭小住宅</a>
            <a href="<?php echo get_term_link( 'renovation', 'works_category' ); ?>"  class="p-works__category">リフォーム</a>
          </div>
        </div>
        <div class="p-works__cards">
          <!-- ループ開始 -->
            <?php
            $the_query = new WP_Query(
              array(
                'post_type'      => 'works',
                'tax_query' => array(
                  array(
                      'taxonomy' => 'works_category',
                      'field' => 'slug',
                      'terms' => 'small_house'
                  ),
                ),
                'paged' => $paged,
                'posts_per_page' => 6,
                'order' => 'desc',
              )
            );
            ?>
            <?php if ( $the_query->have_posts() ) : query_posts('posts_per_page=6') ?><?php while ( $the_query->have_posts() ) : ?> <?php $the_query->the_post(); ?>
          <section class="p-works__card">
            <a href="<?php the_permalink(); ?>" class="p-works__cardLink">
              <div class="p-works__cardImgWrapper">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-works__img' ,'alt' => the_title_attribute('echo=0'))); ?>
              </div>
              <div class="p-works__cardCategories">
                <?php
                  $terms = get_the_terms($post->ID, 'works_category');
                  if ($terms) :
                      foreach ($terms as $term) {
                          echo '<div class="p-works__cardCategory">' . $term->name . '</div>';
                        }
                  endif;
                  ?>
              </div>
              <h3 class="p-works__cardMainTitle"><?php the_title(); ?></h3>
              <?php if( get_field('works_subTitle') ): ?>
              <p class="p-works__cardSubTitle"><?php the_field('works_subTitle'); ?></p>
              <?php endif; ?>
            </a>
          </section>
          <!-- /.p-works__card -->
            <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
            <!-- ループ終了 -->
        </div>
        <!-- /.p-works__cards -->
        <div class="p-works__paginationWrapper">
        <?php
          the_posts_pagination( array(
            'mid_size' => 1,
            'prev_text' => 'prev',
            'next_text' => 'next'
          ) );
          ?>
        </div>
      </div>
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-works -->
  </section>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>