<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Contact | NoodleNelson</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>

    <body>
        <header id="page-header">
            <div class="container">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </div>        
        </header>
        <nav id="page-nav">
            <div class="container">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?> 
            </div>
        </nav>
        <div class="content">
            <div class = "container">
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
                <h2>Have a question or a suggestion? </h2>
                <h3>Leave me a message:</h3>
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
        </div>
        <footer id ="page-footer">
            <div class="container">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/support-nav.php'; ?>
                Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
            </div>
        </footer>
        <script src="/javascript/analytics.js"></script>
    </body>
</html>