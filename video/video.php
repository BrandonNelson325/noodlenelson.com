<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Videos | NoodleNelson</title>
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
                    <li><a href="/video/snow-videos.php" title="snowboarding videos page">Snowboarding videos</a></li>
                    <li><a href="/video/about-videos.php" title="about my videos">About My Videos</a></li>

                </ul>
            </div>
               <h2>VIDEOS</h2>
               <div class ="image">
                   <ul>
                   <li>
                       <a href="http://www.youtube.com/embed/3_xi9FKJwtw">
                            <img class="pic" src="/images/ijump.jpg" alt="ijump youtube video link">
                       </a>
                   </li>
                   <li>
                       <a href="http://www.youtube.com/embed/I0LrenxX7tA">
                            <img class="pic" src="/images/skatejumps.jpg" alt="skatejumps and trick grinds youtube video link">
                       </a>
                   </li>
                   <li>
                       <a href="http://www.youtube.com/embed/Jkz1cN_JnSY">
                            <img class="pic" src="/images/shawn.jpg" alt="Shawn gettin chunky youtube video link">
                       </a>
                   </li>
                   <li>
                       To see many more entertaining videos please visit my youtube page at :
                       <a href="http://www.youtube.com/noodlenelson">
                          www.youtube.com/noodlenelson 
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
