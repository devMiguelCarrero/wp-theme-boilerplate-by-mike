<?php

	function TBM_wp_customize( $wp_customizer ) {

		$customizerBuilder = new TBM_Customizer_Builder();

		$customizer = $customizerBuilder
			->setSection()
				->setName( 'home_options' )
				->setTitle( 'General Options' )
				->setDesc( 'Modify general aspects of the Website' )
				->addSetting()
					->setName('site_main_description')
					->setType('theme_mod')
					->setDefault( 'Lorem ipsum' )
					->setSanitize('sanitize_text_field')
					->setControl()
						->setLabel('Site Description')
						->setDescription('Please, write your site description here')
						->setType('text')
					->setPartial()
						->setSelector('.page-home-description')
				->addSetting()
					->setName('sec_copyright')
					->setType('theme_mod')
					->setDefault( esc_attr__('Copyright SADLATIVE all rights reserved') )
					->setSanitize('sanitize_text_field')
					->setControl()
						->setLabel('Copyright')
						->setDescription('Please, add your copyright information here')
						->setType('text')
				->addSetting()
					->setName('sec_footer_info')
					->setType('theme_mod')
					->setDefault( __('Footer Information') )
					->setSanitize('sanitize_text_field')
					->setControl()
						->setLabel('Footer Information')
						->setDescription('Please, add your footer information here')
						->setType('text')
				->addSetting()
					->setName('banner_main_image')
					->setType('theme_mod')
					->setDefault( 'img/default/1280x800.png' )
					->setSanitize('sanitize_text_field')
					->setControl()
						->setLabel('Banner Image')
						->setDescription('Please, add your banner image here')
						->setType('image')
					->setPartial()
						->setSelector('.site-branding')
			->build();

		$customizerBuilder = new TBM_Customizer_Builder();

		$site_colors = $customizerBuilder
			->setSection()
				->setName( 'site_colors' )
				->setTitle( esc_attr__('Site Colors' , TBM_TEXTDOMAIN) )
				->setDesc( esc_attr__('Select the website main colors' , TBM_TEXTDOMAIN) )
				->addSetting()
					->setName('site_main_color')
					->setType('theme_mod')
					->setDefault( '#428F8F' )
					->setSanitize('wp_filter_nohtml_kses')
					->setControl()
						->setLabel(esc_attr__('Site Main Color' , TBM_TEXTDOMAIN))
						->setDescription(esc_attr__('Please, select the site main color here' , TBM_TEXTDOMAIN))
						->setType('color')
				->addSetting()
					->setName('site_secondary_color')
					->setType('theme_mod')
					->setDefault( '#E67A68' )
					->setSanitize('wp_filter_nohtml_kses')
					->setControl()
						->setLabel(esc_attr__('Site Secondary Color' , TBM_TEXTDOMAIN))
						->setDescription(esc_attr__('Please, select the site secondary color here' , TBM_TEXTDOMAIN))
						->setType('color')
				->addSetting()
					->setName('site_fail_color')
					->setType('theme_mod')
					->setDefault( '#FF0033' )
					->setSanitize('wp_filter_nohtml_kses')
					->setControl()
						->setLabel(esc_attr__('Site Fail Color' , TBM_TEXTDOMAIN))
						->setDescription(esc_attr__('Please, select the site fail color here' , TBM_TEXTDOMAIN))
						->setType('color')
				->addSetting()
					->setName('site_dark_color')
					->setType('theme_mod')
					->setDefault( '#1D2327' )
					->setSanitize('wp_filter_nohtml_kses')
					->setControl()
						->setLabel(esc_attr__('Site Dark Color' , TBM_TEXTDOMAIN))
						->setDescription(esc_attr__('Please, select the site dark color here' , TBM_TEXTDOMAIN))
						->setType('color')
				->addSetting()
					->setName('site_light_color')
					->setType('theme_mod')
					->setDefault( '#FFF' )
					->setSanitize('wp_filter_nohtml_kses')
					->setControl()
						->setLabel(esc_attr__('Site Light Color' , TBM_TEXTDOMAIN))
						->setDescription(esc_attr__('Please, select the site light color here' , TBM_TEXTDOMAIN))
						->setType('color')
			->build();

		$customizerBuilder = new TBM_Customizer_Builder();

		$secondary_logo = $customizerBuilder
			->setSection()
				->setName( 'secondary_logo' )
				->setTitle( 'Secondary Logo' )
				->setDesc( 'Modify general aspects of the Website' )
					->addSetting()
						->setName('sec_secondary_logo_url')
						->setType('theme_mod')
						->setDefault( get_site_url() )
						->setSanitize('sanitize_text_field')
						->setControl()
							->setLabel( esc_attr__( 'Secondary Logo URL' , TBM_TEXTDOMAIN ) )
							->setDescription( esc_attr__( 'Please, add your secondary logo URL here' , TBM_TEXTDOMAIN ) )
							->setType('text')
						->setPartial()
							->setSelector('.navbar-brand-secondary')
					->addSetting()
						->setName('secondary_logo_image')
						->setType('theme_mod')
						->setDefault( '' )
						->setSanitize('sanitize_text_field')
						->setControl()
							->setLabel( esc_attr__( 'Secondary Logo Image' , TBM_TEXTDOMAIN ) )
							->setDescription( esc_attr__( 'Please, add your banner image here' , TBM_TEXTDOMAIN ) )
							->setType('image')
						->setPartial()
							->setSelector('.site-branding')
							
			->build();


		$customizer->customize( $wp_customizer );
		$secondary_logo->customize( $wp_customizer );
		$site_colors->customize( $wp_customizer );

	}

	

	add_action( 'customize_register' , 'TBM_wp_customize' );