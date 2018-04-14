<!DOCTYPE html>
<html>
<head>
    <title>Gwendal</title>
    <meta charset="UTF-8"/>
    <meta name=viewport content="width=device-width, maximal-scale=1, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="style/semantic.min.css">
    <link rel="stylesheet" href="style/cv.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <!-- Needed by stars-rating table -->
    <script type="text/javascript">$(document).ready(function () {
            $(".rating").rating();
        });
    </script>
</head>
<body>

<div class="ui fixed inverted menu" style="background-color: #00cab7">
    <div class="ui container">
        <a href="#" class="header item">
            <!--<img class="logo" src="res/images/logo.png"/>-->
            Gwendal QUÉRAT
        </a>
    </div>
</div>

<header class="ui container color2">
    <div class="ui grid middle aligned color2 white-text">
        <div class="column eight wide center aligned">
            <h1 class="title">Gwendal QUERAT</h1>
            <h3 class="title">Software Developer</h3>
            <!--<div class="ui container left aligned">-->
            <!--</div>-->
        </div>
        <div class="column eight wide>">
            <img class="ui image circular left aligned" src="res/gwen.png"/>
        </div>
    </div>
</header>

<div class="ui container">
    <h1 class="ui header centered">About</h1>
    <p>Blah blah blah</p>
    <hr/>

    <h1 class="ui header centered">Formation</h1>

    <div class="ui container">
        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image">
                            <img src="res/dcu.jpeg" class="image tiny">
                        </div>
                        <div class="content" style="padding: 1rem;">
                            <div class="header">Dublin City University</div>
                            <span><i>&nbsp-&nbspStudy Abroad Program (one year)</i></span>
                            <br/>
                            <i>Dublin, Ireland</i>
                            <br/>
                            2017-2018
                            <br/>
                            Computer Science Study Abroad Year during Epitech Studies
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-margin"></div>

        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image">
                            <img src="res/epitech.png" height="48px">
                        </div>
                        <div class="content" style="padding: 1rem;">
                            <div class="header">Epitech</div>
                            <span><i>&nbsp-&nbspParis Graduate School of Digital Innovation</i></span>
                            <br/>
                            <i>Paris, France</i>
                            <br/>
                            2014-2019
                            <br/>
                            Graduate Diploma in Information Technology
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-margin"></div>

        <div class="ui card full-width">
            <div class="content">
                <div class="ui items middle aligned">
                    <div class="item middle">
                        <div class="ui tiny image">
                            <br>
                            <img src="res/ste-therese.jpg" height="48px">
                        </div>
                        <div class="content" style="padding: 1rem;">
                            <span class="title cv-title">Sainte Thérèse High School</span>
                            <span><i>&nbsp-&nbsp Catering school</i></span>
                            <br/>
                            <span><i>La Guerche De Bretagne, France</i></span>
                            <br/>
                            2006-2010
                            <br/>
                            <span>BEP & BAC Pro - Hotels and Catering Professions</span>
                            <br>
                            <span>Complementary Mention Restaurant Desserts Cook</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>

    <div class="ui container" style="overflow:auto">
        <h1 class="ui header centered">Skills</h1>
        <?php include("table.php"); ?>
    </div>

    <hr>

    <div class="ui container">
        <h1 class="ui header centered">Professional Experience</h1>
        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image">
                            <img src="res/ca.png" class="image tiny">
                        </div>
                        <div class="content middle aligned">
                            <span class="title cv-title">ContentArmor</span>
                            <br/>
                            <span class="internship-subject-text">Visualization Tool For a Video Watermarking System</span>
                            <br>
                            <span><i>Rennes, France</i></span>
                            <br/>
                            April-August 2017
                            <br/>
                            <span>Python, wxPython, C++, FFmpeg</span>
                        </div>
                        "
                    </div>
                </div>
            </div>
        </div>
        <div class="my-margin"></div>
        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image">
                            <img src="res/Viaccess-Orca.jpg" class="image tiny">
                        </div>
                        <div class="content middle aligned">
                            <span class="title cv-title">Viaccess-Orca</span>
                            <br>
                            <span class="internship-subject-text">
                                Implementation of an automated testing solution for the Android platform
                            </span>
                            <br>
                            <span><i>Cesson-Sévigné, France</i></span>
                            <br/>
                            <span>Part-Time contract 2 days a week, September-December 2016</span>
                            <br/>
                            <span></span>
                            <br>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-margin"></div>
        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image">
                            <img src="res/genip.jpg" class="image tiny">
                        </div>
                        <div class="content middle aligned">
                            <span class="title cv-title">Gen-IP Solutions</span>
                            <br>
                            <span class="internship-subject-text">
                                Implementation of an Administration Interface for call Centers
                            </span>
                            <br/>
                            <span><i>Le Rheu, France</i></span>
                            <br/>
                            <span>June-November 2015</span>
                            <br/>
                            <span>JavaScript, PHP, MySQL, ExtJS</span>
                            <br>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <h1 class="ui header centered">School projects</h1>
    <hr>
    <h1 class="ui header centered">Personal Projects</h1>


    <div class="ui container">
        <hr>
        <h1 class="ui header centered">Hobbies</h1>
        <p>
            You can do anything your heart can imagine. You can create anything that makes you happy. We have a
            fantastic
            little sky!
        </p>

        <p>
            You want your tree to have some character. Make it special. Water's like me. It's laaazy ... Boy, it
            always
            looks for the easiest way to do things Trees grow in all kinds of ways. They're not all perfectly
            straight.
            Not every limb is perfect.
        </p>

        <p>
            Take your time. Speed will come later. Be careful. You can always add more - but you can't take it away.
            There is immense joy in just watching - watching all the little creatures in nature. As trees get older
            they
            lose their chlorophyll.
        </p>

        <p>
            It looks so good, I might as well not stop. Nothing's gonna make your husband or wife madder than coming
            home
            and having a snow-covered dinner. Just use the old one inch brush. Here we're limited by the time we
            have.
        </p>

        <p>
            I want everbody to be happy. That's what it's all about. Isn't that fantastic that you can create an
            almighty
            tree that fast? That's the way I look when I get home late; black and blue.
        </p>

    </div>

    <div class="ui container">
        <hr>
    </div>

</div>
</body>
</html>