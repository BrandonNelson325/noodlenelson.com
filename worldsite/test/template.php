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
                <!--add page content here-->
            </div>
            
        </div>
        <footer id="page-footer">
            <div class="container sixteen columns">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php';?>
                Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
            </div>
        </footer>    
    <script src="/javascript/analytics.js"></script>
    </body>
</html>
