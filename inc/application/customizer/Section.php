<?php

	class TBM_Customizer_Section {
		function __construct() {
			$this->name = 'section_without_name';
			$this->title = 'Section without name';
			$this->description = 'Some section blank description';
		}
	}

	class TBM_Customizer_Section_builder extends TBM_Customizer_Builder {

		function __construct( $customizer ) {
			parent::__construct( $customizer );
			$this->customizer = $customizer;
		}

		public function setName($name) {
			$this->customizer->section->name = $name;
			return $this;
		}

		public function setTitle($title) {
			$this->customizer->section->title = $title;
			return $this;
		}

		public function setDesc($description) {
			$this->customizer->section->description = $description;
			return $this;
		}

	}