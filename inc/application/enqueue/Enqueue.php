<?php

class TBM_Enqueue {

    function __construct() {
        $this->type = 'style';
        $this->name = $this->path = $this->ver = '';
        $this->inFooter = false;
        $this->dependencies = array();
        $this->variables = array();
        $this->media = '';
    }

}

class TBM_EnqueueBuilder {

    function __construct() {
        $this->enqueue = new TBM_Enqueue();
    }

    public function setType($type) {
        $this->enqueue->type = $type;
        return $this;
    }

    public function setName($name) {
        $this->enqueue->name = $name;
        return $this;
    }

    public function setPath($path) {
        $this->enqueue->path = $path;
        return $this;
    }

    public function setDependencies($dependencies) {
        $this->enqueue->dependencies = $dependencies;
        return $this;
    }

    public function setVer($ver) {
        $this->enqueue->ver = $ver;
        return $this;
    }

    public function setInFooter($inFooter) {
        $this->enqueue->inFooter = $inFooter;
        return $this;
    }

    public function setMedia($media) {
        $this->enqueue->media = $media;
        return $this;
    }

    public function enqueue() {
        
        switch ($this->enqueue->type) {
            case 'script':
                wp_enqueue_script( $this->enqueue->name , $this->enqueue->path , $this->enqueue->dependencies , $this->enqueue->ver , $this->enqueue->inFooter );
            break;
            
            default:
                wp_register_style( $this->enqueue->name , $this->enqueue->path , $this->enqueue->dependencies , $this->enqueue->ver , $this->enqueue->media );
                wp_enqueue_style( $this->enqueue->name );
            break;
        }

        return $this;
        
    }

    public function localizeScript( $script ) {

        foreach ($script as $key => $value) {

            wp_localize_script( $this->enqueue->name , $key , $value );
            
        }

    }

}

    require_once( TBM_ENQUEUE_PATH . 'scripts.php' );
    require_once( TBM_ENQUEUE_PATH . 'styles.php' );