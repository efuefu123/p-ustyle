<?php
/*
Template Name: イベント予約・その他お問い合わせ
*/
get_header();
?>
<?php ?>
<main>
  <div class="p-contact">
    <div class="p-contact__container">
      <section class="p-contact-reserve">
        <div class="p-contact-reserve__container">
          <div class="c-lowerTitle p-contact__title">
            <h2 class="c-lowerTitle__main">Reserve</h2>
            <p class="c-lowerTitle__sub">イベント予約</p>
          </div>
          <div class="p-contact-reserve__content l-inner">
            <div class="p-contact-reserve__head">
              <p class="p-contact-reserve__lead">定員になり次第<br class="u-mobile" />締め切らせていただきます。</p>
              <p class="p-contact-reserve__text">予約フォーム送信後、スタッフから空き状況を<br class="u-mobile" />お電話させていただき「予約完了」となります。</p>
              <div class="p-contact-reserve__flowWrapper">
                <div class="p-contact-reserve__flow">
                  <div class="p-contact-reserve__flowImgWrapper">
                    <img src="<?php echo get_theme_file_uri( './assets/images/contact/contact_icon1.png' ); ?>"
                      alt="STEP1 入力して送信" class="p-contact-reserve__flowImg" />
                  </div>
                  <div class="p-contact-reserve__step">STEP1</div>
                  <p class="p-contact-reserve__flowTitle">入力して<br />送信</p>
                </div>
                <div class="p-contact-reserve__flow">
                  <div class="p-contact-reserve__flowImgWrapper">
                    <img src="<?php echo get_theme_file_uri( './assets/images/contact/contact_icon2.png' ); ?>"
                      alt="STEP2 空き状況をお電話します" class="p-contact-reserve__flowImg" />
                  </div>
                  <div class="p-contact-reserve__step">STEP2</div>
                  <p class="p-contact-reserve__flowTitle">空き状況を<br />お電話します</p>
                </div>
                <div class="p-contact-reserve__flow">
                  <div class="p-contact-reserve__flowImgWrapper">
                    <img src="<?php echo get_theme_file_uri( './assets/images/contact/contact_icon3.png' ); ?>"
                      alt="STEP3 空き状況をお電話します" class="p-contact-reserve__flowImg" />
                  </div>
                  <div class="p-contact-reserve__step">STEP3</div>
                  <p class="p-contact-reserve__flowTitle">日程を調整後、<br />予約完了</p>
                </div>
              </div>
            </div>
            <!-- /.p-contact-reserve__head -->
            <?php echo do_shortcode('[mwform_formkey key="169"]'); ?>
          </div>
        </div>
      </section>
      <!-- /.p-contact-reserve -->

      <section class="p-contact-contact">
        <div class="p-contact-contact__container">
          <div class="c-lowerTitle p-contact-contact__title">
            <h2 class="c-lowerTitle__main">Contact</h2>
            <p class="c-lowerTitle__sub">その他 お問い合わせ</p>
          </div>
          <div class="p-contact-contact__content l-inner">
            <?php echo do_shortcode('[mwform_formkey key="170"]'); ?>
          </div>
        </div>
      </section>
      <!-- /.p-contact-contact -->

      <?php get_template_part('template/access-template');?>
    </div>
  </div>
  <!-- p-contact -->
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>