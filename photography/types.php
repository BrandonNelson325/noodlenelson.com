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
                 <h2>TYPES OF PHOTOGRAPHY</h2>
                 <p>There is more than one type of photo that i like to take. My favorite would probably have to be photos of nature in genera. Sunsets, Sunrises, mountains, Lakes, etc. The second kind I love to take our of extreme sports. Snowboarding, Skateboarding, Wakeboarding, etc. I also like to take photos of interesting things i see in daily life.</p>
                 <p>You can see the different types of photography on my photography page or I would love for you to visit my Instagram and Facebook pages.</p>
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
