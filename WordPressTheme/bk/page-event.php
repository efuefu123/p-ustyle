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
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__card">
            <div class="p-event__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-event__cardImg" />
            </div>
            <h3 class="p-event__cardTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-event__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-event__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__card">
            <div class="p-event__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-event__cardImg" />
            </div>
            <h3 class="p-event__cardTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-event__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-event__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__card">
            <div class="p-event__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-event__cardImg" />
            </div>
            <h3 class="p-event__cardTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-event__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-event__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__card">
            <div class="p-event__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-event__cardImg" />
            </div>
            <h3 class="p-event__cardTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-event__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-event__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__card">
            <div class="p-event__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-event__cardImg" />
            </div>
            <h3 class="p-event__cardTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-event__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-event__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__card">
            <div class="p-event__cardImgWrapperNone">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_logo-thumbnail.png' ); ?>" alt="/" class="p-event__cardImgNone" />
            </div>
            <h3 class="p-event__cardTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-event__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-event__card -->
        </div>
        <div class="p-event__paginationWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__pagination">1</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-event__pagination">2</a>
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