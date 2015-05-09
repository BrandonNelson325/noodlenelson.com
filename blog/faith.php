<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Faith | Blog | NoodleNelson</title>
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
                    <li><a href="/blog/family.php" title="my family">Family</a></li>
                    <li><a href="/blog/sports.php" title="about my favorite sports">Sports</a></li>
                    <li><a href="/blog/faith.php" title="faith and religion">Faith</a></li>
                </ul>
               </div>
                <h2>FAITH</h2>
                <h3>Latter Day Saint</h3>
                <div class ="image">
                <img class="pic" src="/images/iftemple.jpg" alt="an image of the Idaho Falls temple"><br>(image via ldschurchtemples.com)
                </div>
                <p>I am a member of the church of Jesus Christ of Latter day Saints. A nickname that you may have heard us called before is "mormon." A great way to find more out about the LDS religion is to visit <a href="http://www.mormon.org" title="link to the mormon.org website">"http://www.mormon.org"</a> The LDS religion was restored to this earth today in the year of 1830 by a boy named Joseph Smith who also became the prophet of the church. When Joseph Smith passed away, Brigham Young became the prophet. Brigham Young led the pioneers across the United States and is one of the reasons my family is in Idaho today.</p>
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
