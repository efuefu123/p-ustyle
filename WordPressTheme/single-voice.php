<?php
/*
Template Name: お客様の声個別
*/
get_header();
?>

<main>
  <section class="p-voiceDetail">
    <div class="p-voiceDetail__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Voice</h2>
        <p class="c-lowerTitle__sub">お客様の声</p>
      </div>
      <?php if( get_field('voice_hero') ): ?>
      <?php $voice_hero = get_field('voice_hero'); ?>
      <div class="p-blogDetail__hero">
        <img src="<?php echo esc_url($voice_hero['url']); ?>" alt="<?php echo esc_attr($voice_hero['alt']); ?>"
          class="p-blogDetail__hero-img" />
      </div>
      <?php endif; ?>
      <!-- /.p-blogDetail__hero -->

      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="p-voiceDetail__content">
        <div class="p-voiceDetail__head">
          <div class="p-voiceDetail__headContainer">
            <div class="p-voiceDetail__title">
              <?php if( get_field('voice_subTitle') ): ?>
              <p class="p-voiceDetail__subTitle"><?php the_field('voice_subTitle'); ?></p>
              <?php endif; ?>
              <h3 class="p-voiceDetail__mainTitle"><?php the_title(); ?></h3>
            </div>
            <ul class="p-voiceDetail__list">
              <?php if( get_field('voice_price') ): ?>
              <li class="p-voiceDetail__item">［建物価格］<?php the_field('voice_price'); ?></li>
              <?php endif; ?>
              <?php if( get_field('voice_place') ): ?>
              <li class="p-voiceDetail__item">［建築地］<?php the_field('voice_place'); ?></li>
              <?php endif; ?>
              <?php if( get_field('voice_family') ): ?>
              <li class="p-voiceDetail__item">［家族構成］<?php the_field('voice_family'); ?></li>
              <?php endif; ?>
              <?php if( get_field('voice_siteArea') ): ?>
              <li class="p-voiceDetail__item">［敷地面積］<?php the_field('voice_siteArea'); ?></li>
              <?php endif; ?>
              <?php if( get_field('voice_floorArea') ): ?>
              <li class="p-voiceDetail__item">［延床面積］<?php the_field('voice_floorArea'); ?></li>
              <?php endif; ?>
              <?php if( get_field('voice_floorPlan') ): ?>
              <li class="p-voiceDetail__item">［間&emsp;&emsp;取］<?php the_field('voice_floorPlan'); ?></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <!-- /.p-voiceDetail__head -->

        <div class="p-voiceDetail__gallery">
          <div class="p-voiceDetail__galleryContainer">
            <?php if( get_field('voice_img1') ): ?>
            <?php $voice_img1 = get_field('voice_img1'); ?>
            <img src="<?php echo esc_url($voice_img1['url']); ?>" alt="<?php echo esc_attr($voice_img1['alt']); ?>"
              class="p-voiceDetail__galleryImg" />
            <?php endif; ?>
            <?php if( get_field('voice_img2') ): ?>
            <?php $voice_img2 = get_field('voice_img2'); ?>
            <img src="<?php echo esc_url($voice_img2['url']); ?>" alt="<?php echo esc_attr($voice_img2['alt']); ?>"
              class="p-voiceDetail__galleryImg" />
            <?php endif; ?>
            <?php if( get_field('voice_img3') ): ?>
            <?php $voice_img3 = get_field('voice_img2'); ?>
            <img src="<?php echo esc_url($voice_img3['url']); ?>" alt="<?php echo esc_attr($voice_img3['alt']); ?>"
              class="p-voiceDetail__galleryImg" />
            <?php endif; ?>
          </div>
        </div>
        <!-- /.p-voiceDetail__gallery -->

        <?php if( get_field('voice_qa') ): ?>
        <div class="p-voiceDetail__qa">
          <div class="p-voiceDetail__qaContainer">
            <ul class="p-voiceDetail__qaList">
              <?php while ( the_repeater_field('voice_qa')): ?>
              <li class="p-voiceDetail__qaItem">
                <div class="p-voiceDetail__qaHead">
                  <div class="p-voiceDetail__qaQ">
                    <p class="p-voiceDetail__qaQName">Q：</p>
                    <p class="p-voiceDetail__qaQData"><?php the_sub_field('voice_qa_q'); ?></p>
                  </div>
                  <div class="p-voiceDetail__qaA">
                    <p class="p-voiceDetail__qaAName">A：</p>
                    <p class="p-voiceDetail__qaAData"><?php the_sub_field('voice_qa_a-title'); ?></p>
                  </div>
                </div>
                <p class="p-voiceDetail__qaText">
                  <?php the_sub_field('voice_qa_a-text'); ?>
                </p>
              </li>
              <?php endwhile;?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
        <div class="p-voiceDetail__btnWrapper WP-single-paginationWrapper">
          <?php the_post_navigation ( array(
            'prev_text' => 'prev',
            'next_text' => 'next',
            ) );
          ?>
        </div>
        <!-- /.p-voiceDetail__gallery -->
      </div>
      <?php endwhile;?>
      <?php endif; ?>

      <!-- /.p-voiceDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
  </section>
  <!-- p-voiceDetail -->
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>