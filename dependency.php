<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Check if the class does not exits then only allow the file to add
 */
if( ! class_exists( 'AcrossWP_View_Analytics_Dependency' ) ) {
    class AcrossWP_View_Analytics_Dependency extends AcrossWP_Plugins_Dependency {

        /**
         * Load this function on plugin load hook
         * Example: _e('<strong>BuddyBoss Sorting Option In Network Search</strong></a> requires the View Analytics plugin to work. Please <a href="http://acrosswp.com/downloads/view-analytics/" target="_blank">install View Analytics</a> first.', 'sorting-option-in-network-search-for-buddyboss');
         */
        public function constant_not_define_text(){
            printf( 
                __( 
                    '<strong>%s</strong></a> requires the View Analytics plugin to work. Please <a href="http://acrosswp.com/downloads/view-analytics/" target="_blank">install View Analytics</a> first.',
                    'acrosswp'
                ),
                $this->get_plugin_name()
            );
        }

        /**
         * Load this function on plugin load hook
         * Example: printf( __('<strong>BuddyBoss Sorting Option In Network Search</strong></a> requires View Analytics plugin version %s or higher to work. Please update View Analytics.', 'sorting-option-in-network-search-for-buddyboss'), $this->mini_version() );
         */
        public function constant_mini_version_text() {
            printf( 
                __( 
                    '<strong>%s</strong></a> requires View Analytics plugin version %s or higher to work. Please update View Analytics.',
                    'acrosswp'
                ),
                $this->get_plugin_name(),
                $this->mini_version()
            );
        }

        /**
         * Load this function on plugin load hook
         */
        public function constant_name(){
            return 'VIEW_ANALYTICS_VERSION';
        }

        /**
         * Load this function on plugin load hook
         */
        public function mini_version(){
            return '1.0.5';
        }

        /**
         * Load this function on plugin load hook
         */
        public function component_required() {
            return array();
        }

        /**
         * Load this function on plugin load hook
         */
        public function component_required_text() {
            return '';
        }
    }
}