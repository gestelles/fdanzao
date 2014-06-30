<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->helper('language');
$this->lang->load('text');
?>
<div class="content clearfix">
	<ul class="fl">
		<li><a href="#"><?php echo lang('footer.menu1.aboutus');?></a></li>
		<li><a href="#"><?php echo lang('footer.menu1.legalnote');?></a></li>
		<li><a href="#"><?php echo lang('footer.menu1.terms');?></a></li>
	</ul>
	<div class="fr">
	&copy; 2014 <?php echo lang('footer.copyrigth');?>
	</div>
	<br clear="all"/>
	<ul class="fr">
		<li>
			<a title="airsoft rank facebook" target="_blank" href="http://www.facebook.com/airsoftrank/"><div class="fl social-btn-fb-32"></div></a>
			<a alt="airsoft rank twitter" target="_blank" href="http://twitter.com/AirsoftRank/"><div class="fl social-btn-twitter-32"></div></a>
		</li>
	</ul>
</div>
