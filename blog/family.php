<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title> Family | Blog | NoodleNelson</title>
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
                <h2>FAMILY</h2>
                <h3>The Nelson Family</h3>
                <div class ="image">
                <img class="pic" src="/images/family.jpg" alt="photo of the Nelson Family">
                </div>
                <p>This is a photo of my side of the family. I grew up with only one sister. She is now married and has two kids. Taylona, who is the youngest in the photo, and now madisyn, who I will post a photo of very soon. My sisters name is Brianna, and her husbands name is josh. My parents names are Arlo and Traci. We all currently live in Idaho Falls and im pretty sure we will all be here for as long as possible.</p>
                <h3>Max</h3>
                <div class ="image">
                <img class="pic" src="/images/max.jpg" alt="photo my dog max"> 
                </div>
                <p>This is my wife and I's wonderful dog Max. Max is a four year old yorkie, and he is the man! We have only had max for a couple of months but he is definitely part of our little family!</p>
                <h3>The Hills</h3>                
                <div class ="image">
                <img class="pic" src="/images/hills.jpg" alt="Photo of the Hill side of the family">
                </div>
                <p>This  is a photo of my wifes side of the family, The Hills. Much bigger than my side of the family but still very close. All but two of the brothers and sister in laws live in Idaho Falls and we try to get together at least once a week and eat dinner. Im grateful to be a part of this family even through all of the craziness!</p>
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
