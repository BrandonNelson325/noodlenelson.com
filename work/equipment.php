<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Equipment | Work | NoodleNelson</title>
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
                <h2>EQUIPMENT</h2>
                <p>The main equipment that we use is a Graco Line Lazer. We have two striping crews and each crew has three of these machines. They paint all of our lines. (white and yellow) As well as all of our stencils and Curbs on all of the projects.</p>
                <div class="image">
                <img class="pic" src="/images/lazer3900.jpg" alt="Picture of the main striper I use made by Graco">
                </div><br>(image via paintsprayerslv.com)
                <p>Painting parking lots is a lot more work than just pushing the machine though. Most of our time is spent laying out where the stripes or stencils go. I would say at least 75% of our work is laying out. If all we did was paint, I dont think i would be in school right now. I love my job very much and I will definitely hate to leave it when i finish school. If you would like to see some of my work. Photos will be posted of different jobs I have painted and I will be uploading new ones as I complete them. </p>
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
