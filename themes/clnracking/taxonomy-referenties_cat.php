<?php 
/*
  Template Name: Referenties
*/
get_header(); 
$ccat = get_queried_object();
$thisID = 420;
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
          <div class="cln-rov-product-bottom-link">
            <a href="#" class="scrollto" data-to="#cln-rv-grid-sec">
            Bekijk onze referenties
              <i>
                <svg class="cln-product-bottom-arrow-svg" width="14" height="10" viewBox="0 0 10 14" fill="#293377">
                  <use xlink:href="#cln-product-bottom-arrow-svg"></use>
                </svg> 
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="cln-rv-link-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cln-rv-link-sec-inr">
          <span>Filter op Sector:</span>
          <?php 
          $taxonomies = get_terms( array(
              'taxonomy' => 'referenties_cat',
              'hide_empty' => false
          ) );
          if ( !empty($taxonomies) ) :
          ?>
                    <ul class="reset-list">
          <?php 
          foreach( $taxonomies as $category ) {?>
            <li><a <?php echo ($category->slug == $ccat->slug)? 'class="active"': ''; ?> href="<?php echo esc_url( get_term_link( $category ) ); ?>"><?php echo $category->name; ?></a></li>
          <?php }?>
                    </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cln-rv-grid-sec" id="cln-rv-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
<?php 
$rQuery = new WP_Query(array(
  'post_type' => 'referenties',
  'posts_per_page'=> 3,
  'orderby' => 'date',
  'order'=> 'desc',
  'tax_query' => array(
        array(
            'taxonomy' => 'referenties_cat',
            'field'    => 'term_id',
            'terms'    => $ccat->term_id,
        ),
    ),

));
if( $rQuery->have_posts() ):
?>
        <div class="cln-rv-grid-sec-inr">
          <ul class="clearfix">
            <?php 
            $i = 1;
            while($rQuery->have_posts()): $rQuery->the_post();
              $roverview = get_field('overviesec', get_the_ID());
              $ricon = $roverview['featured_image'];
              $rbeschrijving = $roverview['beschrijving'];
            if(!empty( $ricon)){
              $ricontag = cbv_get_image_tag( $ricon );
              $riconsrc = cbv_get_image_src( $ricon );
            }else{
              $ricontag = '';
            }  
            if( $i == 2 ):
            ?>
            <li class="refGridItem">
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img-ctlr">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <div class="cln-rv-grid-item-img" style="background: url('<?php echo $riconsrc; ?>');">
                    
                  </div>
                </div>
                <div class="cln-rv-grid-item-des mHc">
                  <h3 class="cln-rv-grid-item-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php echo wpautop( $rbeschrijving ); ?>
                  <a href="<?php the_permalink(); ?>">Lees meer</a>
                </div>
              </div>
            </li>
            <li>
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="cln-rv-grid-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/cln-rv-grid-item-img-6.jpg');">
                    
                  </div>
                </div>
                <div class="cln-rv-grid-item-des-hover mHc">
                  <h3 class="cln-rv-grid-item-des-hover-title"><a href="#">Jij?</a></h3>
                  <p>Sed tristique sit pellentesque volutpat diam integer mi tortor eget. Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.</p>
                  <strong>Wordt één van onze succesverhalen</strong>
                  <a href="#">Contacteer Ons</a>
                </div>
              </div>
            </li>
            <?php else: ?>
            <li class="refGridItem">
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img-ctlr">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <div class="cln-rv-grid-item-img" style="background: url('<?php echo $riconsrc; ?>');">
                    
                  </div>
                </div>
                <div class="cln-rv-grid-item-des mHc">
                  <h3 class="cln-rv-grid-item-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php echo wpautop( $rbeschrijving ); ?>
                  <a href="<?php the_permalink(); ?>">Lees meer</a>
                </div>
              </div>
            </li>
          <?php endif; ?>
<?php $i++; endwhile; ?>
          </ul>
          <div class="cln-rv-grid-sec-bottom-link" style="display: none;">
            <a href="#">Meer Laden</a>
          </div>
        </div>
<?php endif; ?>
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
<div class="cln-referenties-overview-ctlr">
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