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
              <h2>Site Plan</h2>

            <h3>Project Brief</h3>
            <ol>
                <li>Site Name: Noodlenelson.com</li>
                <li>Summary: My website is going to be dedicated to inform people about Me, snowboarding, videos, photography, and 
                    striping. It will show my own work, as well as give them information on how they could do it themselves.</li>
                <li>Objectives: To give people entertainment, information, and for future employers to see my work.</li>
                <li>Target Audience:
                    <ul>
                        <li>My website can be for people of all ages, although will be more directed to people that are interested in extreme sports, videos, and photography. </li>
                        <li>My website will be available on all browsers and will be very user friendly.</li>
                        <li>People can come here to see what is going on in my life,upcoming snowboarding events, cool photos, or learn how to get started in any of the categories.</li>
                    </ul>                
                </li>
                <li>Perception Strategy
                    <ul>
                        <li>Entertaining, Easy, Helpful.</li>
                        <li>I will post very entertaining videos that i make as well as informative videos for other authors. My site will be very easy to navigate and easy on the eyes. I will 
                            have simple beginners instructions that will not be confusing to beginners.</li>
                    </ul>
                </li>
                <li>Message strategy
                    <ul>
                        <li>I want to show people what i love, and show them why. I also want to give information to the local community about snowboarding. </li>
                        <li>On each page it will have my own work, as well as show them why and how they should get involved. The snowboarding page will have info on all local events and resorts.</li>
                    </ul>
                </li>

                <li>site diagrams
                    <h4>Home page</h4>
                    <ul id="home-diagrams">
                        <li><img id="bhome" src="/images/browserhome.jpg" alt="browser home page"></li>
                        <li><img id="ipadhome" src="/images/ipadlandhome.jpg" alt="ipad landscape homepage"></li>
                        <li><img id="phonehome" src="/images/phonehome.jpg" alt="iphone homepage"></li>
                    </ul>
                    <h4>Snowboarding page</h4>
                    <ul id="snow-diagrams">
                        <li><img id="browsersnow" src="/images/browsersnow.jpg" alt="snowboarding browser"></li>
                        <li><img id="ipadsnow" src="/images/ipadportsnow.jpg" alt="ipad portrait snowboard page"></li>
                        <li><img id="phonesnow" src="/images/phonesnow.jpg" alt="iphone snowboard page"></li>
                    </ul>
                </li> 

            </ol>
            <h3>Persona</h3>
            <ol>
                <li>Basic Demographics
                    <ol>
                        <li>Age: 19</li> 
                        <li>Occupation: Subway</li>
                        <li>Education: College Student</li>
                        <li>Income: $15,000 a year</li>
                    </ol>
                </li>
                <li>Personal
                    <ol>
                        <li>Name: Jeremy Francis</li>
                        <li><img id="jeremy" src="/images/romel.jpg" alt="Photo of Jeremy Francis"></li>
                        <li>Description: Jeremy Francis is a 19 year old kid From Idaho Falls, Idaho that loves to snowboard and skateboard. </li>
                    </ol>
                </li>
                <li>Technical profile
                    <ol>
                        <li>Preferred OS: MacOSX</li>
                        <li>Browser: Chrome</li>
                        <li>Internet skill: Intermediate</li>
                        <li>Favorite sites: Facebook.com, Snowboardermag.com, youtube.com, theberrics.com</li>
                    </ol>
                </li>
                <li>Audience Goals: The user heard about my website from some local snowboarders. He has came to look at some of my videos, look at my pictures, and learn how to contact me.</li>
                <li>Business Goals: I want the user to  be fascinated by every page, making them want to look at every page on the site.</li>
            </ol>
            <h3>Scenario</h3>
            <ol>
                <li>I heard that there is a snowboarding event coming up this next weekend. I heard if you go to Noodlenelson.com you can see all of the upcoming snowboarding events. Then we can watch some videos and look at photos afterwards to get pumped up for the competition.</li>
                <li>Noodle nelson just came out with a new snowboarding video, we should go check it out at his website.</li>
            </ol> 
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
