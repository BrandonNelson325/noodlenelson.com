<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>About My Videos | Videos | NoodleNelson</title>
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
               <div class="second-nav">
                <ul>
                    <li><a href="/video/video.php" title="videos page">Videos</a></li>
                    <li><a href="/snowboarding/snow-videos.php" title="snowboarding videos page">Snowboarding videos</a></li>
                    <li><a href="/video/about-videos.php" title="about my videos">About My Videos</a></li>
                </ul>
               </div>
                <h2>ABOUT MY VIDEOS</h2>
                <p>I make most of my videos from things that me and my friends love to do. I have videos anywhere from skateboarding to jumping on trampolines. It is very rare that any video I make tells a story. My videos usually contain some sort of extreme sport and a song for the backgroung. I will have a lot of videos posted on this website and there is a link to my youtube page at the top of the website. Thanks, and Enjoy.</p>
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
