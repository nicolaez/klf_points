<!DOCTYPE html>
<html>
<head>
  <title>Lombardis</title>
  <link href="<?php echo base_url(); ?>assets/css/general-styles.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/home-styles.css" rel="stylesheet">
</head>
<body>
<header>
  <div id="klf-logo-box"><img src="<?php echo base_url(); ?>assets/images/klf-logo.jpg"/></div>
  <div id="lombardis-logo-box"><img src="<?php echo base_url(); ?>assets/images/lombardis-logo.jpg"/></div>
  <div class="clear"></div>
</header>
<div id="main-container">
  <div id="login-form">
    <?php echo form_open('Auth_Controller'); ?>
    <div id="form-box">
      <div class="form-element-box">
        <label for="email">Email</label><br/><br/>
        <input type="text" name="email" id="email" class="text-box-style" required="required"/><br/>
      </div>
      <div class="form-element-box">
        <label for="password">PASSWORD</label><br/><br/>
        <input type="password" name="password" id="password" class="text-box-style" required="required"/><br/>
      </div>
      <div class="form-element-box submit-box">
        <input type="submit" class="submit-style" name="signin" id="signin" value="" />
      </div>
    </div>
    </form>
  </div>

</div>
<footer>
  <div id="bookmark"><img src="assets/images/bookmark.jpg" hspace="7" />BOOKMARK THIS PAGE!</div>
  <div id="internal-use">KLF MEDIA'S LOMBARDI PROGRAM IS FOR INTERNAL USE AND CAN ONLY BE USED BY A DEPT. MANAGER</div>
</footer>

</body>
</html>
