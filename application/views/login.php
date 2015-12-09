<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 09/12/2015
 * Time: 9:19 AM
 */

require 'header.php';
?>



<h1>Admin login</h1>
<?php //echo validation_errors(); ?>
<?php echo form_open('Auth_Controller'); ?>
<label for="email">Email:</label>
<input type="text" size="20" id="email" name="email"/>
<br/>
<label for="password">Password:</label>
<input type="password" size="20" id="password" name="password"/>
<br/>
<input type="submit" value="Login"/>
</form>

<!--
<div class = "container">
  <div class="wrapper">
    <form action="" method="post" name="Login_Form" class="form-signin">
      <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
      <hr class="colorgraph"><br>

      <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>

      <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
    </form>
  </div>
</div>
-->
<?php
require 'footer.php';
?>
