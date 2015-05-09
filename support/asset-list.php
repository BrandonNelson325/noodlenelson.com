<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title>NoodleNelson</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>

    <body>
        <header id="page-header">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </div>        
        </header>
        <nav id="page-nav">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?> 
            </div>
        </nav>
        <div class="content">
            <div class="container sixteen columns">
            <h2>Asset List</h2>
            <h3>Home</h3>
            <ul>
                <li>photo</li>
                <li>navigation</li>
                <li>welcome</li>
                <li>News feed</li>
                <li>links to all of my social networks</li>
            </ul>
            <h3>Snowboarding</h3>
            <ol>
                <li>My snowboarding background

                    <ul>
                        <li>background/history of snowboarding</li>
                        <li>why i love it</li>
                        <li>photos</li>
                        <li>contests i have won/competed in.</li>
                    </ul>
                </li>
                <li>events

                    <ul>
                        <li>lists of different types of events</li>
                        <li>locations</li>
                        <li>times</li>
                        <li>sign ups</li>

                    </ul>
                </li>
                <li>New snowboarders

                    <ul>

                        <li>Where to start</li>
                        <li>How to pick a board</li>
                        <li>Where to get lessons</li>

                    </ul>
                </li>
                <li>Resorts

                    <ul>

                        <li>closest to furthest</li>
                        <li>best for powder/best for park</li>

                    </ul>
                </li>
                <li>snowboard videos</li>
            </ol>
            <h3>Videos</h3>
            <ol>
                <li>videos

                    <ul>
                        <li>videos</li>
                        <li>link to youtube page</li>
                    </ul>
                </li>    
                <li>About my videos

                    <ul>
                        <li>why i make them</li>
                        <li>upcoming videos</li>
                        <li>future of videos</li>
                    </ul>
                </li>

            </ol>
            <h3>Photography</h3>
            <ol>
                <li>Cameras

                    <ul>
                        <li>iphone</li>
                        <li>Nikon</li>
                        <li>gopro</li>
                    </ul>
                </li>
                <li>Different types of photography

                    <ul>
                        <li>sunsets</li>
                        <li>nature</li>
                        <li>portraits</li>
                    </ul>
                </li>    
                <li>photos</li>
                <li>Links to photography sites</li>
            </ol>
            <h3>Work</h3>
            <ul>
                <li>What I do (stripe roads and parking lots)</li>
                <li>Photos of work</li>
                <li>Projects I have worked on</li>
                <li>Upcoming projects</li>
                <li>Links to striping sites</li>
            </ul>
            <h3>Blog</h3>
            <ol>
                <li>sports

                    <ul>
                        <li>favorite sports</li>
                        <li>favorite teams</li>
                        <li>news of teams</li>
                    </ul>
                </li>
                <li>family

                    <ul>
                        <li>photos</li>
                        <li>about</li>
                    </ul>
                </li>    
                <li>hobbies

                    <ul>
                        <li>skateboarding</li>
                        <li>wakeboarding</li>
                        <li>soccer</li>
                        <li>guns</li>
                    </ul>
                </li>

                <li>faith

                    <ul>
                        <li>beliefs</li>
                    </ul>
                </li>

            </ol>
            <h3>About</h3>
            <ul>
                <li>photo</li>
                <li>Paragraph about me</li>
                <li>links to all of my pages</li>
            </ul>
            </div>
        </div>
        <footer id ="page-footer">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/support-nav.php'; ?>
                Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
            </div>
        </footer>
        <script src="/javascript/analytics.js"></script>
    </body>
</html>