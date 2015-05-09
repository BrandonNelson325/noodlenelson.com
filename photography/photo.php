<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Photography | NoodleNelson</title>
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
                    <li><a href="/photography/photo.php" title="photography page">Photos</a></li>
                    <li><a href="/photography/cameras.php" title="cameras i use page">Cameras I use</a></li>
                </ul>
               </div>
                 <h2>PHOTOGRAPHY</h2>
                 <div class ="image">
                 <img class="pic" src="/images/lakesun.jpg" alt="the sun over the lake"></div>
                 <p>This is a photo that i took in Island Park over the Island Park reservoir.</p>
                 <div class ="image">
                 <img class="pic" src="/images/kink.jpg" alt="picture of me doing a double kink rail in rexburg idaho"></div>
                 <p>This is a photo of me doing a kink rail in Rexburg Idaho at the annual Sled Shed Rail Jam.</p>
                 <div class ="image">
                 <img class="pic" src="/images/mount-moran.jpg" alt="picture of mount moran"></div>
                 <p>This photo was taken in Grand Teton Nation Park. The photo is of Mount Moran.</p>
                 <div class ="image">
                 <img class="pic" src="/images/waterfall.jpg" alt="waterfall panoramic picture"></div>
                 <p>This photo was take on a four wheeler ride me and my wife took with her family. It is at a very old dam up above the Rexburg bench, and I do not know the name of it.</p>
                 <p><strong>THESE ARE JUST A FEW OF MY PHOTOGRAPHS! IF YOU WOULD LIKE TO SEE MORE VISIT MY INSTAGRAM PAGE AND MY FACEBOOK PAGE!</strong></p>
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
