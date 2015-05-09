<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Contact Page | World Demo Site</title>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/head.php'; ?>
 </head>
 <body>
  <header id="page-header">
   <div class="container sixteen columns">
    <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>
   </div>
  </header>
  <nav id="page-nav">
   <div class="container sixteen columns">
    <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/navigation.php'; ?>
   </div>
  </nav>
  <div id="content">
   <div class="container sixteen columns">
    <h1>Contact Page</h1>
    <?php
        if(!empty($errors)){
            echo '<ol class="error">';
            foreach ($errors as $value) {
                echo "<li>$value</li>";
            }
            echo '</ol>';
        } elseif (!empty ($message)) {
            echo "<p>$message</p>";
        }
    ?>
    <form action="index.php" method="post">
     <fieldset>
      <label for="first">First Name:</label>
      <input id="first" name="first" type="text">
      <label for="last">Last Name:</label>
      <input id="last" name="last" type="text">
      <label for="email">Email Address:</label>
      <input id="email" name="email" type="email">
      <label for="subject">Subject:</label>
      <input id="subject" name="subject" type="text">
      <label for="message">Message:</label>
      <textarea name="message" id="message"></textarea>
      <!-- This displays the captcha image -->
<label>&nbsp;</label><img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)
<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><input id="cap_code" name="cap_code" type="text" size="6">
      <label>&nbsp;</label>
      <input name="messagesent" type="submit" value="Send">
     </fieldset>
    </form>
  </div>
  <footer id="page-footer">
   <div class="container sixteen columns">
    <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
    Last Updated: <?php echo date('j F, Y', getlastmod());  ?>
   </div>
  </footer>
  <script src="/js/analytics.js"></script>
 </body>
</html>