<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Work Photos | Work | NoodleNelson</title>
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
                    <li><a href="/work/work.php" title="work page">Work</a></li>
                    <li><a href="/work/work-photos.php" title="photos of my work">My striping photos</a></li>
                    <li><a href="/work/equipment.php" title="equipment i use for striping">Equipment</a></li>
                </ul>
               </div>
                <h2>WORK PHOTOS</h2>
                <img src="/images/forthallhc.jpg" alt="handicaps i painted at fort hall hotel.">
                <img src="/images/alpineairport.jpg" alt="The end of the airport we painted in Alpine, WY.">
                <img src="/images/paintballard.jpg" alt="me painting a ballard at the jackson hole airport">
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
