<?php
/*
Plugin Name: Enable Automatic Updates for VCS
Plugin URI:
Description:
Version: 1.0.0
Author: kawax
Author URI:
License:         GPLv2 or later
License URI:     http://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter('automatic_updates_is_vcs_checkout', '__return_false');
