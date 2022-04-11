<?php

	class TBM_Customizer {

		function __construct() {
			$this->section = new TBM_Customizer_Section();
			$this->settings = array();
		}

		public function customize( $wp_customizer ) {

			$wp_customizer->add_section( $this->section->name , 
				(array)$this->section
			);

			for( $i = 0 ; $i < count( $this->settings ) ; $i++ ) {

				//Setting
				$wp_customizer->add_setting( $this->settings[$i]->name , $this->settings[$i]->params );
				
				//Control
				$control = (array)$this->settings[$i]->control; $control['section'] = $this->section->name;
				switch ( $this->settings[$i]->control->type ) {
					case 'text':
						$wp_customizer->add_control( $this->settings[$i]->name , $control );
					break;

					case 'image':
						$wp_customizer->add_control( new WP_Customize_Image_Control( $wp_customizer , $this->settings[$i]->name , $control ) );
					break;

					case 'color':
						$wp_customizer->add_control( new WP_Customize_Color_Control( $wp_customizer , $this->settings[$i]->name , $control ) );
					break;
					
					default:
						$wp_customizer->add_control( $this->settings[$i]->name , $control );
					break;
				}

				//Partial
				$wp_customizer->selective_refresh->add_partial( $this->settings[$i]->name , (array)$this->settings[$i]->partial );
			}

		}

	}

	class TBM_Customizer_Builder {

		function __construct() {
			$this->customizer = new TBM_Customizer();
		}

		public function setSection() {
			return new TBM_Customizer_Section_builder( $this->customizer );
		}

		public function addSetting() {
			$this->customizer->settings[] = new TBM_Customizer_Setting();
			return new TBM_Customizer_Setting_Builder( $this->customizer );
		}

		public function setControl() {
			return new TBM_Customizer_Control_Builder( $this->customizer );
		}

		public function setPartial() {
			return new TBM_Customizer_Partial_Builder( $this->customizer );
		}

		public function build() {
			return $this->customizer;
		}

	}

	include_once( TBM_CUSTOMIZER_PATH . 'Section.php' );
	include_once( TBM_CUSTOMIZER_PATH . '/Setting.php' );
	include_once( TBM_CUSTOMIZER_PATH . 'Control.php' );
	include_once( TBM_CUSTOMIZER_PATH . 'Partial.php' );
	include_once( TBM_CUSTOMIZER_PATH . 'main_sections.php' );