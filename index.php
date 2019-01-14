<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gwendal QUÉRAT</title>
    <meta charset="UTF-8"/>
    <meta name=viewport content="width=device-width, maximal-scale=1, initial-scale=1">
    <meta name="description" content="Personal website of Gwendal QUERAT">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="style/semantic.min.css">
    <link rel="stylesheet" href="style/cv.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <!-- Needed by stars-rating table -->
    <script>
        $(document).ready(function () {
            $(".rating").rating();
        });
    </script>
    <!-- SEO-->
    <script type="application/ld+json">
      {
      "@context": "http://schema.org",
      "@type":           "Person",
      "familyName":      "Quérat",
      "givenName":       "Gwendal",
      "name":            "Gwendal QUÉRAT",
      "jobTitle":        "Software Developer",
      "gender":          "male",
      "nationality":     "french",
      "url":             "https://gwendal.querat.pro"
      }

    </script>
</head>
<body>

<div class="ui fixed inverted menu" style="background-color: #00cab7;">
    <div class="ui container">
        <a href="#" class="header item">
            Gwendal QUÉRAT
        </a>
    </div>
</div>

<header class="ui container color2 full-width" id="header-specific-hack">
    <div class="ui items middle aligned color2 white-text">
        <div class="ui item middle aligned">
            <div class="ui content middle aligned" style="text-align: center">
                <h1 class="title">Gwendal QUÉRAT</h1>
                <img alt="photo" class="ui image circular centered" src="res/gwen.png"/>
                <h3 class="title">Software Developer</h3>
            </div>
        </div>
    </div>
</header>

