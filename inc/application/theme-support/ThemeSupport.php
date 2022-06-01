<?php

class TBM_ThemeSupport
{

    public function init()
    {
        add_action('after_setup_theme', [$this, 'theme_support']);
    }

    public function theme_support()
    {
        add_theme_support('editor-styles');
        add_editor_style('style-editor.css');
        add_theme_support('responsive-embeds');
        add_theme_support('align-wide');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
        add_theme_support('title-tag');

        /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
        add_theme_support('post-thumbnails');

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'wp_theme_boilerplate_by_mike_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');


        /*
		* Create a custom color palette
		*/
        add_theme_support('editor-color-palette', array(
            array(
                'name' => esc_attr__('Main Color', TBM_TEXTDOMAIN),
                'slug' => 'main-color',
                'color' => '#3B2642',
            ),
            array(
                'name' => esc_attr__('Secondary Color', TBM_TEXTDOMAIN),
                'slug' => 'secondary-color',
                'color' => '#F88207',
            ),
            array(
                'name' => esc_attr__('Third Color', TBM_TEXTDOMAIN),
                'slug' => 'third-color',
                'color' => '#125667',
            ),
            array(
                'name' => esc_attr__('Hover Color', TBM_TEXTDOMAIN),
                'slug' => 'hover-color',
                'color' => '#FCAA3A',
            ),
            array(
                'name' => esc_attr__('Fail Color', TBM_TEXTDOMAIN),
                'slug' => 'fail-color',
                'color' => '#FF0033',
            ),
            array(
                'name' => esc_attr__('Dark Back', TBM_TEXTDOMAIN),
                'slug' => 'dark-back',
                'color' => '#1D2327',
            ),
            array(
                'name' => esc_attr__('White Text', TBM_TEXTDOMAIN),
                'slug' => 'white-text',
                'color' => '#FFF',
            ),
        ));

        /*
		* Create a custom color gradient palette
		*/
        add_theme_support(
            'editor-gradient-presets',
            [
                [
                    'name' => esc_attr__('Main to Secondary', TBM_TEXTDOMAIN),
                    'gradient' => 'linear-gradient(135deg,rgb(0,250,56) 0%,rgb(0,27,255) 100%)',
                    'slug' => 'main-to-secondary'
                ],
                [
                    'name' => esc_attr__('Main to Third', TBM_TEXTDOMAIN),
                    'gradient' => 'linear-gradient(115deg,rgb(250,0,0) 0%,rgb(255,225,0) 100%)',
                    'slug' => 'main-to-third'
                ],
            ]
        );

        /*
		* If you untext this, you will can only select the defined colors by the color palette on your editor blocks
		*/
        //add_theme_support('disable-custom-colors');

        /*
		* If you untext this, you will can only select the defined gradients by the gradient color palette on your editor blocks
		*/
        //add_theme_support('disable-custom-gradients');


        add_theme_support('editor-font-sizes', array(
            array(
                'name' => esc_attr__('Small', TBM_TEXTDOMAIN),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => esc_attr__('Regular', TBM_TEXTDOMAIN),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => esc_attr__('Large', TBM_TEXTDOMAIN),
                'size' => 36,
                'slug' => 'large'
            ),
        ));

        /*
		* If you untext this, you will can only select the defined font sizes on the editor blocks
		*/
        //add_theme_support( "disable-custom-font-sizes" , TBM_TEXTDOMAIN );

        add_theme_support('custom-spacing');
        add_theme_support('custom-units', 'px', 'em', 'rem');
    }

    public static function instance()
    {
        return new TBM_ThemeSupport();
    }
}

TBM_ThemeSupport::instance()->init();
