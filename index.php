<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jesus Gomez - Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet"> 
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
    <!-- WELCOME SECTION -->
    <section class="intro">
        <div class="nav" id="nav">
            <div class="nav__area">
                <div class="nav__container nav__container--left">
                    <div class="nav__brand">
                        <div class="nav__link" id="navHome">gomezja</div>
                    </div>
                </div>

                <div class="nav__container nav__container--right">
                    <div class="nav__content" id="content">
                        <div class="nav__link nav__link--move-to-about" id="goToAbout">About</div>
                        <div class="nav__link" id="goToProjects">Projects</div>
                        <div class="nav__link" id="goToContact">Contact</div>
                    </div>
                </div>

                <div class="nav__icon nav__icon--visibility" id="ham">
                    <div class="nav__line nav__line--transform-one"></div>
                    <div class="nav__line nav__line--margin-top nav__line--transform-two"></div>
                    <div class="nav__line nav__line--margin-top nav__line--transform-three"></div>
                </div>
            </div>
        </div>
        
        <!-- <section class="welcome welcome--background"> -->
        <div class="welcome__content">
            <div class="ab">
                <div class="welcome__header"><span class="welcome__header--bold">Jesus</span>Gomez</div>
                <div class="welcome__subheader">An Inspiring Web Designer & Developer</div>
                <button class="btn welcome__btn" id="goToProjects2"><span class="btn__text">View Work</span></button>
            </div>
        </div>
    </section>

    <div class="about-project-wrapper">
        <!-- ABOUT SECTION -->
        <section class="about" id="about">
            <div class="about__title">
                <h1 class="about__header">About Me</h1>
                <div class="about__underline about__underline--start"></div>
            </div>
            
            <p class="about__paragraph about__paragraph--mt-40">
                I am a <span class="about__paragraph--bold">Computer Science graduate</span> with a passion for creating practical
                and visually-appealing websites. In my spare time, I like to explore for inspiration for future designs, or learn more about different
                approaches for web design and development. Some of the technologies that I use for most projects are HTML5, CSS3, JavaScript, jQuery and Sketch.            
            </p>

            <p class="about__paragraph about__paragraph--mt-20">
                My process for developing any website first starts by <span class="about__paragraph--bold">understanding its purpose
                and the content</span> that it will hold. After identifying the direction of the site, I create multiple 
                <span class="about__paragraph--bold">wireframes</span> to quickly jot ideas on paper and then use 
                <span class=about__paragraph--bold>Sketch</span> to see how my design(s) will look like before coding. Once that is all done,
                only then, can I start bringing my visions to life!
            </p>
        </section>

        <!-- PROJECT SECTION -->
        <section class="project" id="projects">
            <svg class="project__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 78">
                <path class="cls-1" d="M0,0V78S359.81-44.16,918.52,22.93,1725.1,37,1920,2.9V0Z"/>
            </svg>
            
             <div class="project__title">
                <h1 class="project__header">My Work</h1>
                <div class="project__underline project__underline--start"></div>
            </div>

            <div class="project__projects">
                <ul class="project__container project__container--mt-40">                  
                    <li class="project__example">                   
                        <div class="project__cell project__cell--shadow">
                            <img class="project__image" src="images/projects/project-01-thumbnail.png" alt="Fishing Charter Website">
                            
                            <div class="project__info">
                                <div class="project__name">
                                    Fishing Charter
                                </div>

                                <div class="project__description project__description--fade">
                                    One of my designs in which I portray the services provided by a potential business.
                                </div>

                                <div class="project__type project__type--design">
                                    Design
                                </div>

                                <div class="project__date">
                                    December 21, 2018
                                </div>
                            </div>
                        </div>
                    </li>
           
                    <li class="project__example">                   
                        <div class="project__cell project__cell--shadow">
                            <img class="project__image" src="images/projects/project-02-thumbnail.png" alt="Photography Portfolio Website">
                            
                            <div class="project__info">
                                <div class="project__name">
                                    Photography Portfolio
                                </div>

                                <div class="project__description project__description--fade">
                                    A web design in which I implement a minimalist approach to potentially present a 
                                A web design in which I implement a minimalist approach to potentially present a 
                                    A web design in which I implement a minimalist approach to potentially present a 
                                    photographer's work.
                                </div>

                                <div class="project__type project__type--design">
                                    Design
                                </div>

                                <div class="project__date">
                                    January 14, 2019
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li class="project__example">                   
                        <div class="project__cell project__cell--shadow">
                            <img class="project__image" src="images/projects/project-03-thumbnail.png" alt="Student Website">
                            
                            <div class="project__info">
                                <div class="project__name">
                                    Student Portfolio
                                </div>

                                <div class="project__description project__description--fade">
                                    A one-page web design intended for students looking for professional and visually-appealing 
                                A one-page web design intended for students looking for professional and visually-appealing 
                                    A one-page web design intended for students looking for professional and visually-appealing 
                                    layout to highlight their skills and accomplishments!
                                </div>

                                <div class="project__type project__type--design">
                                    Design
                                </div>

                                <div class="project__date">
                                    January 17, 2019
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li class="project__example">                   
                        <div class="project__cell project__cell--shadow">
                            <img class="project__image" src="images/projects/project-04-thumbnail.png" alt="Fibonacci Calculator">
                            
                            <div class="project__info">
                                <div class="project__name">
                                    Fibonacci Calculator
                                </div>

                                <div class="project__description project__description--fade">
                                    A web application that calculates the Fibonacci output and displays the resulting Fibonacci 
                                A web application that calculates the Fibonacci output and displays the resulting Fibonacci 
                                    A web application that calculates the Fibonacci output and displays the resulting Fibonacci 
                                    sequence from user input.
                                </div>

                                <div class="project__type project__type--development">
                                    Development
                                </div>

                                <div class="project__date">
                                    May 2, 2018
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- modal image -->
            <div class="modal" id="close-up">
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__button-close">&times</div>
                        <div class="modal__name"></div>
                        <div class="modal__type"></div>
                    </div>

                    <img class="modal__image" id="close-up__image" src="" alt="Project Image">
                </div>
            </div>
        </section>
    </div>

    <!-- CONTACT SECTION -->
    <?php
        $to = "jgomez42gb@gmail.com";
        $successMsg = "";
        $nameError = $emailError = $messageError = "";
        $name = $email = $message = $subject = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"]))
                $nameError = "Name is required";
            else {
                $name = testInput($_POST["name"]);

                if(!preg_match("/^[a-zA-Z ]*$/", $name))
                    $nameError = "Only letters and white space allowed";
            }

            if(empty($_POST["email"]))
                $emailError = "Email is required";
            else {
                $email = testInput($_POST["email"]);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                $emailError = "Invalid email format"; 
            }

            if(empty($_POST["message"]))
                $messageError = "Message is required";
            else
                $message = testInput($_POST["message"]);
            
            $subject = "gomezja.com, " . $email;

            $headers = "FROM: gomezja.com";

            // if(mail($to,$subject,$message,$headers)) {
            //     echo "Success";

            //     $name = $email = $message = "";
            // }
            // else {
            //     echo "Fail";
            // }
        }

        function testInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <section class="contact" id="contact">       
        <div class="contact__title">
            <h1 class="contact__header">Let's Connect</h1>
            <div class="contact__underline contact__underline--start"></div>
        </div>
        
        <div class="contact__wrapper">
            <form class="contact__form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="contact__area">
                    <input class="contact__input contact__input--100" type="text" name="name" placeholder="Name" value="<?php echo $name ?>">
                    <span class="error"><?php echo $nameError; ?></span>
                </div>

                <div class="contact__area">
                    <input class="contact__input contact__input--100" type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
                    <span class="error"><?php echo $emailError; ?></span>
                </div>

                <div class="contact__area">
                    <textarea class="contact__input contact__input--textarea contact__input--100" name="message" placeholder="Type your message here"><?php echo $message ?></textarea>
                    <span class="error"><?php echo $messageError; ?></span>
                </div>

                <button class="btn" type="submit"><span class="btn__text">Send</span></button><span class="success"><?php echo $successMsg; ?></span>
            </form>
        </div>

        <div class="contact__social">
            <a class="contact__icon contact__icon--mr" href="https://www.linkedin.com/in/gomezja/"><i class="fab fa-github fa-2x"></i></a>
            <a class="contact__icon contact__icon--ml" href="https://github.com/gomezja"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </section>
    
    <!-- scroll-up button -->
    <button id="myBtn" class="btn btn--scroll-up"><img class="btn__icon" src="images/icons/arrow-sm.svg" alt="arrow-icon"></button>
    
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>