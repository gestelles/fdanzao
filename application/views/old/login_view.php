<html>
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
   <h1>Simple Login with CodeIgniter</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
   
   --------------
   <div class="span4 loginlinks">
            <form class="form-horizontal well" method="post" id="form" action="/login/dologin">
                <fieldset>
                    <legend>Sign in with</legend>
            <a href="/airsoft/auth/oauth2/facebook" class="facebook"> facebook </a>

            <a href="/airsoft/auth/oauth/twitter" class="twitter"> twitter </a>

            <a href="/airsoft/auth/oauth2/google" class="google-plus"> google+ </a>

            <a href="/airsoft/auth/oauth/linkedin" class="linkedin"> linkedin  </a>

                    </fieldset>
                        </form>
        </div> 
 </body>
</html>