<?php
/*
Template Name: スタッフ紹介
*/
get_header();
?>
<main>
  <section class="p-staff">
    <div class="p-staff__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Staff</h2>
        <p class="c-lowerTitle__sub">スタッフ紹介</p>
      </div>
      <div class="p-staff__content l-inner">
        <div class="p-staff__cards">
          <!-- ループ開始 -->
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $the_query = new WP_Query(
              array(
                'post_type'      => 'staff',
                'paged' => $paged,
                'posts_per_page' => 9,
              )
            );
            ?>
            <?php if ( $the_query->have_posts() ) : ?><?php while ( $the_query->have_posts() ) : ?> <?php $the_query->the_post(); ?>
          <div class="p-staff__card js-staff-card">
            <?php if(has_post_thumbnail()): ?>
              <!--投稿にアイキャッチがある場合-->
              <div class="p-staff__cardImgWrapper">
                  <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'p-staff__cardImg' ,'alt' => the_title_attribute('echo=0'))); ?>
              </div>
              <?php else: ?>
                <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
                <div class="p-staff__cardImgWrapper p-staff__cardImgWrapperNone">
                  <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_logo-thumbnail.png' ); ?>" alt="<?php the_title(); ?>" class="p-staff__cardImg p-staff__cardImgNone" />
                </div>
              <?php endif; ?>
            <h3 class="p-staff__cardMainTitle"><?php the_title(); ?></h3>
            <?php if( get_field('staff_subTitle') ): ?>
            <p class="p-staff__cardSubTitle"><?php the_field('staff_subTitle'); ?></p>
            <?php endif; ?>
          </div>
          <div class="p-staff-modal">
            <div class="p-staff-modal__container">
              <div class="p-staff-modal__close js-staff-overLay-close">×</div>
              <div class="p-staff-modal__media">
                <?php if( get_field('staff_img') ): ?>
                <div class="p-staff-modal__imgWrapper">
                  <?php $staff_img = get_field('staff_img'); ?>
                  <img src="<?php echo esc_url($staff_img['url']); ?>" alt="<?php echo esc_attr($staff_img['alt']); ?>" class="p-staff-modal__img" />
                </div>
                <?php endif; ?>
                <div class="p-staff-modal__body">
                  <div class="p-staff-modal__title">
                    <?php if( get_field('staff_subTitle') ): ?>
                    <p class="p-staff-modal__subTitle"><?php the_field('staff_subTitle'); ?></p>
                    <?php endif; ?>
                    <h3 class="p-staff-modal__mainTitle"><?php the_title(); ?></h3>
                  </div>
                  <?php if( get_field('staff_lead') ): ?>
                  <p class="p-staff-modal__lead"><?php the_field('staff_lead'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('staff_text') ): ?>
                  <p class="p-staff-modal__text"><?php the_field('staff_text'); ?>
                  </p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- /.p-staff__card -->
            <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
            <!-- ループ終了 -->
          <div class="p-staff__overLay js-staff-overLay">
          </div>
        </div>
        <div class="p-staff__paginationWrapper">
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
    <!-- p-staff -->
  </section>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>