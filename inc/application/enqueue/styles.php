<?php

    class TBM_Enqueue_styles {

        function __construct() {
            $this->index_assets = include TBM_BUILD_PATH . 'index.asset.php';
            $this->admin_assets = include TBM_BUILD_PATH . 'admin.asset.php'; 
        }

        public function init() {
            add_action( 'admin_enqueue_scripts' , [ $this , 'admin_styles' ] );
            add_action( 'wp_enqueue_scripts' , [ $this , 'front_styles' ] );
        }

        public function front_styles() {

            $enqueue = new TBM_EnqueueBuilder();
            $enqueue->setType('style')
                    ->setName( TBM_TEXTDOMAIN . '-assets' )
                    ->setPath( TBM_BUILD_URL . 'style-index.css' )
                    ->setVer($this->script_assets['version'])
                    ->setMedia('all')
                    ->enqueue();

            $enqueue = new TBM_EnqueueBuilder();
            $enqueue->setType('style')
                    ->setName( TBM_TEXTDOMAIN . '-style' )
                    ->setPath( get_stylesheet_uri() )
                    ->setVer(TBM_VERSION)
                    ->setMedia('all')
                    ->enqueue();
                    wp_style_add_data( 'wp-theme-boilerplate-by-mike-style', 'rtl', 'replace' );

            $enqueue = new TBM_EnqueueBuilder();
            $enqueue->setType('style')
                    ->setName( TBM_TEXTDOMAIN . '-assets-style-index' )
                    ->setPath( TBM_BUILD_URL . 'index.css' )
                    ->setVer($this->script_assets['version'])
                    ->setDependencies( array(TBM_TEXTDOMAIN . '-assets') )
                    ->setMedia('all')
                    ->enqueue();

            $custom_css = "
                :root {
                    --site-main-color: " . get_theme_mod( 'site_main_color', '#008083' ) . ";
                    --site-secondary-color: " . get_theme_mod( 'site_secondary_color', '#F88207' ) . ";
                    --site-hover-color: " . get_theme_mod( 'site_hover_color', '#FCAA3A' ) . ";
                    --site-fail-color: " . get_theme_mod( 'site_fail_color', '#FF0033' ) . ";
                    --site-dark-color: " . get_theme_mod( 'site_dark_color', '#1D2327' ) . ";
                    --site-light-color: " . get_theme_mod( 'site_light_color', '#FFF' ) . ";
                }";
            wp_add_inline_style( TBM_TEXTDOMAIN . '-assets', $custom_css );

        }

        public function admin_styles() {
           
        }
        
        public static function instance() {
            return new TBM_Enqueue_styles();
        }

    }

    TBM_Enqueue_styles::instance()->init();