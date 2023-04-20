<?php
/*
Template Name: ブログ個別
*/
get_header();
?>

<main>
  <article class="p-blogDetail">
    <div class="p-blogDetail__container">
      <div class="c-lowerTitle">
        <h2 class="c-lowerTitle__main">Blog</h2>
        <p class="c-lowerTitle__sub">ブログ</p>
      </div>
      <section class="p-blogDetail__content l-inner">
        <div class="p-blogDetail__head">
          <p class="p-blogDetail__date">2022.12.7</p>
          <h3 class="p-blogDetail__mainTitle">ブログタイトルが入ります。</h3>
        </div>
        <p class="p-blogDetail__text">
          これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。
        </p>
        <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn_imgRectangle-dummy3.jpg' ); ?>" alt="/" class="p-blogDetail__img" />
        <p class="p-blogDetail__text">
          これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。
        </p>
        <p class="p-blogDetail__text">
          これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。これはダミー原稿です。
        </p>
      </section>
      <!-- /.p-blogDetail__content -->
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-blogDetail -->
  </article>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>