<?php session_start(); ?>
<?php include BASE_PATH . '/languages/init.language.php'; ?>
<header class="site-header">
  <div class="site-identity">
    <a href="index.php"><img src="assets/images/logo.png" alt="Site Name" /></a>
  </div>  
  <nav class="site-navigation">
  <div class="language-picker js-language-picker" data-trigger-class="li4-btn li4-btn--subtle js-tab-focus">
  <form action="" method="get" id="form_lang" class="language-picker__form">
    <label for="language-picker-select">Select your language</label>
    <select name="language-picker-select" id="language-picker-select">
    <option value="romana" >Romana</option>
            <option value="english" >English</option>
    </select>
  </form>
</div>
  </nav>
</header>
<script src="assets/js/header.js"></script>
<script>
    
</script>