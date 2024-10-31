<?php

/**
	 * Plugin Name: RankScanner: Rank Tracking
	 * Plugin URI: http://www.rankscanner.com/wordpress/
	 * Description: Rank Tracking is the ultimate SEO performance tool. Track your keywords automatically, and see which optimisations work by monitoring your SEO performance and Google rankings.
	 * Version: 1.2.1
	 * Author: RankScanner
	 * Author URI: http://www.rankscanner.com/
	 * License: GPL2
 */
 
$PluginName = 'Rank Tracking';

if(!function_exists('RankScanner_Rankings')) {
	function RankScanner_Rankings() {
		echo RankScanner_WriteContent('https://app.rankscanner.com/Domain/'.RankScanner_RootDomain().'/?WP_Version=2');
	}
}

require_once 'App/Main.php';

 ?>