<?php get_header(); ?>

<main>
  <div class="p-top">
    <div class="p-top__container">
      <section class="p-top-fv p-top__fv">
        <div class="p-top-fv__container">
          <div class="p-top-fv__slider-wrapper">
            <div class="p-top-fv__slider swiper">
              <div class="swiper-wrapper">
                <div class="p-top-fv__slide swiper-slide">
                  <picture class="p-top-fv__slide-img">
                    <source srcset="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img1.jpg' ); ?>"
                      media="(min-width: 768px)" class="p-top-fv__slide-img-lg" />
                    <img src="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img1-sp.jpg' ); ?>"
                      alt="夕暮れの注文住宅" class="p-top-fv__slide-img-sm" />
                  </picture>
                </div>
                <div class="p-top-fv__slide swiper-slide">
                  <picture class="p-top-fv__slide-img">
                    <source srcset="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img2.jpg' ); ?>"
                      media="(min-width: 768px)" class="p-top-fv__slide-img-lg" />
                    <img src="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img2-sp.jpg' ); ?>"
                      alt="夕暮れの注文住宅" class="p-top-fv__slide-img-sm" />
                  </picture>
                </div>
                <div class="p-top-fv__slide swiper-slide">
                  <picture class="p-top-fv__slide-img">
                    <source srcset="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img3.jpg' ); ?>"
                      media="(min-width: 768px)" class="p-top-fv__slide-img-lg" />
                    <img src="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img3-sp.jpg' ); ?>"
                      alt="福岡の注文住宅" class="p-top-fv__slide-img-sm" />
                  </picture>
                </div>
              </div>
            </div>
            <div class="p-top-fv__slider-pagination"></div>
          </div>
          <!-- p-top-fv__slider-wrapper -->
          <div class="p-top-fv__content">
            <picture class="p-top-fv__img-symbol">
              <source srcset="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img-symbol.png' ); ?>"
                media="(min-width: 768px)" class="" />
              <img src="<?php echo get_theme_file_uri( './assets/images/top/top-fv_img-symbol-sp.png' ); ?>" alt="/"
                class="" />
            </picture>
          </div>
        </div>
      </section>
      <!-- /.p-top-fv -->

      <section class="p-top-intro p-top__intro">
        <div class="p-top-intro__container l-inner">
          <div class="c-topTitle p-top-intro__title">
            <h2 class="c-topTitle__main p-top-intro__mainTitle">Good design <br class="u-mobile" />& High Quality.
            </h2>
          </div>
          <div class="p-top-intro__content">
            <p class="p-top-intro__lead u-anime-fadeup u-anime-fadeup1">福岡でおしゃれな<br
                class="u-mobile" />注文住宅を建てるなら、<br />一級建築士事務所の<br class="u-mobile">U.Styleへ。</p>
            <p class="p-top-intro__text u-anime-fadeup u-anime-fadeup1">
              ユースタイルは、福岡市東区に事務所を構える一級建築士事務所です。<br
                class="u-mobile" />一流の設計士がおしゃれな注文住宅をご提案。デザインの美しさだけでなく、ZEH並の高性能・ユーザビリティを併せ持つユースタイルの注文住宅をぜひご検討ください。
            </p>
          </div>
          <div class="c-btn p-top-intro__btn-wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>./concept" class="c-btn__btn p-top-intro__btn">concept</a>
          </div>
        </div>
      </section>
      <!-- /.p-top-intro -->

      <section class="p-top-belt p-top__belt">
        <div class="p-top-belt__container l-inner">
          <p class="p-top-belt__mainText">U.Style</p>
          <p class="p-top-belt__subText">architect design</p>
        </div>
      </section>
      <!-- /.p-top-belt -->

      <section class="p-top-works p-top__works">
        <div class="p-top-works__container l-inner">
          <div class="c-topTitle">
            <h2 class="c-topTitle__main">Works</h2>
            <p class="c-topTitle__sub">施工事例</p>
          </div>
          <div class="p-top-works__content">
            <p class="p-top-works__lead u-anime-fadeup u-anime-fadeup1">ユースタイル株式会社で福岡県に建てられた、おしゃれな注文住宅事例を紹介いたします。
            </p>
            <div class="p-top-works__cards">
              <!-- ループ開始 -->
              <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $the_query = new WP_Query(
                array(
                  'post_type'      => 'works',
                  'posts_per_page' => 3,
                  'paged' => $paged,
                )
              );
              ?>
              <?php if ( $the_query->have_posts() ) :?><?php while ( $the_query->have_posts() ) : ?>
              <?php $the_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="p-top-works__card u-anime-fadeup u-anime-fadeup1">
                <div class="p-top-works__card-imgWrapper">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-top-works__card-img' ,'alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <div class="p-top-works__card-tab-wrapper">
                  <?php
                  $terms = get_the_terms($post->ID, 'works_category');
                  if ($terms) :
                      foreach ($terms as $term) {
                          echo '<div class="p-top-works__card-tab">' . $term->name . '</div>';
                        }
                  endif;
                  ?>
                </div>
                <h3 class="p-top-works__card-title"><?php the_title(); ?></h3>
                <?php if( get_field('works_subTitle') ): ?>
                <p class="p-top-works__card-subTitle"><?php the_field('works_subTitle'); ?></p>
                <?php endif; ?>
              </a>
              <!-- /p-top-works__card -->
              <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="c-btn p-top-works__btn-wrapper">
            <a href="<?php echo get_post_type_archive_link( 'works' ); ?>" class="c-btn__btn">more</a>
          </div>
        </div>
      </section>
      <!-- /.p-top-works -->

      <section class="p-top-coutryardVoice p-top__coutryardVoice">
        <div class="p-top-coutryardVoice__container">
          <section class="p-top-coutryard">
            <div class="p-top-coutryard__container">
              <div class="p-top-coutryard__media">
                <div class="p-top-coutryard__img-wrapper">
                  <picture class="p-top-coutryard__img">
                    <source srcset="<?php echo get_theme_file_uri( './assets/images/top/top-courtyard_img1.jpg' ); ?>"
                      media="(min-width: 768px)" class="" />
                    <img src="<?php echo get_theme_file_uri( './assets/images/top/top-courtyard_img1-sp.jpg' ); ?>"
                      alt="注文住宅の中庭" class="" />
                  </picture>
                </div>
                <div class="p-top-coutryard__body">
                  <div class="c-topTitle">
                    <h2 class="c-topTitle__main">Courtyard</h2>
                    <p class="c-topTitle__sub">中庭のある家づくり</p>
                  </div>
                  <p class="p-top-coutryard__text u-anime-fadeup u-anime-fadeup1">
                    ユースタイル株式会社は、中庭に特化した家づくりが特徴。福岡でおしゃれな注文住宅を建てたい皆様に、中庭のある暮らしをご提案しております。中庭の実績は100棟以上。中庭のある注文住宅はぜひユースタイルへ。
                  </p>
                  <div class="c-btn p-top-coutryard__btn-wrapper">
                    <a href="<?php echo get_term_link( 'courtyard' , 'works_category' ); ?>" class="c-btn__btn">more</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- /.p-top-coutryard -->

          <section class="p-top-voice">
            <div class="p-top-voice__container">
              <div class="p-top-voice__media">
                <div class="p-top-voice__body">
                  <div class="c-topTitle p-top-voice__title">
                    <h2 class="c-topTitle__main">Voice</h2>
                    <p class="c-topTitle__sub">お客様の声</p>
                  </div>
                  <p class="p-top-voice__text u-anime-fadeup u-anime-fadeup1">
                    ユースタイル株式会社で注文住宅を建てたお客様の感想を紹介。福岡でオシャレで住み心地の良い注文住宅を建てるための参考にぜひ一度ご覧ください。
                  </p>
                  <div class="c-btn p-top-voice__btn-wrapper">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>./voice" class="c-btn__btn">more</a>
                  </div>
                </div>
                <div class="p-top-voice__img-wrapper">
                  <picture class="p-top-voice__img">
                    <source srcset="<?php echo get_theme_file_uri( './assets/images/top/top-voice_img1.jpg' ); ?>"
                      media="(min-width: 768px)" class="" />
                    <img src="<?php echo get_theme_file_uri( './assets/images/top/top-voice_img1-sp.jpg' ); ?>"
                      alt="注文住宅のリビングでくつろぐ家族" class="" />
                  </picture>
                </div>
              </div>
            </div>
          </section>
          <!-- /.p-top-voice -->
        </div>
      </section>
      <!-- /.p-top-coutryardVoice -->

      <section class="p-top-quality p-top__quality">
        <div class="p-top-quality__container l-inner">
          <div class="c-topTitle">
            <h2 class="c-topTitle__main">Quality</h2>
            <p class="c-topTitle__sub">ユースタイルの住宅性能</p>
          </div>
          <div class="p-top-quality__content">
            <p class="p-top-quality__lead u-anime-fadeup u-anime-fadeup1">
              ユースタイル株式会社のおしゃれな注文住宅は、デザイン性だけでなく、お客様が永く安心して暮らしていただくために、品質にもこだわっています。その性能はZEH並み。福岡の気候に合わせた、夏涼しく冬暖かい快適な住まいをぜひ。
            </p>
            <div class="p-top-quality__cards">
              <article class="p-top-quality__card u-anime-fadeup u-anime-fadeup1">
                <img src="<?php echo get_theme_file_uri( './assets/images/top/top-quality_img1.jpg' ); ?>"
                  alt="選べる耐震等級。高い耐震性。" class="p-top-quality__card-img" />
                <h3 class="p-top-quality__card-title">選べる耐震等級。<br class="u-mobile" />高い耐震性。</h3>
              </article>
              <article class="p-top-quality__card u-anime-fadeup u-anime-fadeup2">
                <img src="<?php echo get_theme_file_uri( './assets/images/top/top-quality_img2.jpg' ); ?>" alt=""
                  class="p-top-quality__card-img" />
                <h3 class="p-top-quality__card-title">ZEHと同等。<br class="u-mobile" />UA値0.60以下。</h3>
              </article>
              <article class="p-top-quality__card u-anime-fadeup u-anime-fadeup3">
                <img src="<?php echo get_theme_file_uri( './assets/images/top/top-quality_img3.jpg' ); ?>" alt="注文住宅を建てる
											職人" class="p-top-quality__card-img" />
                <h3 class="p-top-quality__card-title">年間24棟に限定。</h3>
              </article>
            </div>
          </div>
          <div class="c-btn p-top-quality__btn-wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>./quality" class="c-btn__btn">more</a>
          </div>
        </div>
      </section>
      <!-- /.p-top-quality -->

      <section class="p-top-blog p-top__blog">
        <div class="p-top-blog__container l-inner">
          <div class="c-topTitle p-top-blog__title">
            <h2 class="c-topTitle__main p-top-blog__mainTitle">blog</h2>
            <p class="c-topTitle__sub p-top-blog__subTitle">スタッフのブログを更新中</p>
          </div>
          <div class="p-top-blog__content">
            <!-- ループ開始 -->
            <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $the_query = new WP_Query(
                array(
                  'post_type'      => 'blogpost',
                  'posts_per_page' => 3,
                  'paged' => $paged,
                )
              );
              ?>
            <?php if ( $the_query->have_posts() ) :?><?php while ( $the_query->have_posts() ) : ?>
            <?php $the_query->the_post(); ?>
            <article class="p-top-blog__item">
              <a href="<?php the_permalink(); ?>" class="p-top-blog__link">
                <time class="p-top-blog__item-date"
                  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <h3 class="p-top-blog__item-title"><?php the_title(); ?></h3>
              </a>
            </article>
            <!-- /p-top-blog__item -->
            <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
          </div>
        </div>
      </section>
      <!-- /.p-top-blog -->

      <section class="l-access p-top__access">
        <div class="l-access__container">
          <div class="l-access__content">
            <div class="l-access__media">
              <div class="l-access__body">
                <div class="c-topTitle l-access__title">
                  <h2 class="c-topTitle__main">Access</h2>
                  <p class="c-topTitle__sub">アクセス情報</p>
                </div>
                <div class="l-access__info">
                  <p class="l-access__info-company">ユースタイル株式会社</p>
                  <p class="l-access__info-address">〒813-0034 福岡市東区多の津4丁目9番10号<br class="u-desktop" />オクダビル1階・3階</p>
                  <p class="l-access__info-fax">tel. 092-626-8637</p>
                  <p class="l-access__info-fax">fax. 092-626-8639</p>
                </div>
                <div class="l-access__info-tel-wrapper">
                  <a href="tel:092-626-86637" class="l-access__info-tel">092-626-8637</a>
                  <p class="l-access__info-time">営業時間：9時〜18時まで&emsp;<br class="u-mobile" />定休日：水曜日（火曜日不定休）</p>
                </div>
              </div>
              <div class="l-access__map-wrapper">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.2535009627372!2d130.44886731520384!3d33.62466848072437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35418fa2baae8463%3A0xf4b43b99bcff438a!2z5Lit5bqt44Gu44GC44KL5L2P44G-44GE5Ym144KKIOODpuODvOOCueOCv-OCpOODq-agquW8j-S8muekvg!5e0!3m2!1sja!2sjp!4v1675095705983!5m2!1sja!2sjp"
                  width="820" height="567" style="border: 0" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade" class="l-access__map"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.l-access -->
    </div>
  </div>
  <!-- /.p-top -->

  <div class="c-fixNav c-fixNav--top js-fix-nav">
    <a href="tel:092-626-8637" class="c-fixNav__item">
      <div class="c-fixNav__item-img-wrapper">
        <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-fixedBtn_icon-tel.png' ); ?>" alt="電話相談リンク"
          class="c-fixNav__item-img" />
      </div>
      <p class="c-fixNav__item-title">電話相談</p>
    </a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>./contact" class="c-fixNav__item">
      <div class="c-fixNav__item-img-wrapper">
        <img src="<?php echo get_theme_file_uri( './assets/images/common/cmn-fixedBtn_icon-reserve.png' ); ?>"
          alt="来場予約リンク" class="c-fixNav__item-img" />
      </div>
      <p class="c-fixNav__item-title">来場予約</p>
    </a>
  </div>
  <!-- /.c-fixNav -->

  <article class="c-fixInfo">
    <!-- ループ開始 -->
    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $the_query = new WP_Query(
        array(
          'post_type'      => 'event',
          'posts_per_page' => 1,
          'paged' => $paged,
        )
      );
      ?>
    <?php if ( $the_query->have_posts() ) :?><?php while ( $the_query->have_posts() ) : ?>
    <?php $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-fixInfo__item">
      <p class="c-fixInfo__category">EVENT</p>
      <p class="c-fixInfo__title"><?php the_title(); ?></p>
    </a>
    <?php endwhile; ?> <?php endif; ?><?php wp_reset_postdata(); ?>
  </article>
  <!-- /.c-fixInfo -->

  <div class="c-toTop c-toTop--top js-toTop">
    <div class="c-toTop__btn"></div>
  </div>
</main>

<?php get_footer(); ?>