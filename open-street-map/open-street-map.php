<?php 
/**
 * Plugin Name: Open Street Map
 * Description: This is a simple plugin
 * Version: 1.0
 * Author: NabiSalay
 * Text Domain: open-street-map
 */

 class OpenStreetMap
 {
     public function __construct()
     {
        add_shortcode('open_street_map', array($this, 'street_map_shortcode'));
     }
     
     public function street_map_shortcode()
     {
        $lat = isset( $atts['lat'] ) ? $atts['lat'] : 0; 
        $lng = isset( $atts['lng'] ) ? $atts['lng'] : 0;

        $url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924237.7097540089!2d{$lng}!3d{$lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1714992537536!5m2!1sen!2s";
      
        return "<iframe src='$url' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
     }
 }

 new OpenStreetMap();