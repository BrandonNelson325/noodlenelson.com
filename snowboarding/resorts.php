<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Resorts | Snowboarding | NoodleNelson</title>
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
                <h2>RESORTS</h2>
                <h3>Some Resorts that are clost to South east idaho:</h3>
                <p><strong>Grand Targhee Ski Resort.</strong><br>
                Alta, Wy<br>
                <a href="http://www.grandtarghee.com" title="link to grand targhees website.">http://www.grandtarghee.com</a></p>
                <p><strong>Kelly Canyon Ski Resort.</strong><br>
                Ririe, ID<br>
                <a href="http://www.skikelly.com" title="link to Kellys Canyons website.">http://www.skikelly.com</a></p>
                <p><strong>Jackson Hole Ski Resort.</strong><br>
                Teton Village, Wy<br>
                <a href="http://www.jacksonhole.com" title="link to Kellys Canyons website.">http://www.jacksonhole.com</a></p>
                <p><strong>Sun Valley Ski Resort.</strong><br>
                Sun Valley, ID<br>
                <a href="http://www.sunvalley.com" title="link to Sun Valley Ski resorts website.">http://www.sunvalley.com</a></p>
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
