<?php 
/*
  Template Name: Diensten
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>

<section class="cln-product-des-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cln-product-des-sec-inr clearfix">
          <?php
            $intro = get_field('intro', $thisID);
            if( $intro ):
          ?>
          <div class="cln-product-des-left">
            <?php 
              if( !empty($intro['titel']) ) printf('<h2 class="cln-product-des-left-title">%s</h2>', $intro['titel']);
              if( !empty($intro['sub_titel']) ) printf('<span>%s</span>', $intro['sub_titel']);
              if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
            ?>
            <div class="cln-product-des-left-link">
              <?php 
                $knop = $intro['knop_1'];
                if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop['url'], $knop['target'], $knop['title']); 
                }
              ?>
            </div>
            <?php 
              $knop2 = $intro['knop_2'];
              if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                printf('<strong><a href="%s" target="%s">%s</a></strong>', $knop2['url'], $knop2['target'], $knop2['title']); 
              }
            ?>
          </div>
          <?php endif; ?>
        <?php 
          $dQuery = new WP_Query(array(
            'post_type' => 'diensten',
            'posts_per_page'=> -1,
            'orderby' => 'date',
            'order'=> 'desc',

          ));
          if( $dQuery->have_posts() ):
        ?>
          <div class="cln-product-des-right">
            <ul class="reset-list clearfix">
            <?php 
              while($dQuery->have_posts()): $dQuery->the_post();
                $doverview = get_field('overviesec', get_the_ID());
                $dicon = $doverview['featured_image'];
                $dbeschrijving = $doverview['short_beschrijving'];
              if(!empty( $dicon)){
                $dicontag = cbv_get_image_tag( $dicon );
              }else{
                $dicontag = '';
              }   
              $string = str_replace("","-",get_the_title());
            ?>
              <li>
                <div class="cln-product-des-right-item mHc">
                  <?php echo $dicontag; ?>
                  <h5 class="cln-product-des-right-item-title"><a class="scrollto"  data-to="#<?php echo $string; ?>" href=""><?php the_title(); ?></a></h5>
                  <?php echo wpautop( $dbeschrijving ); ?>
                  <a class="scrollto" data-to="#<?php echo $string; ?>" href="">
                  Meer Info
                    <i>
                      <svg class="cln-product-bottom-arrow-svg" width="14" height="10" viewBox="0 0 10 14" fill="#293377">
                        <use xlink:href="#cln-product-bottom-arrow-svg"></use>
                      </svg> 
                    </i>
                  </a>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
  $Query = new WP_Query(array(
    'post_type' => 'diensten',
    'posts_per_page'=> -1,
    'orderby' => 'date',
    'order'=> 'desc',

  ));
  if( $Query->have_posts() ):
?>
<div class="cln-do-product-sec-ctlr">
  <?php 
    while($Query->have_posts()): $Query->the_post();
      $overview = get_field('overviesec', get_the_ID());
      $afbeelding = $overview['afbeelding'];
      $icon = $overview['featured_image'];
    if(!empty( $icon)){
      $icontag = cbv_get_image_tag( $icon );
    }else{
      $icontag = '';
    }   
    $string = str_replace("","-",get_the_title());
  ?>
  <section class="cln-do-advice-sec" id="<?php echo $string; ?>">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="cln-do-advice-sec-wrap">
            <div class="cln-do-advice-sec-inr clearfix">
              <div class="cln-do-advice-sec-img-ctlr order-1">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <?php if( !empty($afbeelding) ): $gridsrc = cbv_get_image_src( $afbeelding );?>
                <div class="cln-do-advice-sec-img" style="background: url('<?php echo $gridsrc; ?>');">
                </div>
                <?php endif; ?>
              </div>
              <div class="cln-do-advice-sec-des order-2">
                <div class="cln-do-advice-sec-des-icon-title">
                  <?php echo $icontag; ?>
                  <h2 class="cln-do-advice-sec-des-title"><?php the_title(); ?></h2>
                </div>
                <?php if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); ?>
                <div class="cln-do-advice-sec-des-link">
                  <a href="<?php the_permalink(); ?>">Lees meer</a>
                  <?php 
                    $lknop = $overview['knop'];
                    if( is_array( $lknop ) &&  !empty( $lknop['url'] ) ){
                      printf('<a href="%s" target="%s">%s</a>', $lknop['url'], $lknop['target'], $lknop['title']); 
                    }
                  ?>
                </div>
                <strong>Ontdek oplossingen op jouw maat</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>
</div>
<?php endif; wp_reset_postdata(); ?>
<?php
$ctasec = get_field('ctasec', $thisID);
if( $ctasec ):
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<div class="cln-diensten-overview-ctlr">
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
  <?php endif; ?>
</div>
<?php get_footer(); ?>