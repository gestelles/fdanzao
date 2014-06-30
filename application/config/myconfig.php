<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['oauth'] = array(	'twitter' => array(
								'key' => 'twitter consumer key',
								'secret' => 'twitter secret'),
							'facebook' =>  array(
								'key' => '456592084441629',
								'secret' => 'fc4e037a0774b4e22ff1e0474c38224e'),
							'google' => array(
								'key' => '876398357542.apps.googleusercontent.com',
								'secret' => '8QRWLlNQmSFZv5IrCMNDfsZI')
						);
						
$config['nav_admin'] = array(
		'profile' => array('label' => 'PROFILE',
				'url' => '/profile',
				/*'menu' => array(
						'SubOp11' => array('label' => 'SubOp11', 'url' => '/admin11')
				)*/
		),
		'groups' => array('label'	=> 'GROUPS',
				'url' => '/groups',
				/*'menu' => array(
						'SubOp2' => array('label' => 'SubOp21', 'url' => '/admin21'),
						'SubOp3' => array('label' => 'SubOp21', 'url' => '/admin21')
				)*/
		)
);
						