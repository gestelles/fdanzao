<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->helper('navigation');
/*
$user_data = $this->session->userdata('logged_in'); 
$this->load->helper('navigation');
?>
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

<?php */?>
<nav>
<?php echo menuAdmin1L(null); ?>
</nav>
<div>
	<form name="search_frm" method="post">
		<input type="text" name="query">
	</form>
</div>
<div>
	<form name="login_frm" method="post">
		<input type="text" name="login">
		<input type="password" name="login">
		<input type="submit">
	</form>
</div>
