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
    <h1 id="about" class="ui header centered">About</h1>
    <div class="paragraph-text">
        <p>
            I am a 27 years developer currently studying Computer Science for one year at Dublin City University.
            This year is part of my five years long <i>Epitech</i> studies, ending in 2019. During my studies,
            I had the opportunity to work as an intern in three different enterprises, which gave me flexibility and
            professional experience. In my past, I used to work as a pastry cook ;
            This was before I decided to make a job of my other passion, Software Development.
            I still love to cook delicious meals and desserts for my friends, my family and my coworkers.
        </p>
        <p>
            I am most experienced in C, C++, Python and Linux environments, but my professional background and
            experience allow me to quickly adapt to new technologies. I can also make use of web technologies,
            from frontend (HTML, SemanticUI) to backend (Server System Administration, DNS, Nginx).
        </p>

    </div>
    <hr/>

    <h1 class="ui header centered">Formation</h1>

    <div class="ui container">
        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image">
                            <img src="res/dcu.jpeg" class="image tiny" onmouseover="$(this).transition('jiggle');">
                        </div>
                        <hr>
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
                            <img src="res/epitech.png" height="48px" onmouseover="$(this).transition('jiggle');">
                        </div>
                        <hr>
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
                            <img class="image" src="res/ste-therese.jpg" height="48px"
                                 onmouseover="$(this).transition('jiggle')">
                        </div>
                        <hr>
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

    <!-- Professional Experience -->
    <div class="ui container">
        <h1 class="ui header centered">Professional Experience</h1>
        <div class="ui card full-width">
            <div class="content">
                <div class="ui items">
                    <div class="item">
                        <div class="ui tiny image" onmouseover="this.transition('jiggle');">
                            <a href="http://contentarmor.net" target="_blank">
                                <img src="res/ca.png" class="image tiny" onmouseover="$(this).transition('jiggle')">
                            </a>
                        </div>
                        <hr>
                        <div class="content middle aligned">
                            <span class="header cv-title">ContentArmor</span>
                            <br/>
                            <span class="internship-subject-text">Visualization Tool For a Video Watermarking System</span>
                            <br>
                            <span><i>Rennes, France</i></span>
                            <br/>
                            April-August 2017
                            <br/>
                            <span>Python, wxPython, C++, FFmpeg</span>
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
                            <a href="https://www.viaccess-orca.com/" target="_blank">
                                <img src="res/Viaccess-Orca.jpg" class="image tiny"
                                     onmouseover="$(this).transition('jiggle')">
                            </a>
                        </div>
                        <hr>
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
                            <a href="https://www.gen-ip.fr/Accueil" target="_blank">
                                <img src="res/genip.jpg" class="ui image tiny" onmouseover="$(this).transition('jiggle')">
                            </a>
                        </div>
                        <hr>
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
                        </div>
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
                        <a href="#">
                            <img src="res/fork.png" class="ui image tiny" onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">Catering</span> (2006-2014)
                        <br>
                        <span class="">
                            <br>Employment - Restaurant                 <span class="internship-subject-text">La Tratt'</span>, (Loudéac, France)
                            <br>Employment - Hotel/Restaurant/SPA*****  <span class="internship-subject-text">L’Agapa</span>, (Perros-Guirec, France)
                            <br>Internship - Hotel/Restaurant****       <span class="internship-subject-text">L’Auberge des Templiers</span>, (Boismorand, France)
                            <br>Internship - Hotel/Restaurant****       <span class="internship-subject-text">L’Écrin</span> , (Plancoët, France)
                            <br>Internship - Hotel/Restaurant****       <span class="internship-subject-text">Domaine de Rochevilaine</span>, Billiers (Morbihan)
                            <br>Internship - Hotel/Restaurant***        <span class="internship-subject-text">Ar Milin’</span>, Châteaubourg (Ille-et-Vilaine)
                            <br>Internship - Hotel/Restaurant**         <span class="internship-subject-text">Ibis, Quiberon</span> (Morbihan)
                            <br>Internship - Hotel/Restaurant           <span class="internship-subject-text">Castel j’Huly</span>, Châteaubourg (Ille-et-Vilaine)
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- !Professional Experience -->

    <hr>
    <h1 class="ui header centered">School projects</h1>
    <div class="ui card full-width">
        <div class="content">
            <div class="ui items">
                <div class="item">
                    <div class="ui tiny image">
                        <a>
                            <img src="res/nasm.png" class="image tiny" onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">CoreWar</span>
                        <br>
                        <span class="internship-subject-text">
                            assembly code compiler & virtual machine able to run assembled programs.
                        </span>
                        <br>
                        <span>
                            The goal of this game is to write an assembly program that will be the last to execute a
                            specific 'live' instruction.
                        </span>
                        <br>
                        <span><i>C++, CMake, SFML, SDL to come</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- !card -->
    <div class="my-margin"></div>

    <hr>
    <h1 class="ui header centered">Personal Projects</h1>
    <div class="ui card full-width">
        <div class="content">
            <div class="ui items">
                <div class="item">
                    <div class="ui tiny image">
                        <a href="https://github.com/querat/ecsGame">
                            <img src="res/github.png" class="image tiny" onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">Entity Component System engine based game</span>
                        <br>
                        <span class="internship-subject-text">
                            I am learning to use <a href="https://github.com/skypjack/entt">Entt</a>
                            with multiple graphic libraries (using interfaces for abstraction).
                        </span>
                        <br>
                        <span>
                            ECS engines are data oriented, reduce the coupling of components
                            and are able to run very fast by reducing cache misses.
                        </span>
                        <br>
                        <span><i>C++, CMake, SFML, SDL to come</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- !card -->
    <div class="my-margin"></div>
    <div class="ui card full-width">
        <div class="content">
            <div class="ui items">
                <div class="item">
                    <div class="ui tiny image">
                        <a href="https://github.com/querat/gwendal.querat.pro">
                            <img src="res/github.png" class="image tiny" onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">This website</span>
                        <br>
                        <span class="internship-subject-text">
                            Made using SemanticUi and JQuery.
                        </span>
                        <br>
                        <span>Running on a Debian VPS</span>
                        <br>
                        <span><i>HTML, CSS, JavaScript, PHP, SemanticUI, Nginx</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- !card -->

    <div class="ui container">
        <hr>
        <h1 class="ui header centered">Hobbies & Interests</h1>
        <div class="paragraph-text">
            <p>
                As said in the <a href="#about">About</a> section, I like to cook pastries and desserts. I also like
                to help my parents grow their own fruits and vegetables in their garden.
                My Desserts are way better when they
                are made with healthy and tasty local products !
                I also like to go running/swimming once or twice a week to stay fit and healthy.
            </p>
            <p>
                On the books side, my favorite author is Terry Pratchett for their hilarious Discworld novels.
                I also enjoy reading SciFi sometimes, be it recent or old
                (Isaac Asimov and Jules Vernes would make good examples).
            </p>
            <p>
                While I am not doing this very often, I enjoy getting my hands dirty by delving into my computer's
                case to fix or improve it. I built it myself back in 2013 and found this to be a fun learning
                experience.
            </p>
            <p>

            </p>
        </div>
    </div>

<!--    <div class="ui container">-->
<!--        <hr>-->
<!--    </div>-->
</div>
<div style="margin-bottom: 128px"></div>

<div class="ui container" style="min-width: 100vw">
    <img src="res/serval.png" class="ui image small floated right aligned">
    <img src="res/construction.png" class="ui image small floated aligned right">
</div>
</body>
</html>