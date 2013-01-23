<?php
/*
  Plugin Name: Basic jQuery Slider
  Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
  Description: Maintain a database of questions for multiple-choice quiz.
  Version: 0.1
  Author: Marsolek and Boldt, LLC
  Author URI: http://www.pmrrc.com/
  License: GPL3
*/

/*  Copyright 2012 Marsolek and Boldt, LLC

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('wp_enqueue_scripts', 'basic_jquery_slider_enqueue_files');
function basic_jquery_slider_enqueue_files() {
  wp_enqueue_script('basic_jquery_slider', plugins_url('bjqs.min.js', __FILE__), array('jquery'));
  wp_enqueue_style('basic_jquery_slider', plugins_url('bjqs.css', __FILE__));
}
