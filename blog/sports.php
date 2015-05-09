<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>Sports | Blog |  NoodleNelson</title>
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
                <h2>SPORTS</h2> 
                <h3>The Utah Jazz</h3>
                <div class ="image">
                <img class="pic" src="/images/utahjazz.jpg" alt="utah jazz logo"><br>(image via Wikipedia.org)
                </div>
               
                <p>The Utah Jazz are my favorite sports team out there. During basketball season you will find me watching every Jazz game that they play. I even try to go to as many games as i can! </p>
                <p>I have been a Utah Jazz fan ever since I was a kid. My dad used to record every single game and let me stay up late to watch them with him. I now record every game myself and plan to do the same with my own boys.</p>
                <h3>The San Francisco 49ers</h3>
                <div class ="image">
                <img class="pic" src="/images/49ers.jpg" alt="49ers logo"><br>(image via footballfanstuff.com)
                </div>
                
                <p>The San Francisco 49er's are my favorite NFL football team. I have also been a fan of them since i was a young kid. Ever since Steve Young was the quarter back I have loved them. I thought that it was the coolest thing ever that there was a Mormon Quarterback in the NFL.</p>
                <h3>The Boise State Broncos</h3>
                <div class ="image">
                <img class="pic" src="/images/boisestate.jpg" alt="the logo for the Boise State Broncos."><br>(image via orlandosentinel.com)
                </div>
                <p>The Boise State Broncos are my favorite College football team. When i got married to my wonderful wife, I pretty much was forced into being a fan. My wife's entire family bleeds blue and orange, and probably will til they die. We have attended a couple of games, and i must admit, it is awesome to see a team from good old Idaho to play a game of football like that!</p>
                
                <h3>Soccer</h3>
                <p>Although I absolutely love watching all of these other teams play, My all time favorite sport to actually play is Indoor Soccer. I have been playing this since I was in kindergarten, and have loved every single minute of it. I now play in both Co-Ed teams, with both my wife and all of my friends wifes, As well as very competitive Men's Leagues.</p>
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
