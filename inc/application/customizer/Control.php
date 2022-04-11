<?php

	class TBM_Customizer_Control {
		function __construct() {
			$this->label = 'Control Generic Label';
			$this->description = 'Please, add your copyright information here';
			$this->type = 'text';
		}
	}

	class TBM_Customizer_Control_builder extends TBM_Customizer_Builder {

		function __construct($customizer) {
			parent::__construct($customizer);
			$this->customizer = $customizer; 
		}

		public function setLabel($label) {
			$this->customizer->settings[count($this->customizer->settings) -1]->control->label = $label;
			return $this;
		}

		public function setDescription($description) {
			$this->customizer->settings[count($this->customizer->settings) -1]->control->description = $description;
			return $this;
		}

		public function setType($type) {
			$this->customizer->settings[count($this->customizer->settings) -1]->control->type = $type;
			return $this;
		}

	}