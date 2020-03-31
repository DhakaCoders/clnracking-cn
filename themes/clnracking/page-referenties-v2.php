<?php 
/*
  Template Name: Referenties V2
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>

<?php
  $intro = get_field('intro', $thisID);
  if( $intro ):
?>
<section class="cln-rov-product-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cln-rov-product-sec-inr">
          <?php 
            if( !empty($intro['titel']) ) printf('<h2 class="cln-rov-product-sec-title">%s</h2>', $intro['titel']);
            if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
 
            $knop = $intro['knop'];
            if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
              printf('<a href="%s" target="%s">%s<i>
              <svg class="cln-rov-product-link-arrow-svg" width="10" height="14" viewBox="0 0 10 14" fill="#ffffff">
                <use xlink:href="#cln-rov-product-link-arrow-svg"></use>
              </svg> 
            </i></a>', $knop['url'], $knop['target'], $knop['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
  $rQuery = new WP_Query(array(
    'post_type' => 'referenties',
    'posts_per_page'=> -1,
    'orderby' => 'date',
    'order'=> 'desc',

  ));
  if( $rQuery->have_posts() ):
?>
<section class="cln-rov-slider-sec">
  <div class="block-1510">
    <div class="hm-referenties-sec-con hmReferentiesSecSlider" id="hmReferentiesSecSlider">
      <?php 
        while($rQuery->have_posts()): $rQuery->the_post(); 
          $roverview = get_field('overviesec', get_the_ID());
          $ricon = $roverview['featured_image'];
          $rbeschrijving = $roverview['beschrijving'];
          if(!empty( $ricon)){
            $riconsrc = cbv_get_image_src( $ricon );
          }else{
            $riconsrc = '';
          }   
      ?>
      <div class="hm-referenties-sec-con-item hm-referenties-sec-con-item-3">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-fea-img" style="background: url(<?php echo $riconsrc; ?>);"></div>
          </div>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-des">
              <?php echo wpautop( $rbeschrijving ); ?>
              <div class="hm-rsci-col-des-btns">
                <div class="hm-rsci-col-des-btn-1">
                  <a href="<?php the_permalink(); ?>">Lees meer</a>
                </div>
                <div class="hm-rsci-col-des-btn-2">
                  <a href="<?php echo esc_url(home_url('contact')); ?>">Contacteer Ons</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>

<section class="cln-rov-partner2-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cln-rov-partner2-sec-inr">
          <img src="<?php echo THEME_URI; ?>/assets/images/cln-rov-partner-sec-img-2.jpg">
          <img src="<?php echo THEME_URI; ?>/assets/images/cln-rov-partner-sec-img-3.jpg">
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  $blok_tonenverbergen = get_field('blok_tonenverbergen', $thisID);
  if( $blok_tonenverbergen ):
    $ctasec = get_field('ctasec', $thisID);
    if( $ctasec ):
      $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
      $show_telefoon = get_field('telephone', 'options');
      $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<div class="cln-rov2-ctlr">
  <section class="cr-leg-post-grid-sec-wrp">
    <div class="ftr-top-dsc-wrp">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-top-dsc">
            <?php
              if( !empty($ctasec['titel']) ) printf('<h2 class="ftr-top-dsc-title">%s</h2>', $ctasec['titel']);
              if( !empty($ctasec['beschrijving']) ) echo wpautop( $ctasec['beschrijving'] );
              $cknop = $ctasec['knop'];
              if( is_array( $cknop ) &&  !empty( $cknop['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $cknop['url'], $cknop['target'], $cknop['title']); 
              }
            ?> 
            <?php if( !empty($show_telefoon) ): ?>
            <a href="tel:<?php echo $telefoon; ?>">
              <i>
                  <svg class="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                    <use xlink:href="#ftr-telephone-icon-svg"></use>
                  </svg> 
                </i>
              <?php echo $show_telefoon; ?>
            </a>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php endif; endif; ?>
</div>
<?php 
get_footer(); 
?>