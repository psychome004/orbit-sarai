<?php
/*
Plugin Name: Orbit Sarai
Description: Adds built in taxonomies (categories, tags) to custom post types
Version: 1.0.0
Author: Sputznik
Author URI: https://www.sputznik.com
*/

// THIS CONDITION CHECKS IF THE ORBIT-BUNDLE HAS BEEN LOADED FIRST, IF NOT THEN WAIT FOR IT TO LOAD COMPLETELY
if( class_exists('ORBIT_BASE') ){
  include('cpt.php');
}
else{
  add_action('orbit-bundle-loaded', function(){
    include('cpt.php');
  });
}
