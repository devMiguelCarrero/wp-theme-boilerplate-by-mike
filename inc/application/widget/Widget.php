<?php

	class TBM_Widget {

		function __construct() {

			$this->name = esc_html__( 'Esports Custom Widget', TBM_TEXTDOMAIN );
			$this->id   = 'custom-widget';
			$this->description = esc_html__( 'Add widgets here.', TBM_TEXTDOMAIN );
			$this->before_widget = '<section id="%1$s" class="widget %2$s">';
			$this->after_widget = '</section>';
			$this->before_title = '<h2 class="widget-title">';
			$this->after_title = '</h2>';

		}

		public function create() {

			register_sidebar( (array)$this );

		}

	}

	class TBM_Widget_Builder {

		function __construct() {
			$this->widget = new TBM_Widget();
		}

		public function setName($name) {
			$this->widget->name = $name;
			return $this;
		}

		public function setID($id) {
			$this->widget->id = $id;
			return $this;
		}

		public function setDescription($description) {
			$this->widget->description = $description;
			return $this;
		}

		public function setBeforeWidget($before_widget) {
			$this->widget->before_widget = $before_widget;
			return $this;
		}

		public function setAfterWidget($after_widget) {
			$this->widget->after_widget = $after_widget;
			return $this;
		}

		public function setBeforeTitle($before_title) {
			$this->widget->before_title = $before_title;
			return $this;
		}

		public function setAfterTitle($after_title) {
			$this->widget->after_title = $after_title;
			return $this;
		}

		public function build() {
			return $this->widget;
		}

	}

	require_once( TBM_WIDGET_PATH . 'create_widgets.php' );