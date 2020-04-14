
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
    <?php if( get_theme_mod( 'xs-menufont' ) != 0) { ?> .body-xs #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('xs-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'sm-menufont' ) != 0) { ?> .body-sm #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('sm-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'md-menufont' ) != 0) { ?> .body-md #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('md-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'lg-menufont' ) != 0) { ?> .body-lg #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('lg-menufont').'px' ?>;} <?php }?>
    <?php if( get_theme_mod( 'xl-menufont' ) != 0) { ?> .body-xl #primaryMenu .nav-link{ font-size: <?php echo get_theme_mod('xl-menufont').'px' ?>;} <?php }?>

        
        <?php }?>

 

</style>


