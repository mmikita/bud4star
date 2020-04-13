
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

 

</style>


