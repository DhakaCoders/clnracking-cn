<?php get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<?php
  $intro = get_field('intro', $thisID);
  if( $intro ):
    $inleft = $intro['lefts'];
    $inright = $intro['rights'];
?>
<section class="cr-leg-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-fancy-slider-wrp clearfix">
          <div class="cr-fancy-slider-img order-2">
            <div class="cr-fancy-slider">
              <?php 
                $galerij = $inright['galerij'];
                $vposter = $inright['video_poster'];
                $vurl = $inright['video_url'];
                if( !empty($vposter) ):   
              ?>
              <div class="cr-fancy-slide-item">
                <div class="cr-fancy-slide-item-img">
                  <?php if( !empty($vurl) ): ?>
                  <a data-fancybox href="<?php echo $vurl; ?>">
                    <?php echo cbv_get_image_tag($vposter, 'gallery'); ?>
                    <span>
                      <i>
                        <svg class="play-icon-white-svg" width="65" height="65" viewBox="0 0 65 65" fill="#ffffff">
                          <use xlink:href="#play-icon-white-svg"></use>
                        </svg> 
                      </i>
                    </span>
                    <em>
                      <svg class="vdo-capter-icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="#ffffff">
                        <use xlink:href="#vdo-capter-icon-svg"></use>
                      </svg>
                    </em>
                    </a>
                    <?php else: ?>
                      <?php echo cbv_get_image_tag($vposter, 'gallery'); ?>
                    <?php endif; ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="cr-fancy-slider-pagi clearfix">
              <?php if( $galerij ): ?>
              <?php foreach( $galerij as $galeri ): ?>
              <div class="cr-fancy-slide-pagi-item">
                <div class="cr-fancy-slide-pagi-item-img">
                  <?php echo cbv_get_image_tag($galeri['id'], 'galleryThumb'); ?>
                </div>
              </div>
               <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="cr-fancy-dsc-rgt order-1">
            <div class="cr-fancy-dsc">
              <?php
              if( !empty($inleft['titel']) ) printf('<h3 class="cr-fancy-title">%s</h2>', $inleft['titel']);
              if( !empty($inleft['sub_titel']) ) printf('<span>%s</span>', $inleft['sub_titel']);
              if( !empty($inleft['beschrijving']) ) echo wpautop( $inleft['beschrijving'] );
              $knop1 = $inleft['knop'];
              if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop1['url'], $knop1['target'], $knop1['title']); 
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
  $showhide_tabs = get_field('showhide_tabs', $thisID);
  if( $showhide_tabs ):
    $tabs = get_field('tabs', $thisID);
    if( $tabs ):
?>
<section class="cr-leg-tabs-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-leg-tabs-wrp">
          <div class="cr-leg-tabs">
            <ul class="clearfix tabs-menu">
              <?php 
              foreach( $tabs as $tab ): 
                $strrepl = str_replace(" ", "-", $tab['title'])
              ?>
              <li><a href="#cr-tabs"><?php echo $tab['title']; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php 
            foreach( $tabs as $tab ): 
              $strrepl = str_replace(" ", "-", $tab['title']);
              $tcontent = $tab['tab_content'];
            ?>
          <div class="cr-tabs">
            <div class="cr-tab-dsc-wrp clearfix">
              <div class="cr-tab-dsc-rgt">
                <?php if( !empty($tcontent['beschrijving2']) ) echo wpautop( $tcontent['beschrijving2'] ); ?>
                <div class="cr-fancy-slide-item-img">
                  <?php 
                $tabvposter = $tcontent['video_poster'];
                $tabvurl = $tcontent['video_url'];
                if( !empty($tabvurl) ): 
                  ?>
                  <a data-fancybox href="<?php echo $tabvurl; ?>">
                    <?php if( !empty($tabvposter) ) echo cbv_get_image_tag($tabvposter, 'gallery2'); ?>
                    <span>
                      <i>
                        <svg class="play-icon-white-svg" width="65" height="65" viewBox="0 0 65 65" fill="#ffffff">
                          <use xlink:href="#play-icon-white-svg"></use>
                        </svg> 
                      </i>
                    </span>
                    <em>
                      <svg class="vdo-capter-icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="#ffffff">
                        <use xlink:href="#vdo-capter-icon-svg"></use>
                      </svg>
                    </em>
                  </a>
                  <?php else: ?>
                    <?php if( !empty($tabvposter) ) echo cbv_get_image_tag($tabvposter, 'gallery2'); ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="cr-tab-dsc-lft">
                <?php
                  if( !empty($tab['title']) ) printf('<h2 class="cr-tab-dsc-title">%s</h2>', $tab['title']);
                  if( !empty($tcontent['beschrijving1']) ) echo wpautop( $tcontent['beschrijving1'] );
                  $tknop = $tcontent['knop'];
                  if( is_array( $tknop ) &&  !empty( $tknop['url'] ) ){
                      printf('<a href="%s" target="%s"><i>
                    <svg class="download-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#fff">
                      <use xlink:href="#download-icon-svg"></use>
                    </svg> 
                  </i>%s</a>', $tknop['url'], $tknop['target'], $tknop['title']); 
                  }
                ?> 
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<?php
  $showhide_cta = get_field('showhide_cta', $thisID);
  if( $showhide_cta ):
  $ctasec = get_field('ctasec', $thisID);
  if( $ctasec ):
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<section class="cr-rf-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-top-dsc-wrp">
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
<?php endif; endif;?>
<?php 
$showhide_ref = get_field('showhide_ref', $thisID);
if( $showhide_ref ):
$referids = get_field('gerelateerde_referenties', $thisID);
$rQuery = new WP_Query(array(
  'post_type' => 'referenties',
  'posts_per_page'=> 2,
  'post__in' => $referids

));
if( $rQuery->have_posts() ):
?>
<section class="cln-leg-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cln-leg-grid-wrp">
          <div class="cln-leg-grid-head">
            <h3 class="cln-leg-grid-head-title">Gerelateerde Referenties</h3>
            <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
          </div>
          <div class="cln-leg-grid-slider">
            <?php 
            while($rQuery->have_posts()): $rQuery->the_post();
              $roverview = get_field('overviesec', get_the_ID());
              $ricon = $roverview['featured_image'];
              $rbeschrijving = $roverview['beschrijving']; 
            ?>
            <div class="cln-rv-grid-item">
              <div class="cln-rv-grid-item-img-ctlr">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <?php 
                  if(!empty( $ricon)):
                  $riconsrc = cbv_get_image_src( $ricon, 'refergrid'); 
                ?>
                <div class="cln-rv-grid-item-img" style="background: url('<?php echo $riconsrc; ?>');">
                  
                </div>
                <?php endif; ?>
              </div>
              <div class="cln-rv-grid-item-des mHc">
                <h3 class="cln-rv-grid-item-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php echo wpautop( $rbeschrijving ); ?>
                  <a href="<?php the_permalink(); ?>">Lees meer</a>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); endif;?>
<?php get_footer(); ?>