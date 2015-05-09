<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Noodle | Snowboarding | NoodleNelson</title>
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
                <h2>THE HISTORY OF NOODLE</h2>
                <p>My nickname in the snowboarding world is "Noodle." A friend from many years ago gave it to me and it has stuck with me ever since. Many people that snowboard with me dont even know that my real name is Brandon Nelson.</p> 
                <p> I have been snowboarding since i was very young. I started snowboarding when i was 12 years old, that makes a whopping 12 years. I have loved snowboarding ever since i started and i dont plan on ever stopping. </p>
                <div class ="image"> 
                <img class="pic" src="/images/kink.jpg" alt="picture of me doing a double kink rail in rexburg idaho">
                <p>This is a photo of me snowboaring in the annual Sled Shed rail jam at smith park.</p>
                </div>
                 
                <div class ="image">
                <img class="pic" src="/images/frontfive.jpg" alt="Noodle doing a frontside 540 at kelly canyon">
                <p>This is a photo of me doing a front side 540 at Kelly Canyon Ski Resort.</p>
                </div>
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
