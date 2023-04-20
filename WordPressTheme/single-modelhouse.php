<?php
/*
Template Name: モデルハウス個別
*/
get_header();
?>
<main>
  <article class="p-modelHouseDetail">
    <div class="p-modelHouseDetail__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Model House</h2>
        <p class="c-lowerTitle__sub">公開中のモデルハウス</p>
      </div>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="p-modelHouseDetail__content l-inner">
        <div class="p-modelHouseDetail__title">
          <?php if( get_field('modelHouse_subTitle') ): ?>
          <p class="p-modelHouseDetail__sub"><?php the_field('modelHouse_subTitle'); ?></p>
          <?php endif; ?>
          <h3 class="p-modelHouseDetail__main"><?php the_title(); ?></h3>
        </div>
        <div class="p-modelHouseDetail__media">
          <?php if( get_field('modelHouse_text') ): ?>
          <p class="p-modelHouseDetail__description">
            <?php the_field('modelHouse_text'); ?>
          </p>
          <?php endif; ?>
          <div class="p-modelHouseDetail__body">
            <ul class="p-modelHouseDetail__list">
              <?php if( get_field('modelHouse_period') ): ?>
              <li class="p-modelHouseDetail__item">［期&emsp;間］<?php the_field('modelHouse_period'); ?></li>
              <?php endif; ?>
              <?php if( get_field('modelHouse_reserve') ): ?>
              <li class="p-modelHouseDetail__item">［場&emsp;<?php the_field('modelHouse_reserve'); ?></li>
              <?php endif; ?>
              <?php if( get_field('modelHouse_place') ): ?>
              <li class="p-modelHouseDetail__item">［ご予約］<?php the_field('modelHouse_place'); ?>
              </li>
              <?php endif; ?>
              <?php if( get_field('modelHouse_price') ): ?>
              <li class="p-modelHouseDetail__item">［販売価格］<?php the_field('modelHouse_price'); ?></li>
              <?php endif; ?>
              <?php if( get_field('modelHouse_area') ): ?>
              <li class="p-modelHouseDetail__item">［敷地面積］<?php the_field('modelHouse_area'); ?></li>
              <?php endif; ?>
              <?php if( get_field('modelHouse_destrict') ): ?>
              <li class="p-modelHouseDetail__item">［校区］<?php the_field('modelHouse_destrict'); ?></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="p-modelHouseDetail__btnWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>./contact"
            class="p-modelHouseDetail__btn c-btn__btn">ご予約はこちら</a>
        </div>

        <?php if( get_field('modelHouse_imgs') ): ?>
        <?php while ( the_repeater_field('modelHouse_imgs')): ?>
        <?php $modelHouse_img = get_sub_field('modelHouse_img'); ?>
        <img src="<?php echo esc_url($modelHouse_img['url']); ?>" alt="<?php echo esc_attr($modelHouse_img['alt']); ?>"
          class="p-modelHouseDetail__img" />
        <?php endwhile;?><?php
          $post_id = get_the_ID();
        ?>
        <div class="p-modelHouseDetail__btnWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/?post_id=<?php echo $post_id ?>"
            class="p-modelHouseDetail__btn c-btn__btn">ご予約はこちら</a>
        </div>
        <?php endif; ?>
      </div>
      <?php endwhile;?>
      <?php endif; ?>
      <!-- /.p-modelHouseDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-modelHouseDetail -->
  </article>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>