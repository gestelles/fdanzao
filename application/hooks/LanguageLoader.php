<?php
class LanguageLoader
{
    function initialize() {
        
        $ci =& get_instance();
        $ci->load->helper('language');

        $currentLang = current_language();
        $ci->lang->load('text', $currentLang);
/*
        $site_lang = $ci->session->userdata('site_lang');

         if ($site_lang) {
            $ci->lang->load('text',$ci->session->userdata('site_lang'));
        } else {
            $ci->lang->load('text','english');
        }
*/
    }
}