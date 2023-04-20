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
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__card">
            <div class="p-voice__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-voice__cardImg" />
            </div>
            <h3 class="p-voice__cardMainTitle">CMSテキスト</h3>
            <p class="p-voice__cardDate">2022.12.04</p>
          </a>
          <!-- /.p-voice__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__card">
            <div class="p-voice__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-voice__cardImg" />
            </div>
            <h3 class="p-voice__cardMainTitle">CMSテキスト</h3>
            <p class="p-voice__cardDate">2022.12.04</p>
          </a>
          <!-- /.p-voice__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__card">
            <div class="p-voice__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-voice__cardImg" />
            </div>
            <h3 class="p-voice__cardMainTitle">CMSテキスト</h3>
            <p class="p-voice__cardDate">2022.12.04</p>
          </a>
          <!-- /.p-voice__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__card">
            <div class="p-voice__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-voice__cardImg" />
            </div>
            <h3 class="p-voice__cardMainTitle">CMSテキスト</h3>
            <p class="p-voice__cardDate">2022.12.04</p>
          </a>
          <!-- /.p-voice__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__card">
            <div class="p-voice__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-voice__cardImg" />
            </div>
            <h3 class="p-voice__cardMainTitle">CMSテキスト</h3>
            <p class="p-voice__cardDate">2022.12.04</p>
          </a>
          <!-- /.p-voice__card -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__card">
            <div class="p-voice__cardImgWrapper">
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy2.jpg' ); ?>" alt="/" class="p-voice__cardImg" />
            </div>
            <h3 class="p-voice__cardMainTitle">CMSテキスト</h3>
            <p class="p-voice__cardDate">2022.12.04</p>
          </a>
          <!-- /.p-voice__card -->
        </div>
        <div class="p-voice__paginationWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__pagination">1</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-voice__pagination">2</a>
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