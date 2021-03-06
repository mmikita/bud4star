<style>
.center {
    max-width: <?php echo get_theme_mod('contentWidth', '1200').'px'?>;

    margin: 0 auto;
}

img.mLogo {
    max-width: <?php echo get_theme_mod('logoSize', '100').'%'?>;
}

<?php if(get_theme_mod('isBootstrapLogoSize')==true) {
    ?><?php if(get_theme_mod('xs-logoSize') !='') {
        ?>.body-xs img.mLogo {
            max-width: <?php echo get_theme_mod('xs-logoSize').'%'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('sm-logoSize') !='') {
        ?>.body-sm img.mLogo {
            max-width: <?php echo get_theme_mod('sm-logoSize').'%'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('md-logoSize') !='') {
        ?>.body-md img.mLogo {
            max-width: <?php echo get_theme_mod('md-logoSize').'%'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('lg-logoSize') !='') {
        ?>.body-lg img.mLogo {
            max-width: <?php echo get_theme_mod('lg-logoSize').'%'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('xl-logoSize') !='') {
        ?>.body-xl img.mLogo {
            max-width: <?php echo get_theme_mod('xl-logoSize').'%'?>;
        }

        <?php
    }

    ?><?php
}

?>.top-section {
    background-color: <?php echo get_theme_mod('upperSectionColor', '#fff') ?>;
}

#primaryMenu .nav-link {
    padding-top: <?php echo get_theme_mod('menuPositionTopPadding', '40').'px'?>;
}


<?php if(get_theme_mod('isBootstrapMenuTopPadding')==true) {
    ?><?php if(get_theme_mod('xs-menuPositionTopPadding') !='') {
        ?>.body-xs #primaryMenu .nav-link {
            padding-top: <?php echo get_theme_mod('xs-menuPositionTopPadding').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('sm-menuPositionTopPadding') !='') {
        ?>.body-sm #primaryMenu .nav-link {
            padding-top: <?php echo get_theme_mod('sm-menuPositionTopPadding').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('md-menuPositionTopPadding') !='') {
        ?>.body-md #primaryMenu .nav-link {
            padding-top: <?php echo get_theme_mod('md-menuPositionTopPadding').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('lg-menuPositionTopPadding') !='') {
        ?>.body-lg #primaryMenu .nav-link {
            padding-top: <?php echo get_theme_mod('lg-menuPositionTopPadding').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('xl-menuPositionTopPadding') !='') {
        ?>.body-xl #primaryMenu .nav-link {
            padding-top: <?php echo get_theme_mod('xl-menuPositionTopPadding').'px'?>;
        }

        <?php
    }

    ?><?php
}

?>#primaryMenu .nav-link {
    font-size: <?php echo get_theme_mod('primaryMenuFontSize', '15').'px'?>;

    <?php if(get_theme_mod('primaryMenuUpper')==true) {
        ?>text-transform: uppercase;
        <?php
    }

    ?>
}

<?php if(get_theme_mod('bootstrapMenuFont')==true) {
    ?><?php if(get_theme_mod('xs-menufont') !='') {
        ?>.body-xs #primaryMenu .nav-link {
            font-size: <?php echo get_theme_mod('xs-menufont').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('sm-menufont') !='') {
        ?>.body-sm #primaryMenu .nav-link {
            font-size: <?php echo get_theme_mod('sm-menufont').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('md-menufont') !='') {
        ?>.body-md #primaryMenu .nav-link {
            font-size: <?php echo get_theme_mod('md-menufont').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('lg-menufont') !='') {
        ?>.body-lg #primaryMenu .nav-link {
            font-size: <?php echo get_theme_mod('lg-menufont').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('xl-menufont') !='') {
        ?>.body-xl #primaryMenu .nav-link {
            font-size: <?php echo get_theme_mod('xl-menufont').'px'?>;
        }

        <?php
    }

    ?><?php
}

?>#primaryMenu li.active a {
    -webkit-box-shadow: inset 0px 7px 0px 0px <?php echo get_theme_mod('menuHoverColor', '#0a7db8')?>;
    color: <?php echo get_theme_mod('menuHoverColor', '#0a7db8')?>
}

