<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> About | NoodleNelson</title>
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
            <div class="container">
                <h2>About Me</h2>
                <div class ="image">
                <img class="pic" src="/images/engagement1.jpg" alt="Me and my wife in one of our engagment pictures.">
                </div>
                <p> Hello, My name is Brandon Arlo Nelson, This website is here to show you all about my life. 
                    About my family, my work, my favorite sports, and everything in between. I grew up in Idaho falls Idaho, and went to Idaho Falls High School. 
                    I have been married
                    for three and a half years to the most wonderful woman in the world, Katelyn Hill nelson.
                    We do not have any kids yet, but hopefully that will soon change. I am about half way done with school and cannot wait to move on with my career. So far I absolutely love the CIT program and cannot wait to learn more about web development.  I have links to all of my social networks in the header of each page, Feel free to check them out and follow me on instagram! Thanks for visiting my site! dont forget to leave feedback.
                </p>
            </div>
            <br class="clearfix">
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
