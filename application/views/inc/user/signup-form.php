<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php  // echo Modules::run('login/index/index'); ?>
<?php //echo get_url('asdasd/asdasdddd'); ?>
<?php //echo validation_errors(); ?>
<h1>Completa tu registro</h1>
<p>Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla</p>
<form name="loginfrm" method="post">
	<label><?php echo lang("nickname"); ?></label><br/>
	<input type="text" name="nickname" maxsize="20" placeholder="your war/nick name" value="<?php echo set_value('nickname'); ?>"><?php echo form_error('nickname', '<span class="error">', '</span>'); ?><br/>
	<label><?php echo lang("email"); ?></label><br/>
	<input type="text" name="email" maxsize="50" placeholder="my@email.com" value="<?php echo set_value('email'); ?>"><?php echo form_error('email', '<span class="error">', '</span>'); ?><!--span class="accept">Todo correcto</span--><br/>
	<label><?php echo lang("country"); ?></label><br/>
	<select name="country">
			<option value="">Please select...</option>
			<?php foreach ($countries as $country) { ?>
				<option value="<?php echo $country->country_iso_code; ?>" <?php echo set_select('country', $country->country_iso_code, TRUE); ?>><?php echo $country->country_name?></option>
			<?php } ?>
	</select><?php echo form_error('country', '<span class="error">', '</span>'); ?><br/>
	<label><?php echo lang("state"); ?></label><br/>
	<select name="state" id="rrr">
			<option value="">Please select...</option>
			<option value="VLC">Valencia</option>
			<option value="MAD">Madrid</option>
	</select><?php echo form_error('state', '<span class="error">', '</span>'); ?><br/>
	<input type="submit" name="start" class="bbg" value="Register now!">
	<br/>Haciendo clic en Registrarme ahora acepto las <a href="#">condiciones de uso</a>.
</form>

<script type="text/javascript">
	$(function() {
		$("select[name='country']").change(function() {
			$.ajax({
				//dataType: "json",
				url: '<?php echo get_url('user/states'); ?>/' + $(this).val(),
				//data: {}, //{ country_code: $(this).val() },
				cache: false,
			}).done(function(data) {
			  var states = eval(data);
	    	  var subType = $("select[name='state']");
	    	  subType.empty();
	    	  subType.append($('<option></option>').text("Selecciona...").val(""));
	    	  $.each(states, function(index, item) { 
	          	subType.append($('<option></option>').text(item.subdivision_name).val(item.subdivision_iso_code));
	          });
	          //$("select[name='state']").val('US');
			}).fail(function(jqXHR, textStatus, errorThrown) {
	          		alert(errorThrown);
			});
	    });
	});
</script>