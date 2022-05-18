<?php
	
	class TBM_View {

		public static function get($view,$data=null) {
			if(is_array($data)){
				foreach ($data as $key => $value) {
					${$key} = $value;
				}
			}
			require TBM_VIEW_PATH . $view. '.php';
		}

		public static function render($view,$data=null) {
	        extract($data);

	        ob_start();
	        include( TBM_VIEW_PATH . $view. '.php' );
	        $content = ob_get_contents();
	        ob_end_clean();

	        return $content;
	    }

		public static function getVariable($view,$data=null) {
			extract($data);

			$theView = include( TBM_VIEW_PATH . $view. '.php' );
			return $theView;
		}

	}