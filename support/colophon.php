<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Equipment | Work | NoodleNelson</title>
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
                <h2>Web Standards</h2> 
                <p>The Web standards that are applied on my website are those in order of W3 schools. Not only does it look proper, It follows rules that allow people that are blind or those that have to use a screen reader to view it. It also follows the standards to help with internet searches such as google and yahoo. The last thing that it follows is viewability on all browswers.</p>
                <p>
                    Not only does it follow all of the rules to help out with the web, It also uses the most up to date version of HTML5. Which allows a lot more understanding for the following coder, and better for viewing how things are written. 
                </p>
                <p>
                    Web standards are not only good for the user and for usability, they are also very good practice for the person designing the website. If proper web standards are used, it makes things much easier on both ends of the spectrum.
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

