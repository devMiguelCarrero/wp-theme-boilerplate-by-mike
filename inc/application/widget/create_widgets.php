<?php


function TBM_widgets_init() {

	$esWidget = new TBM_Widget_Builder();
	$esWidget->setName( esc_attr__( 'Sidebar' , TBM_TEXTDOMAIN ) )
		   ->setID( 'sidebar-1' )
		   ->setDescription( esc_attr__( 'Add widgets here.' , TBM_TEXTDOMAIN ) )
		   ->build();
	$esWidget->widget->create();

	$esWidget = new TBM_Widget_Builder();
	$esWidget->setName( esc_attr__( 'Footer Widget 1' , TBM_TEXTDOMAIN ) )
		   ->setID( 'footer-widget-1' )
		   ->setDescription( esc_attr__( 'Add widgets to the footer area on section 1' , TBM_TEXTDOMAIN ) )
		   ->build();
	$esWidget->widget->create();

	$esWidget = new TBM_Widget_Builder();
	$esWidget->setName( esc_attr__( 'Footer Widget 2' , TBM_TEXTDOMAIN ) )
		   ->setID( 'footer-widget-2' )
		   ->setDescription( esc_attr__( 'Add widgets to the footer area on section 2' , TBM_TEXTDOMAIN ) )
		   ->build();
	$esWidget->widget->create();

	$esWidget = new TBM_Widget_Builder();
	$esWidget->setName( esc_attr__( 'Footer Widget 3' , TBM_TEXTDOMAIN ) )
		   ->setID( 'footer-widget-3' )
		   ->setDescription( esc_attr__( 'Add widgets to the footer area on section 3' , TBM_TEXTDOMAIN ) )
		   ->build();
	$esWidget->widget->create();


}

add_action( 'widgets_init', 'TBM_widgets_init' );