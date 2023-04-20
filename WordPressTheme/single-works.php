<?php
/*
Template Name: 施工事例個別
*/
get_header();
?>
<main>
  <article class="p-worksDetail">
    <div class="p-worksDetail__container">
      <div class="c-lowerTitle p-works__title">
        <h2 class="c-lowerTitle__main">Works</h2>
        <p class="c-lowerTitle__sub">施工事例</p>
      </div>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <section class="p-worksDetail__content">
        <?php if( get_field('works_imgs') ): ?>
        <div class="p-worksDetail__head">
          <div class="swiper p-worksDetail-slide__main">
            <div class="swiper-wrapper p-worksDetail-slide__mainContainer">
              <?php while ( the_repeater_field('works_imgs')): ?>
              <?php $works_img = get_sub_field('works_img'); ?>
              <div class="swiper-slide p-worksDetail-slide__mainSlide">
                <img src="<?php echo esc_url($works_img['url']); ?>" alt="<?php echo esc_attr($works_img['alt']); ?>"
                  class="p-worksDetail-slide__mainSlideImg" />
              </div>
              <?php endwhile;?>
            </div>
          </div>
          <div class="p-worksDetail-slide__thumbWrapper">
            <div class="swiper p-worksDetail-slide__thumb">
              <div class="swiper-wrapper p-worksDetail-slide__thumbContainer">
                <?php while ( the_repeater_field('works_imgs')): ?>
                <?php if( get_sub_field('works_img') ): ?>
                <?php $works_img = get_sub_field('works_img'); ?>
                <div class="swiper-slide p-worksDetail-slide__thumbSlide">
                  <img src="<?php echo esc_url($works_img['url']); ?>" alt="<?php echo esc_attr($works_img['alt']); ?>"
                    class="p-worksDetail-slide__thumbSlideImg" />
                </div>
                <?php endif; ?>
                <?php endwhile;?>
              </div>
            </div>
            <div class="p-worksDetail-slide__thumb-prevBtn"></div>
            <div class="p-worksDetail-slide__thumb-nextBtn"></div>
          </div>
        </div>
        <?php endif; ?>
        <!-- /.p-worksDetail__head -->
        <div class="p-worksDetail__body">
          <div class="p-worksDetail__bodyTitle">
            <?php if( get_field('works_subTitle') ): ?>
            <p class="p-worksDetail__subTitle"><?php the_field('works_subTitle'); ?></p>
            <?php endif; ?>
            <h3 class="p-worksDetail__mainTitle"><?php the_title(); ?></h3>
          </div>
          <div class="p-worksDetail__media">
            <?php if( get_field('works_text') ): ?>
            <div class="p-worksDetail__description">
              <?php the_field('works_text'); ?>
            </div>
            <?php endif; ?>
            <div class="p-worksDetail__data">
              <ul class="p-worksDetail__list">
                <?php if( get_field('works_price') ): ?>
                <li class="p-worksDetail__item">［建物価格］<?php the_field('works_price'); ?></li>
                <?php endif; ?>
                <?php if( get_field('works_address') ): ?>
                <li class="p-worksDetail__item">［住&emsp;&emsp;所］<?php the_field('works_address'); ?></li>
                <?php endif; ?>
                <?php if( get_field('works_family') ): ?>
                <li class="p-worksDetail__item">［家族構成］<?php the_field('works_family'); ?></li>
                <?php endif; ?>
                <?php if( get_field('works_area') ): ?>
                <li class="p-worksDetail__item">［施工面積］<?php the_field('works_area'); ?></li>
                <?php endif; ?>
                <?php if( get_field('works_floorPlan') ): ?>
                <li class="p-worksDetail__item">［間&emsp;&emsp;取］<?php the_field('works_floorPlan'); ?></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- /.p-worksDetail__body -->
        <div class="p-worksDetail__btnWrapper WP-single-paginationWrapper">
          <?php the_post_navigation ( array(
          'prev_text' => 'prev',
          'next_text' => 'next',
          ) );
        ?>
        </div>
      </section>
      <?php endwhile;?>
      <?php endif; ?>
      <!-- /.p-worksDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-worksDetail -->
  </article>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>