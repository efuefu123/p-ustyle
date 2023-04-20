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
      <div class="p-modelHouseDetail__content l-inner">
        <div class="p-modelHouseDetail__title">
          <p class="p-modelHouseDetail__sub">CMSテキスト</p>
          <h3 class="p-modelHouseDetail__main">CMSテキスト</h3>
        </div>
        <div class="p-modelHouseDetail__media">
          <p class="p-modelHouseDetail__description">
            CMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキスト
          </p>
          <div class="p-modelHouseDetail__body">
            <ul class="p-modelHouseDetail__list">
              <li class="p-modelHouseDetail__item">［期&emsp;間］CMSテキスト</li>
              <li class="p-modelHouseDetail__item">［場&emsp;所］CMSテキスト</li>
              <li class="p-modelHouseDetail__item">［ご予約］<br />CMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキストCMSテキスト
              </li>
              <li class="p-modelHouseDetail__item">［販売価格］CMSテキスト</li>
              <li class="p-modelHouseDetail__item">［敷地面積］CMSテキスト</li>
              <li class="p-modelHouseDetail__item">［校区］CMSテキスト</li>
            </ul>
          </div>
        </div>
        <div class="p-modelHouseDetail__btnWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-modelHouseDetail__btn c-btn__btn">ご予約はこちら</a>
        </div>
        <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy1.jpg' ); ?>" alt="/" class="p-modelHouseDetail__img" />
        <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy1.jpg' ); ?>" alt="/" class="p-modelHouseDetail__img" />
        <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy1.jpg' ); ?>" alt="/" class="p-modelHouseDetail__img" />
        <div class="p-modelHouseDetail__btnWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-modelHouseDetail__btn c-btn__btn">ご予約はこちら</a>
        </div>
      </div>
      <!-- /.p-modelHouseDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-modelHouseDetail -->
  </article>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>