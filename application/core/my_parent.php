<?php
/**
* this is a parent class for the language
*/
class My_Parent 
{
	/**
	 * return module language
	 * @return resource language
	 */
	protected function lang_switcher () 
	{

		if ($this->uri->segment(1) == 'en' || $this->uri->segment(1) == 'fr'|| $this->uri->segment(1) == 'es')
	   	{
	       $this->session->set_userdata("lang", $this->uri->segment(1));
	       redirect($this->session->flashdata('redirectToCurrent'));
	   	}

	   if ($this->session->userdata('lang') == "gj") 
	   {
	       $lang = "gujarati";
	       $this->config->set_item('language',$lang);
	       $this->session->set_userdata("lang",'gj');
	   } 
	   elseif ($this->session->userdata('lang') == "fr") 
	   {
	       $lang = "french";
	       $this->config->set_item('language',$lang);
	       $this->session->set_userdata("lang",'fr');
	   }
	   else 
	   {
	       $lang = "english";
	       $this->config->set_item('language',$lang);
	       $this->session->set_userdata("lang",'en');
	   }
	}
}
?>