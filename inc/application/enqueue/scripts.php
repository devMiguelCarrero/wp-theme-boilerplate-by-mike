<?php

    class TBM_Enqueue_scripts {

        function __construct() {
            $this->index_assets = include TBM_BUILD_PATH . 'index.asset.php';
            $this->admin_assets = include TBM_BUILD_PATH . 'admin.asset.php'; 
        }

        public function init() {
            add_action( 'enqueue_block_editor_assets' , [ $this , 'editor_scripts' ] );
            add_action( 'admin_enqueue_scripts' , [ $this , 'admin_scripts' ] );
            add_action( 'wp_enqueue_scripts' , [ $this , 'front_scripts' ] );
        }

        public function editor_scripts() {

        }

        public function front_scripts() {

            $enqueue = new TBM_EnqueueBuilder();
            $enqueue->setType('script')
                ->setName(TBM_TEXTDOMAIN . '-main-script' )
                ->setPath( TBM_BUILD_URL . 'index.js' )
                ->setDependencies($this->index_assets['dependencies'])
                ->setVer($this->index_assets['version'])
                ->setInFooter(true)
                ->enqueue();
            $enqueue->localizeScript(array( 
                'TBM_URLs' => TBM_URLs::instance()->get_array(),
            ));

            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }

            $enqueue = new TBM_EnqueueBuilder();
            $enqueue->setType('script')
                ->setName(TBM_TEXTDOMAIN . '-navigation' )
                ->setPath( TBM_THEME_URL . 'js/navigation.js' )
                ->setDependencies(array())
                ->setVer(TBM_VERSION)
                ->setInFooter(true)
                ->enqueue();

        }

        public function admin_scripts() {
            $enqueue = new TBM_EnqueueBuilder();
            $enqueue->setType('script')
                ->setName( TBM_TEXTDOMAIN . '-admin-script' )
                ->setPath( TBM_BUILD_URL . 'admin.js' )
                ->setDependencies($this->admin_assets['dependencies'])
                ->setVer($this->admin_assets['version'])
                ->setInFooter(true)
                ->enqueue();
            $enqueue->localizeScript(array( 
                'TBM_URLs' => TBM_URLs::instance()->get_array(),
            ));

        }
    
        
        public static function instance() {
            return new TBM_Enqueue_scripts();
        }

    }

    TBM_Enqueue_scripts::instance()->init();