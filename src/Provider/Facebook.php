<?php
namespace Layered\QuickLogin\Provider;

use \Layered\QuickLogin\Provider;

class Facebook extends Provider {

	public function __construct() {
		$this->oAuthVersion = 'oAuth2';
		$this->id = 'facebook';
		$this->label = 'Facebook';
		$this->color = '#3B5998';
		$this->icon = '<svg aria-labelledby="simpleicons-facebook-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>';

		$this->userSettings = array(
			'clientId'		=>	array(
				'name'		=>	__('Client ID', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			),
			'clientSecret'	=>	array(
				'name'		=>	__('Client Secret', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			)
		);
	}

	protected function getScope() {
		return ['public_profile', 'email'];
	}

	protected function getClient() {
		return new \League\OAuth2\Client\Provider\Facebook([
			'clientId'					=>	$this->getOption('clientId'),
			'clientSecret'				=>	$this->getOption('clientSecret'),
			'redirectUri'				=>	site_url('/wp-login.php?quick-login=facebook'),
			'graphApiVersion'			=>	'v2.12'
		]);
	}

}
