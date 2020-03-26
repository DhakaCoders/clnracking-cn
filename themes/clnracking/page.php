<?php 
get_header();
while ( have_posts() ) :
  the_post();
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
              <h1 class="page-banner-title">Binnenpagina</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<section class="innerpage-con-wrap">
  <?php if(have_rows('inhoud')){  ?>
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <?php 
            while ( have_rows('inhoud') ) : the_row(); 
          if( get_row_layout() == 'introductietekst' ){
              $title = get_sub_field('titel');
              $afbeelding = get_sub_field('afbeelding');
              echo '<div class="dfp-promo-module clearfix">';
                if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title">%s</strong></div>', $title);
                if( !empty($afbeelding) ){
                  echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding), '</div>';
                }
              echo '</div>';    
          }elseif( get_row_layout() == 'teksteditor' ){
              $beschrijving = get_sub_field('fc_teksteditor');
              echo '<div class="dfp-text-module clearfix">';
                if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
              echo '</div>';    
            }elseif( get_row_layout() == 'afbeelding_tekst' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $videourl = get_sub_field('videourl');
              $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
              $fc_tekst = get_sub_field('fc_tekst');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
              echo '<div class="fl-dft-overflow-controller">
                <div class="fl-dft-lftimg-rgtdes clearfix '.$imgposcls.'">';
                      echo '<div class="fl-dft-lftimg-rgtdes-lft mHc" style="background: url('.$imgsrc.');">';
                      if( !empty($videourl) ):
                      echo '<a href="'.$videourl.'" data-fancybox="gallery" class="overlay-link"></a>
                      <i>
                        <svg class="play-icon-white-svg" width="65" height="65" viewBox="0 0 65 65" fill="#ffffff">
                          <use xlink:href="#play-icon-white-svg"></use>
                        </svg> 
                      </i>
                      <span>
                        
                        <svg class="vdo-capter-icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="white">
                          <use xlink:href="#vdo-capter-icon-svg"></use>
                        </svg> 
                      </span>';
                      endif;
                      echo '</div>';
                      echo '<div class="fl-dft-lftimg-rgtdes-rgt mHc">';
                        echo wpautop($fc_tekst);
                      echo '</div>';
              echo '</div></div>';      
            }elseif( get_row_layout() == 'galerij' ){
              $gallery_cn = get_sub_field('afbeeldingen');
              $lightbox = get_sub_field('lightbox');
              $kolom = get_sub_field('kolom');
              if( $gallery_cn ):
              echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                foreach( $gallery_cn as $image ):
                $imgsrc = cbv_get_image_src($image['ID'], 'gallerygrid');  
                echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    //echo '<div class="dfpagegalleryitem" style="background: url('.$imgsrc.');"></div>';
                    echo wp_get_attachment_image( $image['ID'], 'gallerygrid' );
                if( $lightbox ) echo "</a>";
                echo "</div></figure>";
                endforeach;
              echo "</div></div>";
              endif;      
            }elseif( get_row_layout() == 'faqs' ){
              $faqsIds = get_sub_field('fc_faqs');
              $fQuery = new WP_Query(array(
                'post_type' => 'faqs',
                'posts_per_page'=> -1,
                'post__in' => $faqsIds
              ));
              if( $fQuery->have_posts() ):
              echo "<div class='dft-question-mark-slider-cntlr'><div class='dft-question-mark-slider dft-slider-pagi'>";
                while($fQuery->have_posts()): $fQuery->the_post();
                  echo "<div class='dft-question-mark-slide-item'><div class='dft-question-mark-slide-item-inr mHc'>";
                    echo '<a class="overlay-link" href="'.get_permalink().'"></a>';
                    echo '<i>
                    <svg class="question-icon-svg" width="60" height="60" viewBox="0 0 60 60" fill="#E2E2E2">
                      <use xlink:href="#question-icon-svg"></use>
                    </svg> 
                  </i>';
                    printf('<h3 class="dft-question-mark-slide-item-title"><strong>%s</strong></h3>', get_the_title());
                    echo '<span><img src="'.THEME_URI.'/assets/images/arrow-orange.svg"></span>';
                  echo "</div></div>";
                endwhile;
              echo "</div></div>";
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'quote' ){
              $fc_diensten = get_sub_field('fc_quote');
              $naam = get_sub_field('naam');
              $positie = get_sub_field('positie');
              echo "<div class='dft-blockquote'>";
              echo '<i><svg class="quote-white-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#ffff">
                <use xlink:href="#quote-white-icon-svg"></use>
              </svg></i>';
              echo '<blockquote>';
              printf('%s', $fc_diensten);
              printf('<span><strong>%s, %s</strong></span>', $naam, $positie);
              echo '</blockquote>';
              echo "</div>";
            }elseif( get_row_layout() == 'fc_cta' ){
              $cta_titel = get_sub_field('cta_titel');
              $cta_beschrijving = get_sub_field('cta_beschrijving');
              $cta_knop = get_sub_field('cta_knop');
              $cta_phone = get_sub_field('telefoon');

            echo '<div class="dft-cr-leg-post-grid-module">
            <div class="cr-leg-post-grid-sec-wrp">
              <div class="ftr-top-dsc-wrp">
                <div class="ftr-top-dsc">';
                  printf('<h2 class="ftr-top-dsc-title">%s</h2>', $cta_titel);
                  echo wpautop( $cta_beschrijving );
                  if( !empty($cta_knop) ) { printf('<a target="%s" href="%s">%s</a>', $cta_knop['target'], $cta_knop['url'], $cta_knop['title']); }
                  if( !empty($cta_phone) ): 
                  echo '<a href="'.$cta_phone.'">
                    <i>
                      <svg class="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                        <use xlink:href="#ftr-telephone-icon-svg"></use>
                      </svg> 
                    </i>
                    '.$cta_phone.'
                  </a>';
                  endif;
             echo '</div></div></div></div>';
            }elseif( get_row_layout() == 'table' ){
              $fc_table = get_sub_field('fc_table');
              cbv_table($fc_table);
            }elseif( get_row_layout() == 'nieuws' ){
              $fc_product = get_sub_field('fc_nieuws');
              $memQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> -1,
                'post__in' => $fc_product
              ));
              if( $memQuery->have_posts() ):
                echo '<div class="dft-blog-slider-cntlr"><div class="dft-blog-slider dft-slider-pagi">';
                        while($memQuery->have_posts()): $memQuery->the_post();
                        $gridImage = get_post_thumbnail_id(get_the_ID());
                        if(!empty($gridImage)){
                          $pimgScr = cbv_get_image_src($gridImage, 'bloggrid');
                        }else{
                          $pimgScr = '';
                        }  
                        echo '<div class="dft-blog-item">';
                        echo '<div class="dft-blog-item-inr">';
                       
                      echo '<div class="hm-nieuws-sec-grd-item">
                        <div class="hm-nieuws-sec-grd-item-fea-img-cntlr">
                          <a href="'.get_the_permalink().'" class="overlay-link"></a>
                          <div class="hm-nieuws-sec-grd-item-fea-img" style="background: url('.$pimgScr.');">
                          </div>
                        </div>
                        <div class="hm-nieuws-sec-grd-item-des mHc" style="height: 401px;">
                          <div class="hm-nieuws-sec-grd-des-date">
                            <i><img src="'.THEME_URI.'/assets/images/calender-gray-icon.svg"></i>
                            <span>'.get_the_date('m.d.Y').'</span>
                          </div>
                          <h4 class="hm-nieuws-sec-grd-item-des-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>';
                          echo wpautop( get_the_excerpt(), true );
                          echo '<a href="'.get_the_permalink().'">Meer Info</a>
                        </div>
                      </div>';
                        echo '</div></div>';
                    endwhile;

                echo '</div></div>';
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'testimonial' ){
              $fc_testimonial = get_sub_field('fc_testimonial');
              $tQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> -1,
                'post__in' => $fc_testimonial
              ));
              if( $tQuery->have_posts() ):
                echo '<div class="dft-star-sec-grd-cntlr"><div class="star-section-grds">
              <div class="star-section-grds-row starSecGrdsRowSlider-2" id="starSecGrdsRowSlider">';
                        while($tQuery->have_posts()): $tQuery->the_post();
                        echo '<div class="star-sec-grd-col">
                            <div class="star-sec-grd-item">
                              <i>
                                <svg class="star-white-icon-svg" width="45" height="45" viewBox="0 0 45 45" fill="#ffffff">
                                  <use xlink:href="#star-white-icon-svg"></use>
                                </svg> 
                              </i>
                              <strong class="star-sec-title">'.get_the_title().'</strong>';
                        echo wpautop( get_the_excerpt(), true ); 
                        echo '</div></div>';
                    endwhile;

                echo '</div></div></div>';
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'referenties' ){
              $fc_referenties = get_sub_field('fc_referenties');
              $rQuery = new WP_Query(array(
                'post_type' => 'referenties',
                'posts_per_page'=> -1,
                'post__in' => $fc_referenties
              ));
              if( $rQuery->have_posts() ):
                echo '<div class="dft-references-overview-items-cntlr"><div class="dftReoviSlider" id="dftReoviSlider">';
                while($rQuery->have_posts()): $rQuery->the_post();
                    $roverview = get_field('overviesec', get_the_ID());
                    $ricon = $roverview['featured_image'];
                    $rbeschrijving = $roverview['beschrijving'];
                  if(!empty( $ricon)){
                    $ricontag = cbv_get_image_tag( $ricon );
                  }else{
                    $ricontag = '';
                  }  
                  echo '<div class="dftReoviSlideItem">
                    <div class="cln-rv-grid-item">
                      <div class="cln-rv-grid-item-img">
                        <a href="'.get_the_permalink().'" class="overlay-link"></a>';
                        echo $ricontag;
                      echo '</div>';
                      echo '<div class="cln-rv-grid-item-des mHc">
                        <h3 class="cln-rv-grid-item-des-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
                        echo wpautop( $rbeschrijving );
                        echo '<a href="'.get_the_permalink().'">Lees meer</a>
                      </div>
                    </div>
                  </div>';
                endwhile;

                echo '</div></div>';
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'diensten' ){
              $fc_diensten = get_sub_field('fc_diensten');
              $dQuery = new WP_Query(array(
                'post_type' => 'diensten',
                'posts_per_page'=> -1,
                'post__in' => $fc_diensten
              ));
              if( $dQuery->have_posts() ):
                echo '<div class="dft-services-item-module">
            <div class="dft-services-items-slider dftServicesItemsSlider" id="dftServicesItemsSlider">';
                while($dQuery->have_posts()): $dQuery->the_post();
                    $doverview = get_field('overviesec', get_the_ID());
                    $dicon = $doverview['featured_image'];
                    $dbeschrijving = $doverview['beschrijving'];
                  if(!empty( $dicon)){
                    $dicontag = cbv_get_image_tag( $dicon );
                  }else{
                    $dicontag = '';
                  }  
                    echo '<div class="dft-services-item">
                          <div class="hm-services-item mHc">
                          <i>
                            <a href="'.get_the_permalink().'">'.$dicontag.'</a>
                          </i>
                          <h3 class="hm-services-item-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
                    echo wpautop( $dbeschrijving );
                    echo '<div class="hm-services-item-more-link">
                              <a href="'.get_the_permalink().'">Meer Info</a>
                            </div>
                          </div>
                        </div>';
                endwhile;

                echo '</div></div>';
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $fc_horizontal_rule = get_sub_field('fc_horizontal_rule');
              echo '<div class="dft-2grd-img-content-separetor" style="height:'.$fc_horizontal_rule.'px"></div>';
            }elseif( get_row_layout() == 'afbeelding' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              if( !empty( $fc_afbeelding ) ){
                printf('<div class="dfp-plate-one-img-bx">%s</div>', cbv_get_image_tag($fc_afbeelding));
              }
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $rheight = get_sub_field('fc_horizontal_rule');
              printf('<div class="dfhrule clearfix" style="height: %spx;"></div>', $rheight);
          
            }elseif( get_row_layout() == 'gap' ){
             $gap = get_sub_field('fc_gap');
             printf('<div class="gap clearfix" data-value="10" data-md="10" data-sm="10" data-xs="5" data-xxs="5"></div>', $rheight);
            }
          
           endwhile;?>
        </article>

      </div>
    </div>
  </div>
<?php }else{ ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="default-page-con">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</section>
<?php 
endwhile; 
get_footer(); 
?>