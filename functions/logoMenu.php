<?php
    $wp_customize->add_section('logo_i_menu', array(
        'title' => 'Logo i menu',
        'priority' => 2
    ));

    
    $wp_customize->add_setting('logo_src');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, '
        logo_settings', array(
        'label' => 'Grafika logo',
        'section' => 'logo_i_menu',
        'settings' => 'logo_src'
    )));
    
    
    $wp_customize->add_setting('logoSize', array(
        'default' => '100'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'logoSize', array(
        'label' => 'wielkosc logo (max-width %)',
        'section' => 'logo_i_menu',
        'settings' => 'logoSize'
    )));

    $wp_customize->add_setting('isBootstrapLogoSize', array(
        'default' => false
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'isBootstrapLogoSize', array(
        'label' => 'różna wielkość dla przedziału bootstrap?',
        'section' => 'logo_i_menu',
        'type' => 'checkbox',
        'settings' => 'isBootstrapLogoSize'
    )));





    $wp_customize->add_setting('xs-logoSize', array(
        'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-logoSize', array(
        'label' => 'wielkosc xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-logoSize'
    )));
    
    $wp_customize->add_setting('sm-logoSize', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-logoSize', array(
        'label' => 'wielkosc sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-logoSize'
    )));
    
    $wp_customize->add_setting('md-logoSize', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-logoSize', array(
        'label' => 'wielkosc md',
        'section' => 'logo_i_menu',
        'settings' => 'md-logoSize'
    )));
    
    $wp_customize->add_setting('lg-logoSize', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-logoSize', array(
        'label' => 'wielkosc lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-logoSize'
    )));
    $wp_customize->add_setting('xl-logoSize', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-logoSize', array(
        'label' => 'wielkosc xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-logoSize'
    )));
    
    
    $wp_customize->add_setting('upperSectionColor', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'upperSectionColor', array(
        'label' => 'Kolor górnej sekcji',
        'section' => 'logo_i_menu',
        'settings' => 'upperSectionColor'
    )));
    $wp_customize->add_setting('logo_bootstrap_columns', array(
        'default' => 'col-xs-12 col-sm-3'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bootstrapLogoColumns', array(
        'label' => '- logo - kolumny bootstrap i inne klasy',
        'section' => 'logo_i_menu',
        'settings' => 'logo_bootstrap_columns'
    )));
    $wp_customize->add_setting('menu_bootstrap_columns', array(
        'default' => 'col-xs-12 col-md-9'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bootstrapMenuColumns', array(
        'label' => 'menu - kolumny bootstrap i inne klasy',
        'section' => 'logo_i_menu',
        'settings' => 'menu_bootstrap_columns'
    )));
    
    $wp_customize->add_setting('primaryMenuFontSize', array(
        'default' => '15'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'primaryMenuFontSize', array(
        'label' => 'wielkość czcionki menu(px)',
        'section' => 'logo_i_menu',
        'settings' => 'primaryMenuFontSize'
    )));
    
    $wp_customize->add_setting('primaryMenuUpper', array(
        'default' => false
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'primaryMenuUpper', array(
        'label' => 'Duże litery w menu?',
        'section' => 'logo_i_menu',
        'type' => 'checkbox',
        'settings' => 'primaryMenuUpper'
    )));
    
    $wp_customize->add_setting('bootstrapMenuFont', array(
        'default' => false
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bootstrapMenuFont', array(
        'label' => 'Zmienny  rozmiar fontu dla przedziałów bootstrap',
        'section' => 'logo_i_menu',
        'settings' => 'bootstrapMenuFont',
        'type' => 'checkbox'
    )));
    
    $wp_customize->add_setting('xs-menufont', array(
        'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-menufont', array(
        'label' => 'menu font xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-menufont'
    )));
    
    $wp_customize->add_setting('sm-menufont', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-menufont', array(
        'label' => 'menu font sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-menufont'
    )));
    
    $wp_customize->add_setting('md-menufont', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-menufont', array(
        'label' => 'menu font md',
        'section' => 'logo_i_menu',
        'settings' => 'md-menufont'
    )));
    
    $wp_customize->add_setting('lg-menufont', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-menufont', array(
        'label' => 'menu font lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-menufont'
    )));
    $wp_customize->add_setting('xl-menufont', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-menufont', array(
        'label' => 'menu font xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-menufont'
    )));

    $wp_customize->add_setting('menuPositionTopPadding', array(
        'default' => '40'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'menuPositionTopPadding', array(
        'label' => 'odstęp pozycji menu od góry(px)',
        'section' => 'logo_i_menu',
        'settings' => 'menuPositionTopPadding',
        
    )));


    $wp_customize->add_setting('isBootstrapMenuTopPadding', array(
        'default' => false
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'isBootstrapMenuTopPadding', array(
        'label' => 'Zmienne odstępy pozycji od góry?(px)',
        'section' => 'logo_i_menu',
        'settings' => 'isBootstrapMenuTopPadding',
        'type' => 'checkbox',
        
    )));
    
    $wp_customize->add_setting('xs-menuPositionTopPadding', array(
        'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-menuPositionTopPadding', array(
        'label' => 'odstęp xs pozycji od góry',
        'section' => 'logo_i_menu',
        'settings' => 'xs-menuPositionTopPadding'
    )));
    
    $wp_customize->add_setting('sm-menuPositionTopPadding', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-menuPositionTopPadding', array(
        'label' => 'odstęp sm pozycji od góry',
        'section' => 'logo_i_menu',
        'settings' => 'sm-menuPositionTopPadding'
    )));
    
    $wp_customize->add_setting('md-menuPositionTopPadding', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-menuPositionTopPadding', array(
        'label' => 'odstęp md pozycji od góry',
        'section' => 'logo_i_menu',
        'settings' => 'md-menuPositionTopPadding'
    )));
    
    $wp_customize->add_setting('lg-menuPositionTopPadding', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-menuPositionTopPadding', array(
        'label' => 'odstęp lg pozycji od góry',
        'section' => 'logo_i_menu',
        'settings' => 'lg-menuPositionTopPadding'
    )));
    $wp_customize->add_setting('xl-menuPositionTopPadding', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-menuPositionTopPadding', array(
        'label' => 'odstęp xl pozycji od góry',
        'section' => 'logo_i_menu',
        'settings' => 'xl-menuPositionTopPadding'
    )));

    $wp_customize->add_setting('hamburgerPrimary', array(
        'default' => "sm"
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hamburger', array(
        'type' => 'radio',
        'label' => 'hamburger od',
        'section' => 'logo_i_menu',
        'settings' => 'hamburgerPrimary',
        'choices' => array(
            'navbar-expand' => __('bez'),
            'navbar-expand-sm' => __('xs'),
            'navbar-expand-md' => __('sm'),
            'navbar-expand-lg' => __('md')
        )
    )));
    $wp_customize->add_setting('menuHoverColor', array(
        'default' => '#0a7db8'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menuHoverColor', array(
        'label' => 'pozycja menu aktywnego elementu i po najechaniu',
        'section' => 'logo_i_menu',
        'settings' => 'menuHoverColor'
    )));
    $wp_customize->add_setting('mainSpaceBetweenPrimary', array(
        'default' => '10'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mainSpaceBetweenPrimary', array(
        'label' => 'odstępy między pozycjami',
        'section' => 'logo_i_menu',
        'settings' => 'mainSpaceBetweenPrimary'
    )));
    
    
    
    $wp_customize->add_setting('spaceBetweenPrimaryBoot', array(
        'default' => false
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'spaceBetweenPrimaryBoot', array(
        'label' => 'Zmienne odstępy między pozycjami  dla bootstrap?(px)',
        'section' => 'logo_i_menu',
        'settings' => 'spaceBetweenPrimaryBoot',
        'type' => 'checkbox',
        
    )));
    
    $wp_customize->add_setting('xs-spaceBetweenPrimary', array(
        'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-spaceBetweenPrimary', array(
        'label' => 'odstęp xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('sm-spaceBetweenPrimary', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-spaceBetweenPrimary', array(
        'label' => 'odstęp sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('md-spaceBetweenPrimary', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-spaceBetweenPrimary', array(
        'label' => 'odstęp md',
        'section' => 'logo_i_menu',
        'settings' => 'md-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('lg-spaceBetweenPrimary', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-spaceBetweenPrimary', array(
        'label' => 'odstęp lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-spaceBetweenPrimary'
    )));
    $wp_customize->add_setting('xl-spaceBetweenPrimary', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-spaceBetweenPrimary', array(
        'label' => 'odstęp xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-spaceBetweenPrimary'
    )));

 
    $wp_customize->add_setting('subMenuBack', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'subMenuBack', array(
        'label' => 'Kolor tła podmenu',
        'section' => 'logo_i_menu',
        'settings' => 'subMenuBack'
    )));


    $wp_customize->add_setting('subMenuLinkColor', array(
        'default' => '#000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'subMenuLinkColor', array(
        'label' => 'Kolor linku podmenu',
        'section' => 'logo_i_menu',
        'settings' => 'subMenuLinkColor'
    )));




