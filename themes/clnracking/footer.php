<?php 
  $showhide_conons = get_field('showhide_contacteerons', 'options');
  $logoObj = get_field('logo_footer', 'options');
  $ft_beschrijving = get_field('ft_beschrijving', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $smedias = get_field('sociale_media', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-col-main clearfix">
            <div class="ftr-col ftr-col-1">
              <div class="ftr-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <div class="ftr-socail-icon">
                <?php if( !empty($ft_beschrijving) ) echo wpautop($ft_beschrijving); ?>
                <?php if(!empty($smedias)): ?>
                <ul class="reset-list clearfix">
                  <?php foreach($smedias as $smedia):  ?>
                    <li>
                      <a target="_blank" href="<?php echo $smedia['url']; ?>">
                        <?php echo $smedia['icon']; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>
            <div class="ftr-col ftr-col-2"> 
              <?php 
                _e( '<h6 class="ftr-title"><span>Navigatie</span></h6>', THEME_NAME ); 
                $fmenuOptionsa = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'ulc',
                    'container' => 'nav',
                    'container_class' => 'nav'
                  );
                wp_nav_menu( $fmenuOptionsa ); 
              ?>
            </div>
            <div class="ftr-col ftr-col-3"> 
              <?php 
                _e( '<h6 class="ftr-title"><span>MAGAZIJNINRICHTING</span></h6>', THEME_NAME ); 
                $fmenuOptionsb = array( 
                    'theme_location' => 'cbv_ftb_menu', 
                    'menu_class' => 'ulc',
                    'container' => 'nav',
                    'container_class' => 'nav'
                  );
                wp_nav_menu( $fmenuOptionsb ); 
              ?>              
            </div>
            <div class="ftr-col ftr-col-4">  
              <?php 
                _e( '<h6 class="ftr-title"><span>Diensten</span></h6>', THEME_NAME ); 
                $fmenuOptionsc = array( 
                    'theme_location' => 'cbv_ftc_menu', 
                    'menu_class' => 'ulc',
                    'container' => 'nav',
                    'container_class' => 'nav'
                  );
                wp_nav_menu( $fmenuOptionsc ); 
              ?>                
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="ftr-contact-info-wrp">
            <div class="ftr-contact-info"> 
              <?php _e( '<span>Contacteer ons:</span>', THEME_NAME ); ?>
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
    </div>
  </div>
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-btm-innr clearfix">
            <div class="ftr-btm-col-1">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
            </div>
            <div class="ftr-btm-col-2">
              <?php 
              $ftmenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'ulc clearfix',
                  'container' => 'copynav',
                  'container_class' => 'copynav'
                );
              wp_nav_menu( $ftmenuOptions ); 
            ?>
            </div>
            <div class="ftr-btm-col-3 text-right">
              <a href="#">webdesign by conversal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>