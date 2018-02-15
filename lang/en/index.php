<?php
if(isset($_POST['send']))
{
	if(!empty($_POST['firstname']) AND !empty($_POST['email']) AND !empty($_POST['message']))
	{
        $firstnameright = htmlspecialchars($_POST['firstname']);
        $emailright = htmlspecialchars($_POST['email']);
        $messageright = htmlspecialchars($_POST['message']);

        $firstnamelength= strlen($firstnameright);

        if ($firstnamelength >= 2 AND $firstnamelength <= 255) {

					if (filter_var($emailright, FILTER_VALIDATE_EMAIL)) {

                $header="MIME-Version: 1.0\r\n";
                $header.='From:"Yoannchevessier.fr"<hello@yoannchevessier.fr>'."\n";
                $header.='Content-Type:text/html; charset="UFT8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';

                $message='
                <html>
                    <body>
                        <div align="center">
                            <u>Nom de l\'expéditeur :</u>'."\n".$_POST['firstname'].'<br />
                            <u>Mail de l\'expéditeur :</u>'."\n".$_POST['email'].'<br />
                            <br />
                            '.nl2br($_POST['message']).'
                        </div>
                    </body>
                </html>
                ';

                mail("hello@yoannchevessier.fr", "CONTACT - Yoannchevessier.fr", $message, $header);
                $alert="Votre message a bien été envoyé !";
            }
						else {
							$alert="Votre adresse email n'est pas valide !";
						}
        }
        else {
            $alert="Votre pseudo doit contenir entre 2 et 255 caractères !";
        }
	}
	else
	{
		$alert="Tous les champs doivent être complétés !";
	}
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Portfolio consacré à Yoann CHEVESSIER, étudiant dans les métiers du multimédia et de l'internet">
        <meta name="keywords" content="Portfolio, Web, Conception, Yoann, CHEVESSIER">
        <meta name="author" content="Yoann CHEVESSIER">
        <link rel="icon" type="image/png" href="../../svg/logo_2.png" />
        <link rel="stylesheet" href="../../css/index.css">
        <link rel="stylesheet" href="../../animation/effects.css">
        <link rel="stylesheet" href="../../fonts/stylesheet.css">
        <link rel="stylesheet" href="../../animation/animate.css">
        <title>Yoann Chevessier</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjelwyV3a_eZ3MzLvoucrymsMOgRA4VOE"></script>
        <script type="text/javascript" src="../../js/jquery.mixitup.min.js"></script>

    </head>

    <body>

        <div class="noty_bottom">
            <p>This site is currently in beta test and it is possible that you see some bugs. Contact me if you see one or many bugs. <br/>Thank you 🙏</p>
            <div class="noty_close"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Grey_close_x.svg/1024px-Grey_close_x.svg.png" alt="close" /> </div>
        </div>

        <nav>

            <a href="index.php"><img src="../../svg/logo.svg" alt="Logo" class="logo"></a>

            <ul>
                <li><a href="#about" id="nav_1">About</a></li>
                <li>
                    <a href="#experience" id="nav_2">Experience</a></li>
                <li>
                    <a href="#projects" id="nav_3">Projects</a></li>
                <li>
                    <a href="#services" id="nav_4">Services</a></li>
                <li>
                    <a href="#contact" id="nav_5">Contact</a></li>
                <li class="language">
                    <a href="../../index.php">Fr</a>
                </li>
            </ul>

        </nav>

        <header>

            <div>
                <h1 class="wow fadeInTitleRight">Yoann CHEVESSIER</h1>
                <h2 class="wow fadeInTitleLeft">Multimedia Production Student</h2>
                <a href="#about" class="scrollDown"></a>
            </div>

        </header>

        <main>

            <section class="qualities">

                <article>
                    <div>
                        <img src="../../images/ios-world-outline.svg" alt="" />
                    </div>
                    <h4>Web development</h4>
                </article>
                <article>
                    <div>
                        <img src="../../images/icon_design.svg" alt="" />
                    </div>
                    <h4>Design</h4>
                </article>
                <article>
                    <div>
                        <img src="../../images/ios-lightbulb-outline.svg" alt="" />
                    </div>
                    <h4>Other</h4>
                </article>

            </section>

            <section class="about" id="about">

                <article>
                    <h2 class="wow fadeInDown">ABOUT ME</h2>
                    <hr>
                    <p class="wow fadeInUp">Native of a small village of the urban area of Tours, I am at present in 1st year of DUT<span style="font-style: italic:">(Two-Year Technical Degree)</span> of the Multimedia and Internet Professions (formerly conscript SRC). I am 18 years old and I am a fanatic of the technological news since any young, and fascinated from now on more than two years by a quite particular domain: WEB. I possess a very good control(master's degree) of the programming languages, but also the software of graphic creation.</p>
                </article>

            </section>

            <section class="experience" id="experience">

                <article>
                    <h2>EXPERIENCE</h2>
                    <hr>
                    <p>Fascinated and also thanks to my training(formation), I realize my projects thanks to the various skills which I was able to acquire in programming as in computer graphics as well as in other domains as the formatting of documents, the management of a project of team and heights of others else...</p>

                    <table>
                        <tr>
                            <td>
                                <h4>HTML/CSS</h4>
                                <div>
                                    <div class="wow progress1"></div>
                                </div>
                            </td>
                            <td class="second_row">
                                <h4>Jquery</h4>
                                <div>
                                    <div class="wow progress2"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Illustrator</h4>
                                <div>
                                    <div class="wow progress3"></div>
                                </div>
                            </td>
                            <td class="second_row">
                                <h4>Photoshop</h4>
                                <div>
                                    <div class="wow progress4"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>PHP/DATABASE</h4>
                                <div>
                                    <div class="wow progress5"></div>
                                </div>
                            </td>
                            <td class="second_row">
                                <h4>MICROSOFT OFFICE</h4>
                                <div>
                                    <div class="wow progress6"></div>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <div class="bar_experience wow fadeInUpBig">
                        <div class="step_point step_point_1 wow fadeInLeft" data-wow-delay="1s"><span>2013 : COMPUTER MAINTENANCE</span></div>
                        <div class="step_point step_point_2 wow fadeInRight" data-wow-delay="1s"><span>2016 : bachelor's degree STI2D</span></div>
                        <div class="step_point step_point_3 wow fadeInLeft" data-wow-delay="1s"><span>2016 : First Year of High School (MMI)</span></div>
                        <div class="step_point step_point_4 wow fadeInRight" data-wow-delay="1s"><span>2017 : 27h Project MMI</span></div>
                        <div class="step_point step_point_5 wow fadeInLeft" data-wow-delay="1s"><span>THE FUTURE IS BEAUTIFUL</span></div>
                    </div>

                </article>

            </section>

            <section class="cv">

                <article>
                    <div>
                        <img src="../../images/icon_cv.svg" alt="" />
                    </div>
                    <a href="cv.pdf" target="_blank" class="hvr-shutter-in-horizontal">
                        <h4>Download CV</h4>
                    </a>
                </article>

            </section>

            <section class="projets" id="projects">

                <article>
                    <h2>PROJECTS</h2>
                    <hr>
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter=".web, .design, .video, .other">All</span></li>
                        <li><span class="filter" data-filter=".web">Web</span></li>
                        <li><span class="filter" data-filter=".design">Design</span></li>
                        <li><span class="filter" data-filter=".video">Video</span></li>
                        <li><span class="filter" data-filter=".other">Other</span></li>
                    </ul>

                    <div id="portfoliolist">

                        <div class="portfolio web wow fadeIn" data-cat="design">
                            <div class="portfolio-wrapper">
                                <img src="../../images/Portfolio.gif" alt="Portfolio Yoann CHEVESSIER" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>Portfolio</h3>
                                        <p>Web site grouping my career(student)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio video wow fadeIn" data-cat="video">
                            <a href="https://www.youtube.com/watch?v=Mxc4rBCp69c" target="_blank">
                                <div class="portfolio-wrapper">
                                    <img src="../../images/Lola.jpg" alt="LOLA - Short film" />
                                    <div class="label">
                                        <div class="label-text">
                                            <h3>LOLA</h3>
                                            <p>Short film directed with my friends</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="portfolio design wow fadeIn" data-cat="design">
                            <div class="portfolio-wrapper">
                                <img src="../../images/street_spirit.jpg" alt="Street spirit  promotion" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>Street Spirit</h3>
                                        <p>Poster for Streetwear brand "Street spirit"</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio web wow fadeIn" data-cat="web">
                            <div class="portfolio-wrapper">
                                <img src="../../images/bruxelles_nancy.jpg" alt="Website History Nancy and Brussels" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>Nancy & Brussels</h3>
                                        <p>Art Nouveau website in Nancy and Brussels</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio design wow fadeIn" data-cat="design">
                            <div class="portfolio-wrapper">
                                <img src="../../images/Geneve.jpg" alt="Grand Prix Rétro Geneve Affiche" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>Retro Grand Prix</h3>
                                        <p>Graphic design for the Retro Grand Prix of Geneva</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio other wow fadeIn" data-cat="other">
                            <div class="portfolio-wrapper">
                                <img src="../../images/communique_de_presse.jpg" alt="O'gliss Park Press release" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>O'gliss Park</h3>
                                        <p>Press release for the water park O'gliss</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="portfolio web wow fadeIn" data-cat="web">
                            <div class="portfolio-wrapper">
                                <img src="../../images/digital_creature.jpg" alt="Website Digital Creature" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>DigitalCREATURE</h3>
                                        <p>Creating a website from a layout</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio design wow fadeIn" data-cat="design">
                            <div class="portfolio-wrapper">
                                <img src="../../images/cinema.jpg" alt="Cinema Promotion" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>Cinema</h3>
                                        <p>Poster for promotion of a cinematographic event</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio web wow fadeIn" data-cat="web">
                            <div class="portfolio-wrapper">
                                <img src="../../images/lettre_motivation.jpg" alt="Website Lettre Motivation MMI" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>Motivation letter - MMI</h3>
                                        <p>Creation of a website as a motivation letter for MMI training</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio other wow fadeIn" data-cat="other">
                            <div class="portfolio-wrapper">
                                <img src="../../images/new_york.jpg" alt="Press New York" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>NEW YORK</h3>
                                        <p>Layout of a digital newspaper</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio design wow fadeIn" data-cat="design">
                            <div class="portfolio-wrapper">
                                <img src="../../images/blackberry.jpg" alt="Promotion Blackberry" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>BLACKBERRY</h3>
                                        <p>Web Banner to Promote New Blackberry Digital Campaign</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio web wow fadeIn" data-cat="web">
                            <div class="portfolio-wrapper">
                                <img src="../../images/rock_en_delire.jpg" alt="Website Rock en Délire" />
                                <div class="label">
                                    <a></a>
                                    <div class="label-text">
                                        <h3>ROCK EN DéLIRE</h3>
                                        <p>Creation of 3 pages of a website for a rock festival</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>

            </section>

            <section class="projects_stats">

                <article class="wow fadeIn">
                    <ul>
                        <li>
                            <h3 class="number">5</h3>
                            <p>Clients</p>
                        </li>
                        <li>
                            <h3 class="number">15</h3>
                            <p>Projects</p>
                        </li>
                        <li>
                            <h3 class="number">37</h3>
                            <p>Collaborations</p>
                        </li>
                        <li>
                            <h3 class="number">853</h3>
                            <p>Hours</p>
                        </li>
                    </ul>
                </article>

            </section>

            <section class="services" id="services">

                <article>
                    <h2>Services</h2>
                    <hr>
                    <p>I propose my services(departments) to whoever having a project more or less defines and needing services(departments) which you can find below. I am anxious to specify that these services(departments) are not free and that they will depend on the spare time which I would have. For your projects, I invite you to contact me via the form in the tab "Contact" or to send me one @Mail explaining your project and for what you expect from me.</p>

                    <table align="center">
                        <tr>
                            <td class="wow bounceIn">
                                <img src="../../images/087-display.svg" alt="" />
                                <h4>Development</h4>
                            </td>
                            <td class="wow bounceIn">
                                <img src="../../images/ios-world-outline.svg" alt="" />
                                <h4>Web design</h4>
                            </td>
                            <td class="wow bounceIn">
                                <img src="../../images/ios-compose-outline.svg" alt="" />
                                <h4>Graphic design</h4>
                            </td>
                            <td class="wow bounceIn">
                                <img src="../../images/ico_data.svg" alt="" />
                                <h4>SQL - Data</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="wow bounceIn">
                                <img src="../../images/ios-camera-outline.svg" alt="" />
                                <h4>Photo editing</h4>
                            </td>
                            <td class="wow bounceIn">
                                <img src="../../images/ios-videocam-outline.svg" alt="" />
                                <h4>Video editing</h4>
                            </td>
                            <td class="wow bounceIn">
                                <img src="../../images/social-wordpress-outline.svg" alt="" />
                                <h4>CMS</h4>
                            </td>
                            <td class="wow bounceIn">
                                <img src="../../images/ios-more-outline.svg" alt="" />
                                <h4>More</h4>
                            </td>
                        </tr>
                    </table>

                </article>

            </section>

            <section class="create_together">

                <article>
                    <h2 class="wow fadeInTitleLeft">CREATE TOGETHER YOUR OWN PROJECTS</h2>
                    <a href="#contact" class="hvr-shutter-in-horizontal contact_us wow fadeInUp" data-wow-delay="0.3s">Get started</a>
                </article>

            </section>

            <section class="contact" id="contact">

                <article>
                    <h2>Contact</h2>
                    <hr>
                    <form action="index.php" method="POST">
                        <div>
                            <span><input id="firstname" type="text" name="firstname" placeholder="Surname *" /></span>
                            <span><input id="email" type="email" name="email" placeholder="Email *" /></span>
                        </div>
                        <textarea id="message" name="message" cols="40" rows="10" placeholder="Message *"></textarea>
                        <button type="submit" name="send" class="hvr-shutter-in-horizontal submit">Send</button>
                        <label id="name_error" class="error">Please enter your surname (and your firstname) !</label>
                        <label id="email_error" class="error">Please enter your email adress !</label>
                        <label id="msg_error" class="error">Please enter your message !</label>
                    </form>
                    <div class="information_content">
                        <div>
                            <img src="../../images/ios-telephone-outline.svg" alt="" class="wow swing" />
                            <h4>PHONE</h4>
                            <span>+33 6 05 47 22 81</span>
                        </div>
                        <div>
                            <img src="../../images/ios-email-outline.svg" alt="" class="wow swing" />
                            <h4>EMAIL</h4>
                            <span>hello@yoannchevessier.fr</span>
                        </div>
                    </div>
                    <div id="map"></div>
                </article>

            </section>

        </main>

        <footer>

            <section class="socials_networks">

                <article>
                    <h1>Yoann CHEVESSIER</h1>
                    <hr>
                    <div>
                        <a href="https://www.linkedin.com/in/yoannchevessier/" target="_blank"><img src="../../images/linkedin-logo.svg" alt="Logo Linkedin" /></a>
                        <a href="https://www.behance.net/hello8145" target="_blank"><img src="../../images/behance-logo.svg" alt="Logo Behance" /></a>
                        <a href="https://codepen.io/YoannCHVSR/" target="_blank"><img src="../../images/social-codepen.svg" alt="Logo CodePen" /></a>
                        <a href="https://twitter.com/YoannCHVSR" target="_blank"><img src="../../images/social-twitter.svg" alt="Logo Twitter" /></a>
                        <a href="https://www.youtube.com/channel/UCV3Xdqx1mNFf9HY6UGzZS-A" target="_blank"><img src="../../images/social-youtube.svg" alt="Logo YouTube" /></a>
                    </div>
                </article>

            </section>

            <section class="legacies">

                <article>
                    <p>&copy; 2017. Yoann CHEVESSIER. All Rights Reserved.</p>
                </article>

            </section>

        </footer>

        <!-- \\------------SCRIPT------------// -->

        <script src="../../js/jquery.easing.1.3.js"></script>
        <script src="../../js/wow.js"></script>
        <script>
            new WOW().init();

        </script>

        <!-- \\------------CODE JQUERY------------// -->

        <script>
            var mapOptions = {
                center: new google.maps.LatLng(47.58609209999999, 1.3359474999999748),
                zoom: 12,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var markerOptions = {
                position: new google.maps.LatLng(47.58609209999999, 1.3359474999999748)
            };

            var marker = new google.maps.Marker(markerOptions);
            marker.setMap(map);

        </script>

        <script>
            var $win = $(window),
                winH = $win.height() - 90,
                $transform_nav = $('nav'),
                $transform_a = $('nav ul li a'),
                $transform_border = $('.language'),
                $transform_logo = $('.logo'),
                $button = $('.scrollDown'),
                $work_together = $('.contact_us'),
                $nav_link1 = $('#nav_1'),
                $nav_link2 = $('#nav_2'),
                $nav_link3 = $('#nav_3'),
                $nav_link4 = $('#nav_4'),
                $nav_link5 = $('#nav_5');

            $(document).ready(function() {
                if ($(this).scrollTop() > winH) {
                    $transform_nav.addClass('transform');
                    $transform_a.addClass('color');
                    $transform_border.addClass('border');
                    $transform_logo.attr('src', '../../svg/logo_2.svg');
                } else {
                    $transform_nav.removeClass('transform');
                    $transform_a.removeClass('color');
                    $transform_border.removeClass('border');
                    $transform_logo.attr('src', '../../svg/logo.svg');
                }
            });


            $(window).scroll(function() {
                var $position1 = $('.about').offset().top - 70,
                    $position2 = $('.experience').offset().top - 70,
                    $position3 = $('.projets').offset().top - 70,
                    $position4 = $('.services').offset().top - 71,
                    $position5 = $('.contact').offset().top - 71,
                    $position6 = $('footer').offset().top;

                if ($(this).scrollTop() > winH) {
                    $transform_nav.addClass('transform');
                    $transform_a.addClass('color');
                    $transform_border.addClass('border');
                    $transform_logo.attr('src', '../../svg/logo_2.svg');
                } else {
                    $transform_nav.removeClass('transform');
                    $transform_a.removeClass('color');
                    $transform_border.removeClass('border');
                    $transform_logo.attr('src', '../../svg/logo.svg');
                }
                if ($(this).scrollTop() >= $position1 && $(this).scrollTop() < $position2) {
                    $nav_link1.addClass('active');
                } else {
                    $nav_link1.removeClass('active');
                }
                if ($(this).scrollTop() >= $position2 && $(this).scrollTop() < $position3) {
                    $nav_link2.addClass('active');
                } else {
                    $nav_link2.removeClass('active');
                }
                if ($(this).scrollTop() >= $position3 && $(this).scrollTop() < $position4) {
                    $nav_link3.addClass('active');
                } else {
                    $nav_link3.removeClass('active');
                }
                if ($(this).scrollTop() >= $position4 && $(this).scrollTop() < $position5) {
                    $nav_link4.addClass('active');
                } else {
                    $nav_link4.removeClass('active');
                }
                if ($(this).scrollTop() >= $position5 && $(this).scrollTop() < $position6) {
                    $nav_link5.addClass('active');
                } else {
                    $nav_link5.removeClass('active');
                }
            });

            $button.click(function() {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 70
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });

            $work_together.click(function() {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 70
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });

            $('nav ul li a').click(function() {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 70
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });

        </script>

        <script>
            var compteur = 0;

            $(window).scroll(function() {
                if ($(this).scrollTop() > 3500 && $(this).scrollTop() < 4500 && compteur < 4) {
                    $('.number').addClass('count');
                    $('.count').each(function() {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function(now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                        compteur++;
                    });
                };
            })

        </script>

        <script type="text/javascript">
            $(function() {

                var filterList = {

                    init: function() {

                        $('#portfoliolist').mixItUp({
                            selectors: {
                                target: '.portfolio',
                                filter: '.filter'
                            },
                            load: {
                                filter: '.web, .design, .video, .other'
                            }
                        });
                    }
                };
                filterList.init();
            });

        </script>

        <script type="text/javascript">
            $(function() {
                $('.error').hide();
                $(".submit").click(function() {

                    $('.error').hide();
                    var name = $("#firstname").val();
                    if (name == "") {
                        $("#name_error").show();
                        $("#firstname").focus();
                        return false;
                    }
                    var email = $("#email").val();
                    if (email == "") {
                        $("#email_error").show();
                        $("#email").focus();
                        return false;
                    }
                    var message = $("#message").val();
                    if (message == "") {
                        $("#msg_error").show();
                        $("#message").focus();
                        return false;
                    }

                });
            });

        </script>

        <script>
            var winHi = $win.height() - 600,
                $noty = $('.noty_bottom'),
                compt = 0;

            $(document).ready(function() {
                if ($(this).scrollTop() > winHi) {
                    $noty.css('z-index', '1000000');
                    $noty.css('opacity', '1');
                    $noty.css('bottom', '20px');
                } else {
                    $noty.css('z-index', '0');
                    $noty.css('opacity', '0');
                    $noty.css('bottom', '0');
                }
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > winHi && compt < 1) {
                    $noty.css('z-index', '1000000');
                    $noty.css('opacity', '1');
                    $noty.css('bottom', '20px');
                } else {
                    $noty.css('z-index', '0');
                    $noty.css('opacity', '0');
                    $noty.css('bottom', '0');
                }
            });

            $(".noty_close").on("click", function() {
                $(".noty_bottom").animate({
                    "bottom": "-400px"
                }, "slow");
                compt++;
            });

        </script>


    </body>

    </html>
