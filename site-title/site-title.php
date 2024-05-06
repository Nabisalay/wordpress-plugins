<?php 
/**
 * Plugin Name: Site Title
 * Description: This is a simple plugin
 * Version: 1.0
 * Author: NabiSalay
 * Text Domain: site-title
 */

 class SiteTitle
 {
     public function __construct()
     {
        add_shortcode('site_title', array($this, 'site_title_shortcode'));
     }

     public function get_site_title()
     {
        return get_bloginfo('name');
     }
     
     public function site_title_shortcode()
     {
        return $this->get_site_title();
     }
 }

 new SiteTitle();