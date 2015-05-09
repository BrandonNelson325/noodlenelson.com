<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Snowboarding | NoodleNelson</title>
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
                <div class="second-nav">
                    <ul>
                        <li><a href="/snowboarding/snowboarding.php" title="snowboarding  page">Snowboarding</a></li>
                        <li><a href="/snowboarding/noodlesnowboarding.php" title="snowboarding page about me">Noodle</a></li>
                        <li><a href="/snowboarding/events.php" title="snowboarding events page">Events</a></li>
                        <li><a href="/snowboarding/resorts.php" title="snowboarding resorts page">Resorts</a></li>
                        <li><a href="/snowboarding/jumptosnow.php" title="snowboarding videos page">Snowboarding videos</a></li>
                    </ul>  
            </div>
                <h2>Click the link below to check out my snowboarding videos</h2>
                <ul>
                    <li><a href="/video/snow-videos.php" title="snowboarding videos page">Jump to Videos of Snow Boarding</a></li>
                </ul>
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
