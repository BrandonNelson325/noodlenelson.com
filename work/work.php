<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Work | NoodleNelson</title>
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
                <h2>WORK</h2>
                <p>I work for a company called <strong>Idaho Traffic Safety.</strong> The company itself specializes in many different categories. We do traffic control, Road Signs, Thermoplastic, Stripe Removal, Highway Painting, And most importantly, <strong>Hand Striping.</strong></p>
                <p>I have been working for Idaho Traffic safety since i graduated highschool except for the time that i was serving an LDS mission in Riverside, CA. I started Striping when i was 19 and have been doing it ever since. I now run my own crew and we paint parking lots all over Idaho, Montana and Western Wyoming. Although the company in itself paints highways and roads, we do all of the parking lots, and any hand work out on the highways. I.E. Crosswalks, Arrows, Bike path stencils, Etc. If you would like to see photos of what i do and some of my work check out the work photos tab. Thanks for visiting.</p>
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