<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Events | Snowboarding | NoodleNelson</title>
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
                <h2>EVENTS</h2>
                <p><strong>October 13th, 2012</strong><br>
                <strong>Location:</strong>Barrie's Ski and Sports, Pocatello, ID. <br>
                <strong>Description:</strong>Barrie's Ski and Sports pre-season rail jam.</p>
                
                <p><strong>October 27th, 2012</strong><br>
                <strong>Location:</strong>Idaho Watersports. Burley, ID <br>
                <strong>Description:</strong>Idaho Watersports pre-season rail jam.</p>
                
                <p><strong>October 10th, 2012</strong><br>
                <strong>Location:</strong>Smith park. Rexburg, ID <br>
                <strong>Description:</strong>Sled Shed board shop pre-season rail jam.</p>
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
