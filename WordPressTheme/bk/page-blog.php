<?php
/*
Template Name: ブログ一覧
*/
get_header();
?>

<main>
  <section class="p-blog">
    <div class="p-blog__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Blog</h2>
        <p class="c-lowerTitle__sub">ブログ</p>
      </div>
      <div class="p-blog__content l-inner">
        <div class="p-blog__cards">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__card">
            <div class="p-blog__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-blog__cardImg" />
            </div>
            <h3 class="p-blog__cardMainTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-blog__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-blog__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__card">
            <div class="p-blog__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-blog__cardImg" />
            </div>
            <h3 class="p-blog__cardMainTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-blog__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-blog__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__card">
            <div class="p-blog__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-blog__cardImg" />
            </div>
            <h3 class="p-blog__cardMainTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-blog__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-blog__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__card">
            <div class="p-blog__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-blog__cardImg" />
            </div>
            <h3 class="p-blog__cardMainTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-blog__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-blog__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__card">
            <div class="p-blog__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-blog__cardImg" />
            </div>
            <h3 class="p-blog__cardMainTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-blog__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-blog__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__card">
            <div class="p-blog__cardImgWrapperNone">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_logo-thumbnail.png' ); ?>" alt="/" class="p-blog__cardImgNone" />
            </div>
            <h3 class="p-blog__cardMainTitle">CMSテキストCMSテキストCMSテキストCMSテキスト</h3>
            <p class="p-blog__cardDate">2022.12.7</p>
          </a>
          <!-- /.p-blog__card -->
        </div>
        <div class="p-blog__paginationWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__pagination">1</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-blog__pagination">2</a>
        </div>
      </div>
      <?php get_template_part('template/access-template');?>
    </div>
  </section>
  <!-- p-blog -->
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>