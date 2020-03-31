<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<svg style="display: none;">



  <symbol id="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M17.25 0H6.75C5.50734 0 4.5 1.00734 4.5 2.25V21.75C4.5 22.9927 5.50734 24 6.75 24H17.25C18.4927 24 19.5 22.9927 19.5 21.75V2.25C19.5 1.00734 18.4927 0 17.25 0ZM18 21.75C18 22.1642 17.6642 22.5 17.25 22.5H6.75C6.33577 22.5 6 22.1642 6 21.75V18H18V21.75ZM18 16.5H6V2.25C6 1.83577 6.33577 1.5 6.75 1.5H17.25C17.6642 1.5 18 1.83577 18 2.25V16.5Z"/>
  <path d="M12.75 19.5H11.25V21H12.75V19.5Z"/>
  <path d="M16.5 3H7.5V15H16.5V3Z"/>
  </symbol>

  <symbol id="ftr-email-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
  <path d="M15.9091 12.123L24.0001 17.238V6.79199L15.9091 12.123Z"/>
  <path d="M0 6.79199V17.238L8.091 12.123L0 6.79199Z"/>
  <path d="M22.4999 3.75H1.49992C0.751422 3.75 0.157422 4.308 0.0449219 5.0265L11.9999 12.903L23.9549 5.0265C23.8424 4.308 23.2484 3.75 22.4999 3.75Z"/>
  <path d="M14.535 13.0288L12.4125 14.4268C12.2865 14.5093 12.144 14.5498 12 14.5498C11.856 14.5498 11.7135 14.5093 11.5875 14.4268L9.46497 13.0273L0.0479736 18.9838C0.163474 19.6963 0.754474 20.2498 1.49997 20.2498H22.5C23.2455 20.2498 23.8365 19.6963 23.952 18.9838L14.535 13.0288Z"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="24" height="24"/>
  </clipPath>
  </defs>
  </symbol>

  <symbol id="left-arrow-iocn-svg" width="30" height="26" viewBox="0 0 30 26" xmlns="http://www.w3.org/2000/svg">
  <path d="M28.75 11.7498H3.81312L13.3619 2.65482C13.8619 2.17857 13.8813 1.38732 13.405 0.887317C12.9294 0.387942 12.1381 0.367941 11.6375 0.844191L0.7325 11.2317C0.260625 11.7042 0 12.3317 0 12.9998C0 13.6673 0.260625 14.2954 0.754375 14.7886L11.6381 25.1548C11.88 25.3854 12.19 25.4998 12.5 25.4998C12.83 25.4998 13.16 25.3698 13.4056 25.1117C13.8819 24.6117 13.8625 23.8211 13.3625 23.3448L3.77375 14.2498H28.75C29.44 14.2498 30 13.6898 30 12.9998C30 12.3098 29.44 11.7498 28.75 11.7498Z"/>
  </symbol>

  <symbol id="right-arrow-iocn-svg" width="30" height="26" viewBox="0 0 30 26" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.25 11.7498H26.1869L16.6381 2.65482C16.1381 2.17857 16.1187 1.38732 16.595 0.887317C17.0706 0.387942 17.8619 0.367941 18.3625 0.844191L29.2675 11.2317C29.7394 11.7042 30 12.3317 30 12.9998C30 13.6673 29.7394 14.2954 29.2456 14.7886L18.3619 25.1548C18.12 25.3854 17.81 25.4998 17.5 25.4998C17.17 25.4998 16.84 25.3698 16.5944 25.1117C16.1181 24.6117 16.1375 23.8211 16.6375 23.3448L26.2262 14.2498H1.25C0.559999 14.2498 0 13.6898 0 12.9998C0 12.3098 0.559999 11.7498 1.25 11.7498Z"/>
  </symbol>

  <symbol id="cr-dd-arrow-icon-svg" width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
  <path d="M0.5 4.50012H10.4748L6.65525 0.862122C6.45525 0.671622 6.4475 0.355122 6.638 0.155122C6.82825 -0.0446281 7.14475 -0.0526281 7.345 0.137872L11.707 4.29287C11.8958 4.48187 12 4.73287 12 5.00012C12 5.26712 11.8958 5.51837 11.6983 5.71562L7.34475 9.86212C7.248 9.95437 7.124 10.0001 7 10.0001C6.868 10.0001 6.736 9.94812 6.63775 9.84487C6.44725 9.64487 6.455 9.32862 6.655 9.13812L10.4905 5.50012H0.5C0.224 5.50012 0 5.27612 0 5.00012C0 4.72412 0.224 4.50012 0.5 4.50012Z"/>
  </symbol>

  <symbol id="cr-dd-back-start-icon-svg" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
  <path d="M35.1253 15.8786L32.67 13.4237C32.0873 12.841 31.6098 11.6894 31.6098 10.8636V7.39186C31.6098 5.74036 30.2606 4.39121 28.6096 4.39033H25.1364C24.3115 4.39033 23.1586 3.91193 22.5758 3.32965L20.121 0.874814C18.9546 -0.291605 17.0448 -0.291605 15.8783 0.874814L13.4235 3.33141C12.8403 3.91413 11.6861 4.39121 10.8629 4.39121H7.3912C5.7419 4.39121 4.39099 5.74036 4.39099 7.39186V10.8637C4.39099 11.6863 3.91356 12.8414 3.33075 13.4238L0.875474 15.8787C-0.291824 17.0451 -0.291824 18.9549 0.875474 20.1231L3.33075 22.578C3.91391 23.1607 4.39099 24.3154 4.39099 25.1381V28.6099C4.39099 30.2597 5.7419 31.6106 7.3912 31.6106H10.863C11.6879 31.6106 12.8408 32.088 13.4236 32.6704L15.8784 35.1261C17.0449 36.2916 18.9547 36.2916 20.1211 35.1261L22.5759 32.6704C23.1592 32.0877 24.3116 31.6106 25.1365 31.6106H28.6096C30.2607 31.6106 31.6098 30.2597 31.6098 28.6099V25.1381C31.6098 24.3119 32.0877 23.1604 32.6701 22.578L35.1254 20.1231C36.2908 18.9549 36.2908 17.045 35.1253 15.8786ZM15.6183 24.7505L8.9991 18.1305L11.1205 16.0095L15.6188 20.5079L24.8786 11.2502L26.9995 13.3712L15.6183 24.7505Z"/>
  </symbol>

  <symbol id="blockquote-icon-svg" width="70" height="70" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
  <path d="M51.9562 18.0127H39.1016C37.5938 18.0127 36.3672 19.2393 36.3672 20.7471V32.233C36.3672 33.7407 37.5938 34.9674 39.1016 34.9674H44.5377C44.155 40.9521 41.2224 41.9443 38.9792 42.1484C38.275 42.2125 37.7359 42.8029 37.7359 43.51V50.6202C37.7359 50.996 37.8906 51.3555 38.1638 51.6137C38.4182 51.8543 38.7547 51.9874 39.1029 51.9874C39.1285 51.9874 39.1541 51.9867 39.1798 51.9853C44.2983 51.6974 48.2179 49.9207 50.8297 46.7048C53.3916 43.5504 54.6905 38.9769 54.6905 33.1114V20.7471C54.6905 19.2393 53.4639 18.0127 51.9562 18.0127ZM51.9562 33.1114C51.9562 38.333 50.8631 42.3264 48.7072 44.9809C46.8136 47.3123 44.1101 48.6758 40.4701 49.1267V44.6845C43.8352 43.9639 47.3137 41.3449 47.3137 33.6002C47.3137 32.8451 46.7016 32.233 45.9465 32.233H39.1016V20.7471H51.9562V33.1114Z"/>
  <path d="M29.5304 18.0127H16.6758C15.168 18.0127 13.9414 19.2393 13.9414 20.7471V32.233C13.9414 33.7407 15.168 34.9674 16.6758 34.9674H22.1117C21.7291 40.9521 18.7964 41.9443 16.5533 42.1484C15.849 42.2125 15.31 42.8029 15.31 43.51V50.6202C15.31 50.996 15.4647 51.3555 15.7379 51.6137C15.9923 51.8543 16.3288 51.9874 16.677 51.9874C16.7026 51.9874 16.7281 51.9867 16.754 51.9853C21.8725 51.6974 25.7921 49.9207 28.404 46.7048C30.9658 43.5504 32.2648 38.9769 32.2648 33.1114V20.7471C32.2648 19.2393 31.0381 18.0127 29.5304 18.0127ZM29.5302 33.1114C29.5302 38.333 28.4372 42.3264 26.2813 44.9809C24.3877 47.3123 21.6842 48.6758 18.0442 49.1267V44.6845C21.4093 43.9639 24.8878 41.3449 24.8878 33.6002C24.8878 32.8451 24.2757 32.233 23.5206 32.233H16.6756V20.7471H29.5302V33.1114Z"/>
  <path d="M63.0711 14.088C62.6192 13.4831 61.7628 13.3591 61.1576 13.8107C60.5527 14.2626 60.4284 15.1192 60.8803 15.7242C70.3927 28.4607 69.075 46.556 57.8153 57.8156C51.7212 63.9099 43.6186 67.266 35.0001 67.266C26.3816 67.266 18.2789 63.9097 12.1848 57.8156C-0.395664 45.2353 -0.395664 24.7655 12.1848 12.1851C23.4572 0.912641 41.565 -0.39576 54.3052 9.14189C54.9098 9.59443 55.7666 9.47111 56.2191 8.86668C56.6715 8.26224 56.5484 7.40542 55.9439 6.95288C49.2701 1.9569 40.9908 -0.483397 32.6302 0.080159C24.1885 0.64973 16.2409 4.26184 10.2512 10.2515C3.64069 16.8623 0 25.6515 0 35.0004C0 44.3492 3.64069 53.1386 10.2512 59.7492C16.862 66.3599 25.6512 70.0004 35.0001 70.0004C44.3489 70.0004 53.1382 66.3599 59.7488 59.7491C65.7334 53.7644 69.3453 45.8233 69.9189 37.3888C70.487 29.0363 68.055 20.7612 63.0711 14.088Z"/>
  <path d="M59.7646 10.2668L59.7388 10.2408C59.2064 9.70559 58.3406 9.70326 57.8053 10.2358C57.27 10.7683 57.2678 11.634 57.8003 12.1693L57.8261 12.1952C58.0933 12.4638 58.4442 12.5981 58.7953 12.5981C59.1439 12.5981 59.4929 12.4655 59.7596 12.2003C60.295 11.6678 60.2972 10.8021 59.7646 10.2668Z"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="70" height="70"/>
  </clipPath>
  </defs>
  </symbol>

  <symbol id="download-icon-svg" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
  <path d="M17.3491 9.83987L16.3825 8.73987C16.1156 8.43627 15.6536 8.40693 15.3485 8.6724L12.4665 11.198V0.733333C12.4665 0.328533 12.138 0 11.7332 0H10.2665C9.86173 0 9.5332 0.328533 9.5332 0.733333V11.198L6.6512 8.6724C6.3476 8.40693 5.8856 8.43627 5.6172 8.73987L4.65067 9.8384C4.38227 10.1435 4.41307 10.6084 4.71813 10.8753L10.5173 15.9515C10.7945 16.1935 11.2067 16.1935 11.4839 15.9515L17.2816 10.8753C17.5867 10.6084 17.6175 10.1435 17.3491 9.83987Z"/>
  <path d="M19.0669 19.0669H2.93353C2.52873 19.0669 2.2002 19.3954 2.2002 19.8002V21.2669C2.2002 21.6717 2.52873 22.0002 2.93353 22.0002H19.0669C19.4717 22.0002 19.8002 21.6717 19.8002 21.2669V19.8002C19.8002 19.3954 19.4717 19.0669 19.0669 19.0669Z"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="22" height="22"/>
  </clipPath>
  </defs>
  </symbol>
  <symbol id="cr-dd-arrows-rgt-xs-svg" width="10" height="12" viewBox="0 0 10 12" xmlns="http://www.w3.org/2000/svg">
    <path d="M5.5 0.5L5.5 10.4747L9.138 6.65525C9.3285 6.45525 9.645 6.4475 9.845 6.638C10.0448 6.82825 10.0528 7.14475 9.86225 7.345L5.70725 11.707C5.51825 11.8957 5.26725 12 5 12C4.733 12 4.48175 11.8957 4.2845 11.6982L0.138 7.34475C0.0457497 7.248 5.81457e-08 7.124 5.96244e-08 7C6.11985e-08 6.868 0.0520001 6.736 0.15525 6.63775C0.355249 6.44725 0.6715 6.455 0.862001 6.655L4.5 10.4905L4.5 0.5C4.5 0.224 4.724 -6.29171e-08 5 -5.96259e-08C5.276 -5.63346e-08 5.5 0.224 5.5 0.5Z"/>
  </symbol>
  <symbol id="blockquote-icon-svg" width="70" height="70" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
    <path d="M51.9562 18.0127H39.1016C37.5938 18.0127 36.3672 19.2393 36.3672 20.7471V32.233C36.3672 33.7407 37.5938 34.9674 39.1016 34.9674H44.5377C44.155 40.9521 41.2224 41.9443 38.9792 42.1484C38.275 42.2125 37.7359 42.8029 37.7359 43.51V50.6202C37.7359 50.996 37.8906 51.3555 38.1638 51.6137C38.4182 51.8543 38.7547 51.9874 39.1029 51.9874C39.1285 51.9874 39.1541 51.9867 39.1798 51.9853C44.2983 51.6974 48.2179 49.9207 50.8297 46.7048C53.3916 43.5504 54.6905 38.9769 54.6905 33.1114V20.7471C54.6905 19.2393 53.4639 18.0127 51.9562 18.0127ZM51.9562 33.1114C51.9562 38.333 50.8631 42.3264 48.7072 44.9809C46.8136 47.3123 44.1101 48.6758 40.4701 49.1267V44.6845C43.8352 43.9639 47.3137 41.3449 47.3137 33.6002C47.3137 32.8451 46.7016 32.233 45.9465 32.233H39.1016V20.7471H51.9562V33.1114Z"/>
    <path d="M29.5304 18.0127H16.6758C15.168 18.0127 13.9414 19.2393 13.9414 20.7471V32.233C13.9414 33.7407 15.168 34.9674 16.6758 34.9674H22.1117C21.7291 40.9521 18.7964 41.9443 16.5533 42.1484C15.849 42.2125 15.31 42.8029 15.31 43.51V50.6202C15.31 50.996 15.4647 51.3555 15.7379 51.6137C15.9923 51.8543 16.3288 51.9874 16.677 51.9874C16.7026 51.9874 16.7281 51.9867 16.754 51.9853C21.8725 51.6974 25.7921 49.9207 28.404 46.7048C30.9658 43.5504 32.2648 38.9769 32.2648 33.1114V20.7471C32.2648 19.2393 31.0381 18.0127 29.5304 18.0127ZM29.5302 33.1114C29.5302 38.333 28.4372 42.3264 26.2813 44.9809C24.3877 47.3123 21.6842 48.6758 18.0442 49.1267V44.6845C21.4093 43.9639 24.8878 41.3449 24.8878 33.6002C24.8878 32.8451 24.2757 32.233 23.5206 32.233H16.6756V20.7471H29.5302V33.1114Z"/>
    <path d="M63.0711 14.088C62.6192 13.4831 61.7628 13.3591 61.1576 13.8107C60.5527 14.2626 60.4284 15.1192 60.8803 15.7242C70.3927 28.4607 69.075 46.556 57.8153 57.8156C51.7212 63.9099 43.6186 67.266 35.0001 67.266C26.3816 67.266 18.2789 63.9097 12.1848 57.8156C-0.395664 45.2353 -0.395664 24.7655 12.1848 12.1851C23.4572 0.912641 41.565 -0.39576 54.3052 9.14189C54.9098 9.59443 55.7666 9.47111 56.2191 8.86668C56.6715 8.26224 56.5484 7.40542 55.9439 6.95288C49.2701 1.9569 40.9908 -0.483397 32.6302 0.080159C24.1885 0.64973 16.2409 4.26184 10.2512 10.2515C3.64069 16.8623 0 25.6515 0 35.0004C0 44.3492 3.64069 53.1386 10.2512 59.7492C16.862 66.3599 25.6512 70.0004 35.0001 70.0004C44.3489 70.0004 53.1382 66.3599 59.7488 59.7491C65.7334 53.7644 69.3453 45.8233 69.9189 37.3888C70.487 29.0363 68.055 20.7612 63.0711 14.088Z"/>
    <path d="M59.7646 10.2668L59.7388 10.2408C59.2064 9.70559 58.3406 9.70326 57.8053 10.2358C57.27 10.7683 57.2678 11.634 57.8003 12.1693L57.8261 12.1952C58.0933 12.4638 58.4442 12.5981 58.7953 12.5981C59.1439 12.5981 59.4929 12.4655 59.7596 12.2003C60.295 11.6678 60.2972 10.8021 59.7646 10.2668Z"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect width="70" height="70"/>
    </clipPath>
    </defs>
  </symbol>

  <symbol id="contact-msg-arrow-svg" width="15" height="13" viewBox="0 0 15 13"  xmlns="http://www.w3.org/2000/svg">
  <path d="M14.375 5.62515H1.90656L6.68094 1.07765C6.93094 0.839527 6.94063 0.443902 6.7025 0.193902C6.46469 -0.0557851 6.06906 -0.0657852 5.81875 0.17234L0.36625 5.36609C0.130312 5.60234 0 5.91609 0 6.25015C0 6.5839 0.130312 6.89796 0.377187 7.14453L5.81906 12.3277C5.94 12.443 6.095 12.5002 6.25 12.5002C6.415 12.5002 6.58 12.4352 6.70281 12.3061C6.94094 12.0561 6.93125 11.6608 6.68125 11.4227L1.88688 6.87515H14.375C14.72 6.87515 15 6.59515 15 6.25015C15 5.90515 14.72 5.62515 14.375 5.62515Z"/>
  </symbol>




 

  <symbol id="cln-bnr-home-svg" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
  <path d="M21.7 9.40561L11.712 0.325713L11.6166 0.238959C11.551 0.179361 11.479 0.130936 11.4029 0.0936816C11.3995 0.0920488 11.396 0.0908457 11.3926 0.0892129C11.1446 -0.0284355 10.8554 -0.0284355 10.6073 0.0892129C10.6039 0.0908027 10.6004 0.0920059 10.597 0.0936816C10.5209 0.130936 10.4489 0.179361 10.3833 0.238959L10.2893 0.324467L0.300064 9.40561C-0.0745376 9.74614 -0.102166 10.3259 0.238404 10.7005C0.578931 11.0751 1.15871 11.1027 1.53331 10.7622L1.83336 10.4894V21.0839C1.83336 21.5902 2.24376 22.0006 2.75001 22.0006H7.33336H14.6667H19.25C19.7563 22.0006 20.1667 21.5902 20.1667 21.0839V10.4894L20.4667 10.7622C20.8413 11.1027 21.4211 11.0751 21.7616 10.7005C22.1022 10.3259 22.0746 9.74618 21.7 9.40561ZM9.16667 20.1673V14.6673C9.16667 13.6546 9.98733 12.8339 11 12.8339C12.0127 12.8339 12.8334 13.6546 12.8334 14.6673V20.1673H9.16667ZM18.3334 20.1673H14.6667V14.6673C14.6667 12.6421 13.0252 11.0006 11 11.0006C8.97481 11.0006 7.33336 12.6421 7.33336 14.6672V20.1672H3.66667V8.82291L11 2.1561L18.3334 8.82291V20.1673Z" fill="white"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="22" height="22" fill="white"/>
  </clipPath>
  </defs>
  </symbol>

  <symbol id="cln-bnr-right-arrow-svg" width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
  <path d="M0.5 4.50012H10.4748L6.65525 0.862122C6.45525 0.671622 6.4475 0.355122 6.638 0.155122C6.82825 -0.0446281 7.14475 -0.0526281 7.345 0.137872L11.707 4.29287C11.8958 4.48187 12 4.73287 12 5.00012C12 5.26712 11.8958 5.51837 11.6983 5.71562L7.34475 9.86212C7.248 9.95437 7.124 10.0001 7 10.0001C6.868 10.0001 6.736 9.94812 6.63775 9.84487C6.44725 9.64487 6.455 9.32862 6.655 9.13812L10.4905 5.50012H0.5C0.224 5.50012 0 5.27612 0 5.00012C0 4.72412 0.224 4.50012 0.5 4.50012Z" fill="white"/>
  </symbol>

  <symbol id="cln-product-bottom-arrow-svg" width="14" height="9" viewBox="0 0 14 9" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.7762 0.771078L13.3176 0.325047C13.1733 0.185752 12.9813 0.109013 12.7761 0.109013C12.571 0.109013 12.3787 0.185752 12.2344 0.325047L7.00313 5.37816L1.76584 0.31944C1.62174 0.180145 1.42949 0.103516 1.22438 0.103516C1.01928 0.103516 0.826917 0.180145 0.682705 0.31944L0.224002 0.762722C-0.0746673 1.05099 -0.0746673 1.52055 0.224002 1.80881L6.45963 7.85348C6.60373 7.99267 6.79575 8.09074 7.00267 8.09074H7.00506C7.21029 8.09074 7.4023 7.99256 7.5464 7.85348L13.7762 1.82519C13.9206 1.68601 13.9998 1.49493 14 1.29682C14 1.09859 13.9206 0.910153 13.7762 0.771078Z"/>
  </symbol>

  <symbol id="cln-rov-product-link-arrow-svg" width="10" height="14" viewBox="0 0 10 14" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.55636 0.223774L1.09459 0.682364C0.950373 0.82669 0.870925 1.01871 0.870925 1.22393C0.870925 1.42904 0.950373 1.62128 1.09459 1.76561L6.32607 6.99687L1.08878 12.2342C0.944568 12.3783 0.865234 12.5705 0.865234 12.7756C0.865234 12.9807 0.944568 13.1731 1.08878 13.3173L1.54771 13.776C1.84615 14.0747 2.33229 14.0747 2.63073 13.776L8.88878 7.54037C9.03288 7.39627 9.13441 7.20425 9.13441 6.99733L9.13441 6.99493C9.13441 6.78971 9.03276 6.59769 8.88878 6.4536L2.64769 0.223774C2.50359 0.0794477 2.30577 0.000226912 2.10066 -5.40021e-08C1.89544 -4.50316e-08 1.70035 0.0794477 1.55636 0.223774Z" fill="white"/>
  </symbol>

  <symbol id="cln-rov-product-bottom-link-svg" width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.7762 1.55636L13.3176 1.09459C13.1733 0.950373 12.9813 0.870926 12.7761 0.870926C12.571 0.870926 12.3787 0.950373 12.2344 1.09459L7.00313 6.32608L1.76584 1.08878C1.62174 0.944568 1.42949 0.865234 1.22438 0.865234C1.01928 0.865234 0.826917 0.944568 0.682705 1.08878L0.224002 1.54771C-0.0746673 1.84615 -0.0746673 2.33229 0.224002 2.63073L6.45963 8.88878C6.60373 9.03288 6.79575 9.13441 7.00267 9.13441H7.00506C7.21029 9.13441 7.4023 9.03276 7.5464 8.88878L13.7762 2.64769C13.9206 2.50359 13.9998 2.30577 14 2.10066C14 1.89544 13.9206 1.70035 13.7762 1.55636Z" fill="#293377"/>
  </symbol>

  <symbol id="cln-do-brdcm-home-svg" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
  <path d="M21.7001 9.40537L11.7122 0.325469L11.6168 0.238715C11.5512 0.179117 11.4792 0.130691 11.4031 0.0934375C11.3997 0.0918047 11.3962 0.0906016 11.3928 0.0889687C11.1448 -0.0286797 10.8555 -0.0286797 10.6075 0.0889687C10.6041 0.0905586 10.6006 0.0917617 10.5972 0.0934375C10.5211 0.130691 10.449 0.179117 10.3835 0.238715L10.2894 0.324223L0.300217 9.40537C-0.074385 9.74589 -0.102014 10.3257 0.238556 10.7003C0.579084 11.0749 1.15886 11.1025 1.53346 10.7619L1.83351 10.4892V21.0837C1.83351 21.5899 2.24391 22.0003 2.75017 22.0003H7.33351H14.6669H19.2502C19.7564 22.0003 20.1668 21.5899 20.1668 21.0837V10.4892L20.4669 10.7619C20.8415 11.1025 21.4212 11.0749 21.7618 10.7003C22.1023 10.3257 22.0747 9.74594 21.7001 9.40537ZM9.16682 20.167V14.667C9.16682 13.6544 9.98748 12.8337 11.0002 12.8337C12.0129 12.8337 12.8335 13.6543 12.8335 14.667V20.167H9.16682ZM18.3335 20.167H14.6669V14.667C14.6669 12.6418 13.0254 11.0003 11.0002 11.0003C8.97496 11.0003 7.33351 12.6418 7.33351 14.667V20.167H3.66682V8.82267L11.0002 2.15585L18.3335 8.82267V20.167Z" fill="#464646"/>
  </symbol>

  <symbol id="cln-do-brdcm-left-svg" width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.5 4.50012H1.52525L5.34475 0.862122C5.54475 0.671622 5.5525 0.355122 5.362 0.155122C5.17175 -0.0446281 4.85525 -0.0526281 4.655 0.137872L0.293 4.29287C0.10425 4.48187 0 4.73287 0 5.00012C0 5.26712 0.10425 5.51837 0.30175 5.71562L4.65525 9.86212C4.752 9.95437 4.876 10.0001 5 10.0001C5.132 10.0001 5.264 9.94812 5.36225 9.84487C5.55275 9.64487 5.545 9.32862 5.345 9.13812L1.5095 5.50012H11.5C11.776 5.50012 12 5.27612 12 5.00012C12 4.72412 11.776 4.50012 11.5 4.50012Z" fill="#464646"/>
  </symbol>





  <symbol id="hdr-tel-icon-svg" width="16" height="24" viewBox="0 0 16 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.25 0H2.75C1.50734 0 0.5 1.00734 0.5 2.25V21.75C0.5 22.9927 1.50734 24 2.75 24H13.25C14.4927 24 15.5 22.9927 15.5 21.75V2.25C15.5 1.00734 14.4927 0 13.25 0ZM14 21.75C14 22.1642 13.6642 22.5 13.25 22.5H2.75C2.33577 22.5 2 22.1642 2 21.75V18H14V21.75ZM14 16.5H2V2.25C2 1.83577 2.33577 1.5 2.75 1.5H13.25C13.6642 1.5 14 1.83577 14 2.25V16.5Z"/>
    <path d="M8.75 19.5H7.25V21H8.75V19.5Z"/>
    <path d="M12.5 3H3.5V15H12.5V3Z"/>
  </symbol>

  <symbol id="star-white-icon-svg" width="45" height="45" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg">
    <path d="M10.0719 44.0903C9.57893 44.0903 9.08934 43.9365 8.6715 43.6344C7.89317 43.0703 7.52958 42.1007 7.74142 41.1651L10.6364 28.4128L0.818483 19.8027C0.0968009 19.1727 -0.178894 18.175 0.117401 17.2621C0.413696 16.3509 1.21984 15.7057 2.1743 15.6175L15.1646 14.4382L20.3005 2.41914C20.6792 1.53609 21.5416 0.96582 22.4999 0.96582C23.4581 0.96582 24.3205 1.53609 24.6992 2.41708L29.8351 14.4382L42.8234 15.6175C43.7799 15.7037 44.586 16.3509 44.8823 17.2621C45.1786 18.1733 44.9046 19.1727 44.1829 19.8027L34.365 28.4111L37.26 41.1631C37.4722 42.1007 37.1083 43.0703 36.3303 43.6327C35.554 44.195 34.5189 44.2383 33.7014 43.747L22.4999 37.0531L11.2983 43.7508C10.9196 43.9757 10.4977 44.0903 10.0719 44.0903ZM22.4999 34.1694C22.9256 34.1694 23.3472 34.2837 23.7262 34.5086L34.2978 40.8314L31.5655 28.7952C31.3705 27.9386 31.6613 27.0443 32.3233 26.4647L41.5935 18.3346L29.3287 17.2209C28.4457 17.1402 27.6862 16.585 27.3412 15.7713L22.4999 4.42901L17.6527 15.773C17.3114 16.5812 16.552 17.1364 15.671 17.2171L3.40446 18.3308L12.6744 26.4609C13.3384 27.0422 13.6289 27.9349 13.4321 28.7935L10.702 40.8294L21.2735 34.5086C21.6522 34.2837 22.0741 34.1694 22.4999 34.1694ZM15.0654 14.6706C15.0654 14.6706 15.0654 14.6726 15.0633 14.6744L15.0654 14.6706ZM29.9306 14.6651L29.9326 14.6689C29.9326 14.6668 29.9326 14.6668 29.9306 14.6651Z"/>
  </symbol>

  <symbol id="btn-rgt-arrow-icon-svg" width="18" height="16" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.75 7.25018H15.7121L9.98287 1.79318C9.68287 1.50743 9.67125 1.03268 9.957 0.732683C10.2424 0.433058 10.7171 0.421058 11.0175 0.706808L17.5605 6.93931C17.8436 7.22281 18 7.59931 18 8.00018C18 8.40068 17.8436 8.77756 17.5474 9.07343L11.0171 15.2932C10.872 15.4316 10.686 15.5002 10.5 15.5002C10.302 15.5002 10.104 15.4222 9.95662 15.2673C9.67088 14.9673 9.6825 14.4929 9.9825 14.2072L15.7357 8.75018H0.75C0.336 8.75018 0 8.41418 0 8.00018C0 7.58618 0.336 7.25018 0.75 7.25018Z"/>
  </symbol>

  <symbol id="btn-rgt-arrow-sm-white-icon-svg" width="10" height="14" viewBox="0 0 10 14" xmlns="http://www.w3.org/2000/svg">
    <path d="M1.5563 0.223774L1.09452 0.682364C0.950312 0.82669 0.870864 1.01871 0.870864 1.22393C0.870864 1.42904 0.950312 1.62128 1.09452 1.76561L6.32601 6.99687L1.08872 12.2342C0.944507 12.3783 0.865173 12.5705 0.865173 12.7756C0.865173 12.9807 0.944507 13.1731 1.08872 13.3173L1.54765 13.776C1.84609 14.0747 2.33223 14.0747 2.63067 13.776L8.88872 7.54037C9.03282 7.39627 9.13435 7.20425 9.13435 6.99733L9.13435 6.99493C9.13435 6.78971 9.0327 6.59769 8.88872 6.4536L2.64763 0.223774C2.50353 0.0794477 2.3057 0.000226912 2.1006 -5.40021e-08C1.89538 -4.50316e-08 1.70029 0.0794477 1.5563 0.223774Z"/>
  </symbol>

  <symbol id="quote-white-icon-svg" width="70" height="70" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0)">
    <path d="M51.9562 18.0127H39.1016C37.5938 18.0127 36.3672 19.2393 36.3672 20.7471V32.233C36.3672 33.7407 37.5938 34.9674 39.1016 34.9674H44.5377C44.155 40.9521 41.2224 41.9443 38.9792 42.1484C38.275 42.2125 37.7359 42.8029 37.7359 43.51V50.6202C37.7359 50.996 37.8906 51.3555 38.1638 51.6137C38.4182 51.8543 38.7547 51.9874 39.1029 51.9874C39.1285 51.9874 39.1541 51.9867 39.1798 51.9853C44.2983 51.6974 48.2179 49.9207 50.8297 46.7048C53.3916 43.5504 54.6905 38.9769 54.6905 33.1114V20.7471C54.6905 19.2393 53.4639 18.0127 51.9562 18.0127ZM51.9562 33.1114C51.9562 38.333 50.8631 42.3264 48.7072 44.9809C46.8136 47.3123 44.1101 48.6758 40.4701 49.1267V44.6845C43.8352 43.9639 47.3137 41.3449 47.3137 33.6002C47.3137 32.8451 46.7016 32.233 45.9465 32.233H39.1016V20.7471H51.9562V33.1114Z"/>
    <path d="M29.5304 18.0127H16.6758C15.168 18.0127 13.9414 19.2393 13.9414 20.7471V32.233C13.9414 33.7407 15.168 34.9674 16.6758 34.9674H22.1117C21.7291 40.9521 18.7964 41.9443 16.5533 42.1484C15.849 42.2125 15.31 42.8029 15.31 43.51V50.6202C15.31 50.996 15.4647 51.3555 15.7379 51.6137C15.9923 51.8543 16.3288 51.9874 16.677 51.9874C16.7026 51.9874 16.7281 51.9867 16.754 51.9853C21.8725 51.6974 25.7921 49.9207 28.404 46.7048C30.9658 43.5504 32.2648 38.9769 32.2648 33.1114V20.7471C32.2648 19.2393 31.0381 18.0127 29.5304 18.0127ZM29.5302 33.1114C29.5302 38.333 28.4372 42.3264 26.2813 44.9809C24.3877 47.3123 21.6842 48.6758 18.0442 49.1267V44.6845C21.4093 43.9639 24.8878 41.3449 24.8878 33.6002C24.8878 32.8451 24.2757 32.233 23.5206 32.233H16.6756V20.7471H29.5302V33.1114Z"/>
    <path d="M63.0711 14.088C62.6192 13.4831 61.7628 13.3591 61.1576 13.8107C60.5527 14.2626 60.4284 15.1192 60.8803 15.7242C70.3927 28.4607 69.075 46.556 57.8153 57.8156C51.7212 63.9099 43.6186 67.266 35.0001 67.266C26.3816 67.266 18.2789 63.9097 12.1848 57.8156C-0.395664 45.2353 -0.395664 24.7655 12.1848 12.1851C23.4572 0.912641 41.565 -0.39576 54.3052 9.14189C54.9098 9.59443 55.7666 9.47111 56.2191 8.86668C56.6715 8.26224 56.5484 7.40542 55.9439 6.95288C49.2701 1.9569 40.9908 -0.483397 32.6302 0.080159C24.1885 0.64973 16.2409 4.26184 10.2512 10.2515C3.64069 16.8623 0 25.6515 0 35.0004C0 44.3492 3.64069 53.1386 10.2512 59.7492C16.862 66.3599 25.6512 70.0004 35.0001 70.0004C44.3489 70.0004 53.1382 66.3599 59.7488 59.7491C65.7334 53.7644 69.3453 45.8233 69.9189 37.3888C70.487 29.0363 68.055 20.7612 63.0711 14.088Z"/>
    <path d="M59.7646 10.2668L59.7388 10.2408C59.2064 9.70559 58.3406 9.70326 57.8053 10.2358C57.27 10.7683 57.2678 11.634 57.8003 12.1693L57.8261 12.1952C58.0933 12.4638 58.4442 12.5981 58.7953 12.5981C59.1439 12.5981 59.4929 12.4655 59.7596 12.2003C60.295 11.6678 60.2972 10.8021 59.7646 10.2668Z"/>
    </g>
    <defs>
    <clipPath id="clip0">
      <rect width="70" height="70"/>
    </clipPath>
    </defs>
  </symbol>

  <symbol id="play-icon-white-svg" width="65" height="65" viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg">
    <path d="M26 47.125L45.5 32.5L26 17.875V47.125Z"/>
    <path d="M32.4999 0C14.5438 0 0 14.5438 0 32.4999C0 50.4561 14.5438 64.9998 32.4999 64.9998C50.4561 64.9998 65 50.4562 65 32.4999C65 14.5436 50.4562 0 32.4999 0ZM32.4999 58.4999C18.1674 58.4999 6.49989 46.8324 6.49989 32.4999C6.49989 18.1674 18.1674 6.50004 32.4999 6.50004C46.8324 6.50004 58.5 18.1674 58.5 32.4999C58.5 46.8324 46.8324 58.4999 32.4999 58.4999Z"/>
  </symbol>

  <symbol id="vdo-capter-icon-svg" width="36" height="37" viewBox="0 0 36 37" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0)">
    <path d="M1.49991 12.7623C2.32938 12.7623 3.00009 12.0916 3.00009 11.2621V5.26221C3.00009 4.43411 3.67191 3.7623 4.5 3.7623H10.4999C11.3294 3.7623 12.0001 3.09158 12.0001 2.26212C12.0001 1.43265 11.3294 0.762207 10.4999 0.762207H4.5C2.01901 0.762207 0 2.78122 0 5.26221V11.2621C0 12.0916 0.670441 12.7623 1.49991 12.7623Z"/>
    <path d="M34.5002 24.7622C33.6707 24.7622 33 25.4329 33 26.2624V32.2623C33 33.0904 32.3282 33.7622 31.5001 33.7622H25.5002C24.6707 33.7622 24 34.4329 24 35.2624C24 36.0919 24.6707 36.7623 25.5002 36.7623H31.5001C33.9811 36.7623 36.0001 34.7433 36.0001 32.2623V26.2624C36.0001 25.4329 35.3297 24.7622 34.5002 24.7622Z"/>
    <path d="M10.4999 33.7622H4.5C3.67191 33.7622 3.00009 33.0904 3.00009 32.2623V26.2624C3.00009 25.4329 2.32938 24.7622 1.49991 24.7622C0.670441 24.7622 0 25.4329 0 26.2624V32.2623C0 34.7433 2.01901 36.7623 4.5 36.7623H10.4999C11.3294 36.7623 12.0001 36.0919 12.0001 35.2624C12.0001 34.4329 11.3294 33.7622 10.4999 33.7622Z"/>
    <path d="M31.5001 0.762207H25.5002C24.6707 0.762207 24 1.43265 24 2.26212C24 3.09158 24.6707 3.7623 25.5002 3.7623H31.5001C32.3282 3.7623 33 4.43411 33 5.26221V11.2621C33 12.0916 33.6707 12.7623 34.5002 12.7623C35.3297 12.7623 36.0001 12.0916 36.0001 11.2621V5.26221C36.0001 2.78122 33.9811 0.762207 31.5001 0.762207Z"/>
    <path d="M7.5 12.387V25.1372C7.5 27.4128 9.34927 29.262 11.6248 29.262H24.375C26.6505 29.262 28.4998 27.4128 28.4998 25.1372V12.387C28.4998 10.1115 26.6505 8.26221 24.375 8.26221H11.6248C9.34927 8.26221 7.5 10.1115 7.5 12.387Z"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect y="0.762207" width="36" height="36"/>
    </clipPath>
    </defs>
  </symbol>

  <symbol id="mg-down-arrow-icon-svg" width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.7762 1.55636L13.3176 1.09459C13.1733 0.950373 12.9813 0.870926 12.7761 0.870926C12.571 0.870926 12.3787 0.950373 12.2344 1.09459L7.00313 6.32608L1.76584 1.08878C1.62174 0.944568 1.42949 0.865234 1.22438 0.865234C1.01928 0.865234 0.826917 0.944568 0.682705 1.08878L0.224002 1.54771C-0.0746673 1.84615 -0.0746673 2.33229 0.224002 2.63073L6.45963 8.88878C6.60373 9.03288 6.79575 9.13441 7.00267 9.13441H7.00506C7.21029 9.13441 7.4023 9.03276 7.5464 8.88878L13.7762 2.64769C13.9206 2.50359 13.9998 2.30577 14 2.10066C14 1.89544 13.9206 1.70035 13.7762 1.55636Z"/>
  </symbol>


