<footer class="l-footer">
  <div class="l-footer__container l-inner">
    <div class="l-footer__content">
      <div class="l-footer__logo-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>./" class="l-footer__logo-link">
          <picture class="l-footer__logo-img">
            <source srcset="<?php echo get_theme_file_uri( './assets/images/common/cmn-footer_logo.png' ); ?>"
              media="(min-width: 768px)" class="" />
            <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-footer_logo-sp.png' ); ?>" alt=""
              class="" />
          </picture>
        </a>
      </div>
      <div class="l-footer__content">
        <ul class="l-footer__nav">
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./concept"
              class="l-footer__nav-link">コンセプト</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./quality"
              class="l-footer__nav-link">品質性能</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link( 'modelhouse' ); ?>"
              class="l-footer__nav-link">モデルハウス</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link( 'works' ); ?>"
              class="l-footer__nav-link">施工事例</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>"
              class="l-footer__nav-link">お客様の声</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link( 'staff' ); ?>"
              class="l-footer__nav-link">スタッフ紹介</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link( 'event' ); ?>"
              class="l-footer__nav-link">イベント情報</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link( 'blogpost' ); ?>"
              class="l-footer__nav-link">ブログ</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./company"
              class="l-footer__nav-link">会社概要 </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./siteMap"
              class="l-footer__nav-link">サイトマップ</a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>./contact"
              class="l-footer__nav-link">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="l-footer__copyright-wrapper">
    <small class="l-footer__copyright">Copyright &copy; <?php echo date('Y');?> U.Style. All Rights Reserved.</small>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</body>

</html>