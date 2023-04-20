<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>U.Style</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_theme_file_uri( './assets/images/favicon.ico' ); ?>" />
  <!-- Adobe fonts -->
  <script>
  (function(d) {
    var config = {
        kitId: 'xbw8wvd',
        scriptTimeout: 3000,
        async: true,
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, '') + ' wf-inactive';
      }, config.scriptTimeout),
      tk = d.createElement('script'),
      f = false,
      s = d.getElementsByTagName('script')[0],
      a;
    h.className += ' wf-loading';
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || (a && a != 'complete' && a != 'loaded')) return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config);
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s);
  })(document);
  </script>
  <?php wp_head(); ?>
  <!-- // WordPressに含まれているjquery.jsを読み込まない -->
  <?php wp_deregister_script('jquery'); ?>
</head>

<body>
  <div class="site-wrapper">
    <header class="l-header">
      <div class="l-header__container">
        <div class="l-header__logo-wrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__logo">
            <picture class="l-header__logo-img">
              <source srcset="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_logo.png' ); ?>"
                media="(min-width: 768px)" class="" />
              <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_logo-sp.png' ); ?>"
                alt="U.Style.ロゴ" class="" />
            </picture>
          </a>
        </div>
        <div class="l-header__content">
          <div class="l-header__content-head">
            <h1 class="l-header__title">福岡でおしゃれな注文住宅を建てるなら、ユースタイル株式会社</h1>
          </div>
          <div class="l-header__content-foot">
            <nav class="l-header__nav">
              <ul class="l-header__nav-list">
                <li class="l-header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./concept"
                    class="l-header__nav-link">CONCEPT</a></li>
                <li class="l-header__nav-item"><a href="<?php echo get_post_type_archive_link( 'works' ); ?>"
                    class="l-header__nav-link">WORKS</a></li>
                <li class="l-header__nav-item"><a href="<?php echo get_post_type_archive_link( 'modelhouse' ); ?>"
                    class="l-header__nav-link">MODELHOUSE</a>
                </li>
                <li class="l-header__nav-item"><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>"
                    class="l-header__nav-link">VOICE</a></li>
                <li class="l-header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./company"
                    class="l-header__nav-link">COMPANY</a></li>
              </ul>
            </nav>
            <ul class="l-header__sns">
              <li class="l-header__sns-item">
                <a href="https://www.instagram.com/u_style_saho/" class="l-header__sns-link" target="_blank"
                  rel="noopener">
                  <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_icon-instagram.png' ); ?>"
                    alt="Instagramリンク" class="l-header__sns-img l-header__sns-img-instagram" />
                </a>
              </li>
              <li class="l-header__sns-item">
                <a href="https://www.youtube.com/channel/UC6KsZlzmJsxWtODz3f8Wm7Q/videos" class="l-header__sns-link"
                  target="_blank" rel="noopener"><img
                    src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_icon-youtube.png' ); ?>"
                    alt="YouTubeリンク" class="l-header__sns-img l-header__sns-img-youtube" />
                </a>
              </li>
              <li class="l-header__sns-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>./contact" class="l-header__sns-link"><img
                    src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_icon-mail.png' ); ?>"
                    alt="お問い合わせリンク" class="l-header__sns-img l-header__sns-img-mail" />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.l-header__content -->
        <button class="l-hamburger js-hamburger">
          <span class="l-hamburger-line l-hamburger-line01"></span>
          <span class="l-hamburger-line l-hamburger-line02"></span>
          <span class="l-hamburger-line l-hamburger-line03"></span>
        </button>
        <!-- /.hamburger -->
      </div>
      <div class="l-drawer-menu">
        <div class="l-drawer-menu__container">
          <button class="l-drawer-menu__close"></button>
          <ul class="l-drawer-menu__nav">
            <li class="l-drawer-menu__nav-item">
              <a class="l-drawer-menu__nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>./concept">CONCEPT</a>
            </li>
            <li class="l-drawer-menu__nav-item">
              <a class="l-drawer-menu__nav-link" href="<?php echo get_post_type_archive_link( 'works' ); ?>">WORKS</a>
            </li>
            <li class="l-drawer-menu__nav-item">
              <a class="l-drawer-menu__nav-link"
                href="<?php echo get_post_type_archive_link( 'modelhouse' ); ?>">MODELHOUSE</a>
            </li>
            <li class="l-drawer-menu__nav-item">
              <a class="l-drawer-menu__nav-link" href="<?php echo get_post_type_archive_link( 'voice' ); ?>">VOICE</a>
            </li>
            <li class="l-drawer-menu__nav-item">
              <a class="l-drawer-menu__nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>./company">COMPANY</a>
            </li>
          </ul>
          <ul class="l-drawer-menu__sns">
            <li class="l-drawer-menu__sns-item">
              <a href="https://www.instagram.com/u_style_saho/" class="l-drawer-menu__sns-link" target="_blank"
                rel="noopener">
                <img
                  src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_icon-instagram-sp.png' ); ?>"
                  alt="Instagramリンク" class="l-drawer-menu__sns-img drawer-menu__sns-img-instagram" />
              </a>
            </li>
            <li class="l-drawer-menu__sns-item">
              <a href="https://www.youtube.com/channel/UC6KsZlzmJsxWtODz3f8Wm7Q/videos" class="l-drawer-menu__sns-link"
                target="_blank" rel="noopener">
                <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_icon-youtube-sp.png' ); ?>"
                  alt="YouTubeリンク" class="l-drawer-menu__sns-img drawer-menu__sns-img-youtube" />
              </a>
            </li>
            <li class="l-drawer-menu__sns-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>./contact" class="l-drawer-menu__sns-link">
                <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-header_icon-mail-sp.png' ); ?>"
                  alt="お問い合わせリンク" class="l-drawer-menu__sns-img drawer-menu__sns-img-mail" />
              </a>
            </li>
          </ul>
        </div>
        <!-- /.drawer-menu__container -->
      </div>
      <!-- /.drawer-menu -->
    </header>