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
                <h2>SNOWBOARDING</h2>
                <p>-A board resembling a small surfboard and equipped with bindings, used for descending snow-covered slopes on one's feet but without ski poles.</p>
                <h3>EQUIPMENT</h3>
                <p>There is a lot of Equipment needed to snowboard. Some of the main ones that you will absolutely need are snowboarding bindings, a Snowboard, and Snowboarding boots.
                <h4>Snowboard Bindings</h4>
                <div class ="image">
                <a href="http://www.unionbindingcompany.com" title="link to unions website.">
                    <img class="pic" src="/images/union.jpg" alt="Union Superpro snowboarding bindings"/></a>
                <br>(Image via absoulute-snow.uk)
                    </div>
                <p>Snowboard bindings are used to hold the Snowboarders foot to the actual Snowboard.</p>
                <h4>Snowboard</h4>
                <div class ="image">
                <img class="pic" id="draft" src="/images/draft.jpg" alt="arbor draft snowboard"><br>(image via Rei.com)
                </div>
                <p>The snowboard is the unit that actually carries you down the mountain. Many years of technology goes in to every snowboard made. They are designed to stay on top of the snow as well as turn and flex according to the snow conditions.</p>
                <h4>Snowboarding Boots</h4>
                <div class ="image">
                <img class="pic" src="/images/32boots.jpg" alt="thirty two snowboard boots"><br>(image via Evo.com)
                </div>
                <p>Snowboarding boots aren't just any regular boot. They are designed specifically for snowboarding. There are many different types of snowboarding boots, and are chosen, according to the type of riding you personally do.</p>
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


