<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="author" content= "Brandon Nelson">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, macimum-scale=1">
        <link rel="stylesheet" href="/css/screen.css" />
        <title>page1</title>
   <!--[if lt IE 9]><script src="javascript/html5shiv-printshiv.js"></script><![endif]-->
    </head>

    <body>
        <header id="page-header">
            <div class="container">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php';?>
            </div>
        </header>
        <nav id="page-nav">
            <div class="container">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/nav.php';?>
            </div>
        </nav>
        <div id="content">
            <div class="container">
                <h1>page1 content</h1>
                <!--add page content here-->
            </div>
        </div>
        <footer id="page-footer">
            <div class="container">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php';?>
                Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
            </div>
        </footer>    
    <script src="/javascript/analytics.js"></script>
    </body>
</html>