#primaryMenu li a:hover {
    color: <?php echo get_theme_mod('menuHoverColor', '#0a7db8')?>
}

#primaryMenu a {
    padding-right: <?php echo get_theme_mod('mainSpaceBetweenPrimary', '10').'px'?>;
    padding-left: <?php echo get_theme_mod('mainSpaceBetweenPrimary', '10').'px'?>;
}

<?php if(get_theme_mod('spaceBetweenPrimaryBoot')==true) {
    ?><?php if(get_theme_mod('xs-spaceBetweenPrimary') !='') {
        ?>.body-xs #primaryMenu a {
            padding-left: <?php echo get_theme_mod('xs-spaceBetweenPrimary').'px'?>;
            padding-right: <?php echo get_theme_mod('xs-spaceBetweenPrimary').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('sm-spaceBetweenPrimary') !=0 && get_theme_mod('sm-spaceBetweenPrimary') !='') {
        ?>.body-sm #primaryMenu a {
            padding-left: <?php echo get_theme_mod('sm-spaceBetweenPrimary').'px'?>;
            padding-right: <?php echo get_theme_mod('sm-spaceBetweenPrimary').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('md-spaceBetweenPrimary') !='') {
        ?>.body-md #primaryMenu a {
            padding-left: <?php echo get_theme_mod('md-spaceBetweenPrimary').'px'?>;
            padding-right: <?php echo get_theme_mod('md-spaceBetweenPrimary').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('lg-spaceBetweenPrimary') !='') {
        ?>.body-lg #primaryMenu a {
            padding-left: <?php echo get_theme_mod('lg-spaceBetweenPrimary').'px'?>;
            padding-right: <?php echo get_theme_mod('lg-spaceBetweenPrimary').'px'?>;
        }

        <?php
    }

    ?><?php if(get_theme_mod('xl-spaceBetweenPrimary') !='') {
        ?>.body-xl #primaryMenu a {
            padding-left: <?php echo get_theme_mod('xl-spaceBetweenPrimary').'px'?>;
            padding-right: <?php echo get_theme_mod('xl-spaceBetweenPrimary').'px'?>;
        }

        <?php
    }

    ?><?php
}

?>.flex-control-nav {
    bottom: <?php echo get_theme_mod('controlsBottom', '30').'px'?>;
    padding-left: <?php echo get_theme_mod('controlsLeft', '30').'%'?>;
}

.flex-direction-nav a:before {
    font-family: "flexslider-icon";
    font-size: 40px;
    display: inline-block;
    content: '\f001';
    color: rgba(0, 0, 0, 0.8);
    text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}

.flex-direction-nav a:before {
    content: "<?php echo get_theme_mod('sliderBefore', '\f001')?>";
}

.flex-direction-nav a.flex-next:before {
    content: "<?php echo get_theme_mod('sliderNext', '\f001')?>";
}

.flex-direction-nav a:before,
.flex-direction-nav a.flex-next:before {
    color: <?php echo get_theme_mod('colorArrow', '#fff') ?>;
}

a.flex-next {
    margin-right: <?php echo get_theme_mod('arrowSpace', '0').'px'?>;
}

a.flex-prev {
    margin-left: <?php echo get_theme_mod('arrowSpace', '0').'px'?>;
}

.flex-control-paging li a.flex-active {
  background: <?php echo get_theme_mod('navSliderActiveBut', '#fff') ?>;
}
.flex-control-paging li a:hover {
  background: <?php echo get_theme_mod('navSliderHoverBut', '#fff') ?>;
}

.flex-control-paging li a {
  background: <?php echo get_theme_mod('navSliderBut', '#fff') ?>;

}
#primaryMenu ul.dropdown-menu{
    background-color:  <?php echo get_theme_mod('subMenuBack', '#fff') ?>;
    
}

#primaryMenu ul.dropdown-menu a{
    color: <?php echo get_theme_mod('subMenuLinkColor', '#000') ?>;
}



</style>