<?php
/*
Template Name: イベント予約・その他お問い合わせサンクス
*/
get_header();
?>
<main>
  <div class="p-contactThanks">
    <div class="p-contactThanks__container">
      <div class="c-lowerTitle p-contact__title">
        <h2 class="c-lowerTitle__main">Reserve</h2>
        <p class="c-lowerTitle__sub">イベント予約</p>
      </div>
      <div class="p-contactThanks__content l-inner">
        <p class="p-contactThanks__head">お問い合わせ<br class="u-mobile" />ありがとうございます。<br />送信が完了しました。</p>
        <span class="p-contactThanks__border"></span>
        <p class="p-contactThanks__text">
          ご記入いただきました情報は、<br
            class="u-mobile" />無事に送信されました。<br />確認のため、お客様に自動返信メールをお送りしております。<br />4営業日以内に返信がない場合は、大変お手数ですが電話にてご連絡ください。
        </p>
      </div>
      <?php get_template_part('template/access-template');?>
    </div>
    <!-- p-contactThanks -->
  </div>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>


<?php get_footer(); ?>