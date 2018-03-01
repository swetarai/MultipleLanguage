<?php
class LanguageLoader
{
    /**
     * initialization function for initialize language
     * @return return  language name
     */
    function initialize() 
    {
        $ci =& get_instance();
        $ci->load->helper('language');
        $site_Lang = $ci->session->userdata('site_lang');

        if($site_Lang)
        {
            $ci->lang->load('contact_form', $site_Lang);
        }
        else
        {
            $ci->lang->load('contact_form', 'en');
        }
        
    }
}
?>