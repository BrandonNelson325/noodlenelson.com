<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Snowboarding Videos | Snowboarding | NoodleNelson</title>
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
                    <li><a href="/video/video.php" title="videos page">Videos</a></li>
                    <li><a href="/video/snow-videos.php" title="snowboarding videos page">Snowboarding videos</a></li>
                    <li><a href="/video/about-videos.php" title="about my videos">About My Videos</a></li>

                </ul> 
                </div>
                <h2>SNOWBOARDING VIDEOS</h2>
                <div class="image">
                    <ul>
                        <li>
                       <a href="http://www.youtube.com/embed/3_xi9FKJwtw">
                            <img class="pic" src="/images/sledshed.jpg" alt="The nayborhood at sled shed rail jam youtube video link">
                       </a>
                       </li>
                       <li>
                       <a href="http://www.youtube.com/embed/UGYza60ZgA4">
                            <img class="pic" src="/images/noodlebeast.jpg" alt="Noodle is a beast youtube video link">
                       </a>
                       </li>
                       <li>
                       <a href="http://www.youtube.com/embed/5ZjAYh_yY-4">
                            <img class="pic" src="/images/2011.jpg" alt="Noodle 2011-2012 youtube video link">
                       </a>
                       </li>
                       <li>
                       <a href="http://www.youtube.com/embed/NCsqNNZ6EG0">
                            <img class="pic" src="/images/funtimes.jpg" alt="Noodle fun times edit youtube video link">
                       </a>
                       </li>
                    </ul>
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