</svg>


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
  $spacialArry = array(".", "/", "+", " ");$replaceArray = ''; 
  $logoObj = get_field('logo_header', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<div class="bdoverlay"></div>
<header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hdr-inr">
            <div class="hdr-topbar clearfix">
              <div class="hdr-rgt">
                <div class="hdr-topbar-list hdr-topbar-list-sm-cntlr">
                  <ul class="reset-list">
                    <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Nieuws</a></li>
                    <li class="hdr-language">
                      <a href="#">NL</a>
                      <a href="#">FR</a>
                      <a href="#">EN</a>
                    </li>
                    <?php if( !empty($telefoon) ): ?>
                    <li class="hdr-tel">
                      <a href="tel:<?php echo $telefoon; ?>">
                        <i>
                          <svg class="hdr-tel-icon-svg" width="16" height="24" viewBox="0 0 16 24" fill="#A5A4A4">
                            <use xlink:href="#hdr-tel-icon-svg"></use>
                          </svg> 
                        </i>
                        <span><?php echo $show_telefoon; ?></span>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="hdr-lft">
                <div class="logo">
                  <?php 
                  if( is_array($logoObj) ){
                      $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
                  ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="hdr-navbar">
              <div class="line-icon show-md">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="main-nav-cntlr">
                <nav class="main-nav clearfix">
                  <div class="closebtn show-md">
                    <span></span>
                    <span></span>
                  </div>
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => 'mnav',
                        'container_class' => 'mnav'
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>

                  <div class="hdr-topbar-list show-md">
                    <ul class="reset-list">
                      <li class="menu-news-item"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Nieuws</a></li>
                      <li class="hdr-language">
                        <a href="#">NL</a>
                        <a href="#">FR</a>
                        <a href="#">EN</a>
                      </li>
                      <?php if( !empty($telefoon) ): ?>
                      <li class="hdr-tel">
                        <a href="tel:<?php echo $telefoon; ?>">
                          <i>
                            <svg class="hdr-tel-icon-svg" width="16" height="24" viewBox="0 0 16 24" fill="#A5A4A4">
                              <use xlink:href="#hdr-tel-icon-svg"></use>
                            </svg> 
                          </i>
                          <span><?php echo $show_telefoon; ?></span>
                        </a>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                </nav>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</header>