<?php

	class TBM_Customizer_Setting {
		function __construct() {
			$this->name = 'setting_without_name';
			$this->params = array();
			$this->params['type'] = 'text';
			$this->params['default'] = 'Setting default Text';
			$this->params['sanitize_callback'] = 'sanitize_text_field';
			$this->control = new TBM_Customizer_Control();
			$this->partial = new TBM_Customizer_Partial();
		}
	}

	class TBM_Customizer_Setting_Builder extends TBM_Customizer_Builder {
		function __construct($customizer) {
			parent::__construct($customizer);
			$this->customizer = $customizer; 
		}

		public function setName($name) {
			$this->customizer->settings[count($this->customizer->settings) -1]->name = $name;
			return $this;
		}

		public function setType($type) {
			$this->customizer->settings[count($this->customizer->settings) -1]->params['type'] = $type;
			return $this;
		}

		public function setDefault($default) {
			$this->customizer->settings[count($this->customizer->settings) -1]->params['default'] = $default;
			return $this;
		}

		public function setSanitize($sanitize_callback) {
			$this->customizer->settings[count($this->customizer->settings) -1]->params['sanitize_callback'] = $sanitize_callback;
			return $this;
		}

		


	}