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
            <h2>Style Guide</h2>
            <h3>Color Scheme</h3>
            <p>The different colors used on NoodleNelson.com are:</p>
            <br>
            <ul id="colors">
                <li>
                    <div class="swatch" style="background: #F55E33;"></div>
                    hex: #F55E33
                    <br>
                    rgb(245, 94, 51)
                </li>
                <li>
                    <div class="swatch" style="background: #FFF;"></div>
                    hex: #FFFFFF
                    <br>
                    rgb (255, 255, 255)
                </li>
                <li>
                    <div class="swatch" style="background: #000;"></div>
                    hex: #000000
                    <br>
                    rgb (0, 0, 0)
                    <br>
                </li>
                <li>
                    <div class="swatch" style="background: #545454;"></div>
                    hex: #545454
                    <br>
                    rgb(84, 84, 84)
                </li>
            </ul>
            <br>
            <ul>
                <li>The color of my main body text will be #000000: Black.</li>
                <li>The Color of my headings will be #F55E33: close to a burnt orange. </li>
                <li>My links will stay the standard blue because it is easy to see and recognize.</li>
                <li>My Logo contains of the #000000: black color, and the #F55E33 color.</li>                       
            </ul>

            <h3>Typography On NoodleNelson.com</h3>

            <table id ="typography">
                <tr>
                    <td><strong>Item</strong></td>
                    <td><strong>Font</strong></td>
                    <td><strong>Color</strong></td>
                    <td><strong>line-height</strong></td>
                </tr>
                <tr>
                    <td>Main Navigation</td>
                    <td>"arial black, 20px"</td>
                    <td>"#FFFFF, white."</td>
                    <td>height: 30px</td>
                </tr>
                <tr>
                    <td>H1</td>
                    <td>"arial black, 40px"</td>
                    <td>"#F55E33 burnt orange."</td>
                    <td>height: 58px</td>
                </tr>
                <tr>
                    <td>H2</td>
                    <td>"italic, 35px"</td>
                    <td>"#F55E33 burnt orange."</td>
                    <td>height: 50px</td>
                </tr>
                <tr>
                    <td>H3</td>
                    <td>"italic, 25px"</td>
                    <td>"#F55E33 burnt orange."</td>
                    <td>height: 35px</td>
                </tr>
                <tr>
                    <td>Default paragraph text</td>
                    <td>"default, 20px."</td>
                    <td>"#000000, black."</td>
                    <td>height: 30px</td>
                </tr>
                <tr>
                    <td>Sidebar Navigation</td>
                    <td>"arial black, 20px"</td>
                    <td>"#000000, black."</td>
                    <td>height: 30px</td>
                </tr>
            </table>

            <h3>Navigation</h3>
            <ul>
                <li>Location: The location will be at the bottom of the header on the right side of the                          page</li>
                <li>Size: 29px tall </li>
                <li>Behavior: when the mouse scrolls over the links, it will highlight to "#F55E33 burnt                         orange." </li>
            </ul>
            <h3>Graphics</h3>

            <p>Background wallpaper</p>
            <div id="sg-background"></div>

            <ul>
                <li>My content will all be inside of a div that takes up most of the main section of the page.                   </li>
                <li>The sizes of my images will be big enough to be seen in good detail, but not to big as to be                 obnoxious</li>
                <li>Most of my images will be placed within the content and organized accordingly.</li>
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

