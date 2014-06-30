<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//$user_data = $this->session->userdata('logged_in'); 
$this->load->helper('navigation');
?>
<?php echo menuAdmin1L(null); ?>
<?php /*
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td class="header_l"><img src="<?php echo base_url('static/admin/img/logo_psico.jpg');?>" width="125"/></td>
		<td class="header_r">
		
           	<?php if ($user_data) { ?> 
			<div class="user_info" style="">
				<span><?php echo $user_data["username"]; ?></span> | 
				<!--<a href="#">mi cuenta</a> | -->
				 <a href="#" onclick="doAction('<?php echo base_url('admin/verifyLogin/logout'); ?>')">logoff</a>
			</div>
			<?php echo menuAdmin1L(null); ?>
			<br />
			<?php echo menuAdmin2L('Op2', 'SubOp2'); ?>
			<?php }  ?>
		</td>
	</tr>
</table>
*/ ?>