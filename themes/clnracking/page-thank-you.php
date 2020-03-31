<?php
/*
  Template Name: Thank You
*/
 get_header(); 
$thisID = get_the_ID();
$spacialArry = array(".", "/", "+", " ");$replaceArray = '';
$e_mailadres = get_field('emailaddress', 'options');
$show_telefoon = get_field('telephone', 'options');
$telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));

$contact = get_field('contacteer_ons', $thisID);
$bericht = get_field('bericht', $thisID);
 ?>
<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-form-dsc-wrp">
          <div class="contact-form-dsc">
          <?php 
            if(!empty($contact['titel'])) printf('<div><strong class="contact-page-entry-title">%s</strong></div>', $contact['titel']);
            if(!empty($contact['beschrijving'])) echo wpautop( $contact['beschrijving'], true );
          ?>
          </div>
          <div class="ftr-contact-info">
            <?php if( !empty($telefoon) ): ?>
            <a class="ftr-phone" href="tel:<?php echo $telefoon; ?>">
              <i>
                <svg class="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                  <use xlink:href="#ftr-telephone-icon-svg"></use>
                </svg> 
              </i>
              <?php echo $show_telefoon; ?></a>
              <?php endif; ?>
              <?php if( !empty($e_mailadres) ): ?>
              <a class="ftr-email" href="mailto:<?php echo $e_mailadres; ?>">
              <i>
                <svg class="ftr-email-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                  <use xlink:href="#ftr-email-icon-svg"></use>
                </svg> 
              </i>
              <?php echo $e_mailadres; ?>
              </a>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-msg-wrp">
          <?php if( !empty($bericht['icon']) ): ?>
          <?php echo cbv_get_image_tag($bericht['icon']); ?>
          <?php endif; ?>
          <?php 
            if(!empty($bericht['titel'])) printf('<h2 class="contact-msg-title">%s</h2>', $bericht['titel']);
            if(!empty($bericht['beschrijving'])) echo wpautop( $bericht['beschrijving'], true );
          ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <i>
              <svg class="contact-msg-arrow-svg" width="15" height="13" viewBox="0 0 15 13" fill="#293377">
                <use xlink:href="#contact-msg-arrow-svg"></use>
              </svg> 
            </i>
            Home
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>