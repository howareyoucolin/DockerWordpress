<?php
/**
* Plugin Name: Tester Plugin
* Plugin URI: https://www.369usa.com/
* Description: This is a plugin merely for study and used as a tester 
* Version: 1.0
* Author: Colin Zhao
* Author URI: hhttps://www.369usa.com/
**/

//Security
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function tester_func(){
	echo 'The City of New York, usually called either New York City (NYC) or simply New York (NY), is the most populous city in the United States.[11] With an estimated 2018 population of 8,398,748[7] distributed over a land area of about 302.6 square miles (784 km2),[12][13] New York is also the most densely populated major city in the United States.[14] Located at the southern tip of the state of New York, the city is the center of the New York metropolitan area, the largest metropolitan area in the world by urban landmass.';
}
add_action('tester_plugin_hook','tester_func');
