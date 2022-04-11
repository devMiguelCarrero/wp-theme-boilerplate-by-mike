<?php
	
	class TBM_Customizer_Partial {

		function __construct() {

			$this->selector = '.custom-class';
			$this->render_callback = 'setting_display_sidebar';

		}

	}

	class TBM_Customizer_Partial_Builder extends TBM_Customizer_Builder {

		function __construct($customizer) {
			parent::__construct($customizer);
			$this->customizer = $customizer; 
		}

		public function setSelector($selector) {

			$this->customizer->settings[count($this->customizer->settings) -1]->partial->selector = $selector;
			return $this;

		}

		public function setRenderCallback($render_callback) {

			$this->customizer->settings[count($this->customizer->settings) -1]->partial->render_callback = $render_callback;
			return $this;

		}

	}