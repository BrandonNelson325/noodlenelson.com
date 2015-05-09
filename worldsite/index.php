
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <title></title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>

    <body>
        <header id="page-header">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php';?>
            </div>
        </header>
        <nav id="page-nav">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/nav.php';?>
            </div>
        </nav>
        <div id="content">
            <div class="container sixteen columns">
                <h1>Content Heading</h1>
                <img id="chichen" src="/images/chichen-itza-observatory.jpg" alt="Image of chichen itza"><!--add page content here-->
            </div>
            <section class="hero container sixteen columns">
                <div class="two-thirds column">
                    <h2>Observatory</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
                <div class="hero one-third column">
                    <h2>Ball Court</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>                
            </section>
        </div>
        <footer id="page-footer">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php';?>
                Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
            </div>
        </footer>    
    <script src="/javascript/analytics.min.js"></script>
    </body>
</html>