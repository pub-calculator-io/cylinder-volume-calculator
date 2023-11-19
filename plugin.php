<?php
/*
Plugin Name: Cylinder Volume Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/cylinder-volume-calculator/
Description: This calculator can be used as a cylinder volume calculator and surface area calculator. It also finds the lateral, base, and top surface areas.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_cylinder_volume_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Cylinder Volume Calculator by Calculator.iO";

function display_ci_cylinder_volume_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Cylinder Volume Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_cylinder_volume_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_cylinder_volume_calculator', 'display_ci_cylinder_volume_calculator' );