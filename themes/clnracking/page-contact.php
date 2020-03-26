<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
$spacialArry = array(".", "/", "+", " ");$replaceArray = '';
$adres = get_field('address', 'options');
$gmapsurl = get_field('google_maps', 'options');
$e_mailadres = get_field('emailaddress', 'options');
$show_telefoon = get_field('telephone', 'options');
$telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
$gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

$contact = get_field('contacteer_ons', $thisID);
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/cln-banner-sec.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-banner-inr">
              <div class="breadcrumbs-sec">
                <ul class="reset-list">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Binnenpagina</a></li>
                  <li><a href="#">Binnenpagina</a></li>
                </ul>
              </div>
              <h1 class="page-banner-title">Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


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
        <div class="cr-contact-form-block-wrp clearfix">
          <div class="contact-form-wrp clearfix">
            <div class="wpforms-container">
              <?php 
                if( !empty( $contact['form_shortcode'] ) ) echo do_shortcode($contact['form_shortcode']); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>