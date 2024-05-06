<?php 
/**
 * Plugin Name: Current Date
 * Description: This is a simple plugin
 * Version: 1.0
 * Author: NabiSalay
 * Text Domain: current-date
 */

 class CurrentDate
 {
     public function __construct()
     {
        add_shortcode('current_date', array($this, 'current_date_shortcode'));
     }

     public function get_current_date()
     {
        return date('m/d/Y');
     }
     
     public function current_date_shortcode()
     {
        return $this->get_current_date();
     }
 }

 new CurrentDate();