<div class="ui container">
    <h1 id="about" class="ui header centered">About</h1>
    <div class="paragraph-text">
        <p>
            I am a 28 years old developer currently studying Computer Science at
            <a href="http://www.epitech.eu/">Epitech</a>
            for my fifth and last year.
            I also have been studying abroad at <a href="https://www.dcu.ie/">Dublin City University</a> for a year
            (2017-2018).
        </p>
        <p>
            During my studies, I had the opportunity to work as an intern in three different enterprises, which gave me
            flexibility and
            professional experience. In my past, I used to work as a pastry cook ;
            This was before I decided to make a job of my other passion, Software Development.
            I still love to cook delicious meals and desserts for my friends, my family and my coworkers.
        </p>
        <p>
            I am most experienced in C, C++, Python and Linux environments, but my professional background and
            experience allow me to quickly adapt to new technologies. I can also make use of web technologies,
            from frontend (ReactJs, Redux, bootstrap...) to backend (Server System Administration, DNS, Nginx, REST APIs).
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
                            <img alt="dcu" src="res/dcu.jpeg" class="image tiny"
                                 onmouseover="$(this).transition('jiggle');">
                        </div>
                        <hr>
                        <div class="content" style="padding: 1rem;">
                            <div class="header">Dublin City University</div>
                            <span><i>&nbsp;-&nbsp;Study Abroad Program (one year)</i></span>
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
                            <img alt="dcu" src="res/epitech.png" height="48"
                                 onmouseover="$(this).transition('jiggle');">
                        </div>
                        <hr>
                        <div class="content" style="padding: 1rem;">
                            <div class="header">Epitech</div>
                            <span><i>&nbsp;-&nbsp;Paris Graduate School of Digital Innovation</i></span>
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
                            <img alt="catering" class="image" src="res/ste-therese.jpg" height="48"
                                 onmouseover="$(this).transition('jiggle')">
                        </div>
                        <hr>
                        <div class="content" style="padding: 1rem;">
                            <span class="title cv-title">Sainte Thérèse High School</span>
                            <span><i>&nbsp;-&nbsp; Catering school</i></span>
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

    <div class="ui container" style="margin-top: 32px">
        <div class="ui card full-width">
            <div class="content">
                <h3>Others computing skills</h3>
                <ul class="ui">
                    <li>Used to Git</li>
                    <li>REST APIs (Flask backend environment, with sqlalchemy and marshmallow)</li>
                    <li>GraphQL APIs (Django+Graphene environment)</li>
                    <li>GUI Development (wxPython)</li>
                    <li>Network programming (TCP)</li>
                    <li>Asynchronous JavaScript development</li>
                    <li>Parallel computing (Threads and processes)</li>
                    <li>Familiarity with Make & CMake build systems</li>
                    <li>JetBrains IDEs (PyCharm, WebStorm, CLion)</li>
                </ul>
            </div>
        </div>
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
                                <img alt="contentarmor" src="res/ca.png" class="image tiny"
                                     onmouseover="$(this).transition('jiggle')">
                            </a>
                        </div>
                        <hr>
                        <div class="content middle aligned">
                            <span class="header cv-title">ContentArmor</span>
                            <br/>
                            <span class="internship-subject-text">Implementation of an online watermark detection service</span>
                            <br>
                            <span><i>Rennes, France</i></span>
                            <br/>
                            Part-Time contract 3 days a week, September-February 2018-2019
                            <br/>
                            <span>Python, Flask (REST), SqlAlchemy on the backend. ReactJS, Redux & Bootstrap on the frontend</span>
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
                        <div class="ui tiny image" onmouseover="this.transition('jiggle');">
                            <a href="http://contentarmor.net" target="_blank">
                                <img alt="contentarmor" src="res/ca.png" class="image tiny"
                                     onmouseover="$(this).transition('jiggle')">
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
                                <img alt="Viaccess" src="res/Viaccess-Orca.jpg" class="image tiny"
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
                                <img alt="genip" src="res/genip.jpg" class="ui image tiny"
                                     onmouseover="$(this).transition('jiggle')">
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
                            <img alt="catering" src="res/fork.png" class="ui image tiny"
                                 onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">Catering</span> (2006-2014)
                        <br>
                        <span class="">
                            <br>Employment - Restaurant                 <span
                                    class="internship-subject-text">La Tratt'</span>, (Loudéac, France)
                            <br>Employment - Hotel/Restaurant/SPA*****  <span
                                    class="internship-subject-text">L’Agapa</span>, (Perros-Guirec, France)
                            <br>Internship - Hotel/Restaurant****       <span class="internship-subject-text">L’Auberge des Templiers</span>, (Boismorand, France)
                            <br>Internship - Hotel/Restaurant****       <span
                                    class="internship-subject-text">L’Écrin</span> , (Plancoët, France)
                            <br>Internship - Hotel/Restaurant****       <span class="internship-subject-text">Domaine de Rochevilaine</span>, Billiers (Morbihan)
                            <br>Internship - Hotel/Restaurant***        <span
                                    class="internship-subject-text">Ar Milin’</span>, Châteaubourg (Ille-et-Vilaine)
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
                            <img alt="nasm" src="res/nasm.png" class="image tiny"
                                 onmouseover="$(this).transition('jiggle')">
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
                        <span><i>C, Assembly, Make</i></span>
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
                        <a href="https://woodbox.io:1234/graphql?query=query%20%7B%0A%20%20getUser(userName%3A%22test%22%2C%20password%3A%22test%22)%20%7B%0A%20%20%20%20id%0A%20%20%20%20name%0A%20%20%20%20email%0A%20%20%20%20boxes%7B%0A%20%20%20%20%20%20id%0A%20%20%20%20%20%20modules%7B%0A%20%20%20%20%20%20%20%20type%0A%20%20%20%20%20%20%20%20location%0A%20%20%20%20%20%20%20%20mac%0A%09%09%09%09samples%20%7B%0A%20%20%20%20%20%20%20%20%20%20id%0A%20%20%20%20%20%20%20%20%09payload%0A%20%20%20%20%20%20%20%20%20%20date%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%7D%0A%20%20%20%20%7D%0A%20%20%7D%0A%7D">
                            <img alt="nasm" src="res/graph.png" class="image tiny"
                                 onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">Graphql API</span>
                        <br>
                        <span class="internship-subject-text">
                            Django/graphene based GraphQL API.
                        </span>
                        <br>
                        <span>
                            Made as a part of my group's end of studies project. Click on the icon to try it out on my other website ! <br/>
                            Our project is about having small, wireless boxes (modules) to harvest environmental samples from your indoors. <br/>
                            Those samples are then monitored, and a notification is sent to your phone if a problem is detected.
                        </span>
                        <br>
                        <span><i>Python, Django, Graphene, Graphql, GraphiQL (interactive interface to build queries)</i></span>
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
                        <a href="https://github.com/querat/ca115">
                            <img alt="ca115 github" src="res/github.png" class="image tiny"
                                 onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">Website - Made for a DCU course</span>
                        <br>
                        <span class="internship-subject-text">
                            This
                            <a href="http://homebox.querat.pro/" target="_blank">simple website</a>
                            was built without any framework.
                        </span>
                        <br>
                        <span><i>HTML, CSS, JavaScript</i></span>
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
                            <img alt="ecs github" src="res/github.png" class="image tiny"
                                 onmouseover="$(this).transition('jiggle')">
                        </a>
                    </div>
                    <hr>
                    <div class="content middle aligned">
                        <span class="title cv-title">Entity Component System engine based game</span>
                        <br>
                        <span class="internship-subject-text">
                            I have been learning to use CMake and <a href="https://github.com/skypjack/entt">Entt</a>.
                        </span>
                        <br>
                        <span>
                            ECS engines are data oriented, reduce the coupling of components
                            and are able to run very fast by reducing cache misses. <br/>
                            This project was mostly a playground to learn CMake, by making it git-clone and build the libraries I needed. <br/>
                            Sadly both SFML and Entt have since been updated, and the project can't be built until I fix the problems coming from these updates.
                        </span>
                        <br>
                        <span><i>C++, CMake, SFML</i></span>
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
                            <img alt="site github" src="res/github.png" class="image tiny"
                                 onmouseover="$(this).transition('jiggle')">
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
</div>
<div style="margin-bottom: 128px"></div>

<div class="ui container" style="min-width: 100vw">
    <img alt="cats are cool" src="res/serval.png" class="ui image small floated right aligned">
    <img alt="kitty" src="res/construction.png" class="ui image small floated aligned right">
</div>
</body>
</html>
