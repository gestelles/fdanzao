<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('asset_url'))
{
	function static_url($url){
	   return base_url().'static/'.$url;
	}
}

if (!function_exists('current_language'))
{
	function current_language() {
        global $CFG;
        return $CFG->config['language'];
	}
}
if (!function_exists('get_url'))
{
	function get_url($url){
       global $CFG;
	   return base_url().$CFG->config['language_abbr'].'/'.$url;
	}
}