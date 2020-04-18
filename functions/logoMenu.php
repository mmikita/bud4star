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
        'label' => 'wielkosc logo',
        'section' => 'logo_i_menu',
        'settings' => 'logoSize'
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
        'label' => 'Zmienny font dla przedziałów bootstrap',
        'section' => 'logo_i_menu',
        'settings' => 'bootstrapMenuFont',
        'type' => 'checkbox'
    )));
    
    $wp_customize->add_setting('xs-menufont', array(
        'default' => 0
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-menufont', array(
        'label' => 'menu font xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-menufont'
    )));
    
    $wp_customize->add_setting('sm-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-menufont', array(
        'label' => 'menu font sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-menufont'
    )));
    
    $wp_customize->add_setting('md-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-menufont', array(
        'label' => 'menu font md',
        'section' => 'logo_i_menu',
        'settings' => 'md-menufont'
    )));
    
    $wp_customize->add_setting('lg-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-menufont', array(
        'label' => 'menu font lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-menufont'
    )));
    $wp_customize->add_setting('xl-menufont', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-menufont', array(
        'label' => 'menu font xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-menufont'
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
        'default' => 0
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xs-spaceBetweenPrimary', array(
        'label' => 'odstęp xs',
        'section' => 'logo_i_menu',
        'settings' => 'xs-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('sm-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sm-spaceBetweenPrimary', array(
        'label' => 'odstęp sm',
        'section' => 'logo_i_menu',
        'settings' => 'sm-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('md-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'md-spaceBetweenPrimary', array(
        'label' => 'odstęp md',
        'section' => 'logo_i_menu',
        'settings' => 'md-spaceBetweenPrimary'
    )));
    
    $wp_customize->add_setting('lg-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lg-spaceBetweenPrimary', array(
        'label' => 'odstęp lg',
        'section' => 'logo_i_menu',
        'settings' => 'lg-spaceBetweenPrimary'
    )));
    $wp_customize->add_setting('xl-spaceBetweenPrimary', array(
        'default' => 0
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xl-spaceBetweenPrimary', array(
        'label' => 'odstęp xl',
        'section' => 'logo_i_menu',
        'settings' => 'xl-spaceBetweenPrimary'
    )));


