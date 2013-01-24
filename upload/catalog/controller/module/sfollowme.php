<?php
class ControllerModulesfollowme extends Controller {
	protected function index($setting) {

		$this->language->load('module/sfollowme'); 
		$this->data['heading_title'] = $this->language->get('heading_title');

		$this->data['sfollowme_twitter_url']  = "http://www.twitter.com/" . $this->config->get('sfollowme_twitter');
		$this->data['sfollowme_facebook_url']  = "http://www.facebook.com/" . $this->config->get('sfollowme_facebook');
		$this->data['sfollowme_twitter']  =  $this->config->get('sfollowme_twitter');
		$this->data['sfollowme_facebook']  = $this->config->get('sfollowme_facebook');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/sfollowme.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/sfollowme.tpl';
		} else {
			$this->template = 'default/template/module/sfollowme.tpl';
		}

		$this->render();			
	}
}
?>