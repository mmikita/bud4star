
<style>
.center{
max-width: <?php echo get_theme_mod('contentWidth', '1200').'px' ?>;
margin: 0 auto;
}
.top-section{
    background-color: <?php echo get_theme_mod('upperSectionColor', '#fff') ?>;
}
#primaryMenu  .nav-link{
    font-size: <?php echo get_theme_mod('primaryMenuFontSize', '15').'px' ?>;
    <?php if( get_theme_mod( 'primaryMenuUpper' ) == true) { ?> text-transform: uppercase; <?php }?>
}
<?php if( get_theme_mod( 'bootstrapMenuFont' ) == true) { ?> 
    <?php if( get_theme_mod( 'xs-menufont' ) != 0 || get_theme_mod( 'xs-menufont' ) != '') { ?> .body-xs #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('xs-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'sm-menufont' ) != 0 || get_theme_mod( 'sm-menufont' ) != '') { ?> .body-sm #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('sm-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'md-menufont' ) != 0 || get_theme_mod( 'md-menufont' ) != '') { ?> .body-md #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('md-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'lg-menufont' ) != 0 || get_theme_mod( 'lg-menufont' ) != '') { ?> .body-lg #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('lg-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'xl-menufont' ) != 0 || get_theme_mod( 'xl-menufont' ) != '') { ?> .body-xl #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('xl-menufont').'px' ?>;} <?php }?>
        <?php }?>

#primaryMenu li.active a {-webkit-box-shadow: inset 0px 7px 0px 0px <?php echo get_theme_mod('menuHoverColor', '#0a7db8')?>; color: <?php echo get_theme_mod('menuHoverColor', '#0a7db8')?>}
#primaryMenu li a:hover {color: <?php echo get_theme_mod('menuHoverColor', '#0a7db8')?>}

#primaryMenu a {padding-right: <?php echo get_theme_mod('mainSpaceBetweenPrimary', '10').'px' ?>; padding-left: <?php echo get_theme_mod('mainSpaceBetweenPrimary', '10').'px' ?>;}

<?php if( get_theme_mod( 'spaceBetweenPrimaryBoot' ) == true) { ?> 
    
    <?php if( get_theme_mod( 'xs-spaceBetweenPrimary' ) != 0 || get_theme_mod( 'xs-spaceBetweenPrimary' ) != '' )
     { ?> .body-xs #primaryMenu a{ padding-left: <?php echo get_theme_mod('xs-spaceBetweenPrimary').'px' ?>; 
        padding-right:<?php echo get_theme_mod('xs-spaceBetweenPrimary').'px' ?>; } <?php }?>

        <?php if( get_theme_mod( 'sm-spaceBetweenPrimary' ) != 0 || get_theme_mod( 'sm-spaceBetweenPrimary' ) != '' ) 
        { ?> .body-sm #primaryMenu a{ padding-left: <?php echo get_theme_mod('sm-spaceBetweenPrimary').'px' ?>; 
        padding-right:<?php echo get_theme_mod('sm-spaceBetweenPrimary').'px' ?>; } <?php }?>

        
        <?php if( get_theme_mod( 'md-spaceBetweenPrimary' ) != 0 || get_theme_mod( 'md-spaceBetweenPrimary' ) != '' ) 
        { ?> .body-md #primaryMenu a{ padding-left: <?php echo get_theme_mod('md-spaceBetweenPrimary').'px' ?>; 
        padding-right:<?php echo get_theme_mod('md-spaceBetweenPrimary').'px' ?>; } <?php }?>

        <?php if( get_theme_mod( 'lg-spaceBetweenPrimary' ) != 0 || get_theme_mod( 'lg-spaceBetweenPrimary' ) != '' ) 
        { ?> .body-lg #primaryMenu a{ padding-left: <?php echo get_theme_mod('lg-spaceBetweenPrimary').'px' ?>; 
        padding-right:<?php echo get_theme_mod('lg-spaceBetweenPrimary').'px' ?>; } <?php }?>

        <?php if( get_theme_mod( 'xl-spaceBetweenPrimary' ) != 0 || get_theme_mod( 'xl-spaceBetweenPrimary' ) != '' ) 
        { ?> .body-xl #primaryMenu a{ padding-left: <?php echo get_theme_mod('xl-spaceBetweenPrimary').'px' ?>; 
        padding-right:<?php echo get_theme_mod('xl-spaceBetweenPrimary').'px' ?>; } <?php }?>

    
        <?php }?>

 

</style>


