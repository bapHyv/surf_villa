<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style_es.css">
    <title>Surf Villa</title>
</head>

<body>
    <header class="header" id="navbar">
        <div class="dropdown">
            <p class="dropbtn">A VILLA</p>
            <div class="dropdown-content">
                <a href="#section-about-us">ABOUT US</a>
                <a href="#section-about-villa">ABOUT VILLA</a>
                <a href="#section-location">LOCATION</a>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropbtn">PACKAGES</p>
            <div class="dropdown-content">
                <a href="#section-surf-camp">SURF CAMPS</a>
                <a href="#surf-and-stay">SURF & STAY</a>
                <a href="#surf-guiding">SURF GUIDING</a>
            </div>
        </div>
        <a href="#adventures" class="dropbtn">ADVENTURES</p>
            <a href="#formulaire" class="dropbtn">ACCOMODATION</a>
            <a href="#contact" class="dropbtn">CONTACTS</a>
            <div class="language-container" id="languages-desktop">
            <a class="lg-en" href="index.php">EN</a>
                <p>|</p>
                <a class="lg-fr" href="index_fr.php">FR</a>
                <p>|</p>
                <a class="lg-es" href="index_es.php">ES</a>
            </div>
            <div class="dropdown" id="languages-phone">
                <p class="dropbtn">LANGUAGES</p>
                <div class="dropdown-content">
                    <a class="lg-en" href="index.php">EN</a>
                    <a class="lg-fr" href="index_fr.php">FR</a>
                    <a class="lg-es" href="index_es.php">ES</a>
                </div>
            </div>

    </header>

    <div class="logo-container">
        <img class="logo" src="./assets/photos/logo_copie.png" alt="logo surf villa">
    </div>

    <?php if (
        isset($_SESSION['error_msg_form']) &&
        !$_SESSION['error_msg_form']
    ): ?>
    <div class="success-message">
        <p class="msg">Your message has been sent successfully</p>
    </div>
    <?php unset($_SESSION['error_msg_form']); ?>
    <?php endif; ?>
    <?php if (
        isset($_SESSION['error_msg_form']) &&
        $_SESSION['error_msg_form']
    ): ?>
    <div class="error-message">
        <p class="msg">Error, please try again later</p>
    </div>
    <?php unset($_SESSION['error_msg_form']); ?>
    <?php endif; ?>

    <section class="section-hello">
        <div class="infos-section-hello">
            <h2 class="title-section-hello">Hola</h2>
            <p class="text-section-hello">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi amet sit
                placeat repudiandae nemo beatae
                maxime numquam. Quod illo, molestias inventore veritatis quisquam ut iusto quidem. Impedit ab officiis
                labore. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non facere impedit animi nostrum illo
                sunt asperiores, incidunt minima deleniti maxime neque eveniet harum quibusdam in nisi veniam voluptatem
                accusamus amet.</p>
            <p class="signature-section-hello">brahim iddouch</p>
        </div>
        <div class="img-section-hello-container">
            <img class="img-section-hello" src="./assets/photos/img_section_hello.JPG" alt="deux femmes sur un rocher">
        </div>
    </section>

    <section class="section-about-us" id="section-about-us">
        <img class="img1-section-about-us" src="./assets/photos/img1_section_about_us.jpg" alt="Piscine du surf camp">
        <div class="text-section-about-us-container">
            <h2 class="title-section-about-us">Hi there! Are you looking <br> for plan of your best holidays?</h2>
            <p class="fp-section-about-us">Let's meet local freinds and passionate surfers. North of Morocco is our
                home, so we know every spot, every wave, every rock under the water. If you are at the beginning of your
                surf way - we will help you to catch your first wave. If you are the world champion - we will guide you
                to the best spots in Morocco. we will keep you safe and satisfied.</p>
            <p class="sp-section-about-us">We are hosting groups and individual travelers in our big and cozy villa,
                providing surf lessons and surf guiding for all levels of experience (all equipment included),
                organizing daily activities and trips around Agadir area. You can join our scheduled surf camps or just
                come with your friends anytime. We are always here for you!</p>
            <p class="tp-section-about-us">Feel free to contact us and hope to see you soon!</p>
        </div>

        <div class="big-text-section-about-us">
            <p class="text-ml50 with-big-text-section-about-us">With</p>
            <p class="wonderful-big-text-section-about-us">Wonderful <br> horizon <br> view</p>
        </div>
        <div class="img2-section-about-us-container">
            <img class="img2-section-about-us" src="./assets/photos/img2_section_about_us.JPG"
                alt="Groupe de personnes en vacance">
        </div>
    </section>

    <section class="section-about-villa" id="section-about-villa">
        <div class="text-img-container-about-villa">
            <div class="text-section-about-villa-container">
                <p class="text1-section-about-villa">Surf Villa belongs to Brahim Iddouch marrocan IBC world bodyboard
                    champion.</p>
                <p class="text2-section-about-villa">Brahim and his friends are always happy to share good vibes and
                    good
                    waves with surfers from all over the world.</p>
            </div>
            <div class="img-and-text-section-about-villa-container">
                <img class="img1-section-about-villa" src="./assets/photos/img1_section_about_villa.jpg"
                    alt="Brahim Iddouch">
                <p class="welcome-text-section-about-villa">You are welcome in my house</p>
            </div>
        </div>
        <div class="img2-section-about-villa-container">
            <img class="img2-section-about-villa" src="./assets/photos/img2_section_about_villa.jpg"
                alt="Brahim Iddouch faisant un backflip">
        </div>
    </section>

    <section class="section-location" id="section-location">
        <img class="img-section-location" src="./assets/photos/img1_section_about_us.jpg" alt="">
        <div class="text-section-location-container">
            <p class="fp-section-location">Surf Villa is situated in Aourir, Agadir district. <br> It's on the north
                coast of Morocco.</p>
            <p class="sp-section-location">We have a lot of cool and famous surf spots around, so it's easy to reach the
                best waves of the day. We are not going to stay in one place all the time</p>
        </div>
    </section>

    <section class="section-surf-camp" id="section-surf-camp">
        <div class="text-and-img1-section-surf-camp-container">
            <div class="text-section-surf-camp-container">
                <h2 class="title-section-surf-camp">Join the group of awesome people like you are !</h2>
                <p class="price-section-surf-camp">Price: 620 euros per person <br> Duration: 8 full days <br> Group
                    size: 6
                    -
                    15 people
                </p>
                <p class="included-section-surf-camp"> <span class="bold">Included:</span> <br>
                    Accommodation on the villa (2 - 4 persons each room) <br>
                    7 surf lessons (wetsuits and surboards are included) <br>
                    Transfers to all surf spots* <br>
                    Full and awesome breakfasts, lunches and dinners from our chef <br>
                    Yoga / Stretching session (every day) <br>
                    Transfert from / to Agadir <br>
                    Video guiding of each lesson and analysis of your progress <br>
                    Photo & Video accompaniment of daily adventures <br>
                    Culinary class from our chef <br>
                    Trips and other activities (Surf trip to imsouane, argan oil factory, <br>
                    Paradise Valley, beach bonfire, barbecue and etc) <br>
                    Towels and daily cleaning <br>
                    Moroccan tea and fruits all the time
                </p>
                <p class="schedule-section-surf-camp"><span class="bold">Schedule</span> <br>
                    choose and book your perfect dates
                </p>
                <p class="Atmosphere-section-surf-camp"><span class="bold">Atmosphere</span> <br>
                    let's watch how this adventure looks like
                </p>
            </div>
            <img class="img1-section-surf-camp" src="./assets/photos/img1_section_surf_camp.jpg"
                alt="photo de la cuisine de surf camp">
        </div>
        <div class="img2-and-nb-section-surf-camp-container">
            <img class="img2-section-surf-camp" src="./assets/photos/img2_section_surf_camp.jpg"
                alt="Chambre de la location de surf camp">
            <p class="nb-section-surf-camp">#1</p>
        </div>
    </section>

    <section class="section-surf-camp" id="surf-and-stay">
        <div class="text-and-img1-section-surf-camp-container">
            <div class="text-section-surf-camp-container">
                <h2 class="title-section-surf-camp">Accommodation & lessons & activities</h2>
                <p class="price-section-surf-camp"> Price per person: <br>
                    3 days: 250 Eur <br>
                    7 days: 599 Eur <br>
                    10 days: 799 Eur <br>
                </p>
                <p class="included-section-surf-camp"> <span class="bold">Included:</span> <br>
                    Accommodation on the villa (2 - 4 persons each room) <br>
                    Daily surf lessons (wetsuits and surboards are included) <br>
                    Transfers to all surf spots* <br>
                    Full and awesome breakfasts, lunches and dinners from our chef <br>
                    Transfert from / to Agadir <br>
                    Video guiding of each lesson and analysis of your progress <br>
                    Photo & Video accompaniment of daily adventures <br>
                    Culinary class from our chef <br>
                    Trips and other activities (Surf trip to imsouane, visiting argan oil factory, <br>
                    Paradise Valley trip, bonfire on the beach, barbecue and etc)* <br>
                    Towels and daily cleaning <br>
                    Moroccan tea and fruits all the time. <br>
                </p>
                <p class="bold included-section-surf-camp">Anytime we are happy to see small groups and individual
                    travellers</p>
                <p class="schedule-section-surf-camp"><span class="bold">Optional:</span> <br>
                    Video accompaniment of each lesson and analysis of your progress <br>
                    (50 eur per lesson for all group) <br>
                    Moroccan hammam (20 eur per person) <br>
                    Yoga / Stretching - ??? <br>
                    Trip to Essaouira - ???
                </p>
            </div>
            <img class="img3-section-surf-camp" src="./assets/photos/img3_section_surf_camp.jpg"
                alt="photo de la cuisine de surf camp">
        </div>
        <div class="img2-and-nb-section-surf-camp-container">
            <img class="img2-section-surf-camp" src="./assets/photos/img4_section_surf_camp.jpg"
                alt="Chambre de la location de surf camp">
            <p class="nb2">#2</p>
        </div>
    </section>

    <section class="section-surf-camp" id="surf-guiding">
        <div class="text-and-img1-section-surf-camp-container">
            <div class="text-section-surf-camp-container">
                <h2 class="title-section-surf-camp">We will help you to get your best wave</h2>
                <p class="price-section-surf-camp"> Price per person: <br>
                    Surf lesson: 50 eur <br>
                    Surf guiding: 60 eur <br>
                </p>
                <p class="included-section-surf-camp"> <span class="bold">Included:</span> <br>
                    Transfert from / to your place (Agadir area) <br>
                    Surf lesson / surf guiding (duration of session: 2h) <br>
                    Sandwich and water <br>
                    Wetsuit and surfboard (if necessary)
                </p>
                <p class="schedule-section-surf-camp"><span class="bold">Optional:</span> <br>
                    Video accompaniment of the lesson and <br>
                    analysis of your progress <br>
                </p>
            </div>
            <img class="img1-section-surf-camp" src="./assets/photos/img5_section_surf_camp.jpg"
                alt="photo de la cuisine de surf camp">
        </div>
        <div class="img2-and-nb-section-surf-camp-container">
            <img class="img2-section-surf-camp" src="./assets/photos/img6_section_surf_camp.jpg"
                alt="Chambre de la location de surf camp">
            <p class="nb3">#3</p>
        </div>
    </section>

    <section class="section-adventures" id="adventures">
        <h2 class="title-section-adventures">Except good waves, <br> Morocco is full of cool things to see.</h2>
        <div class="paradise-and-text-section-adventures-container">
            <p class="paradise-section-adventures">Paradise Valley</p>
            <p class="awesome-section-adventures">Awesome place to spent your free time. You may climb the mountain,
                jump into small lagoons, have a walk along canyone or just chill and enjoy the view.</p>
        </div>
        <div class="img1-section-adventures-container">
            <img src="./assets/photos/img1_section_adventures.JPG" alt="canyone paradise valley"
                class="img1-section-adventures">
        </div>
    </section>

    <section class="section-formulaire" id="formulaire">
        <h2 class="title-section-formulaire">Let's book your journey</h2>
        <div class="accommodation">
            <div class="book-area">
                <div class="container-form">
                    <form action="action_form.php" method="POST">
                        <div class="group">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" name="firstname" class="form-control test" id="firstname" required>
                        </div>
                        <div class="group">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" name="lastname" class="form-control test" id="lastname" required>
                        </div>
                        <div class="group">
                            <label for="mail" class="form-label" id="long-text-form">How should we contact you ? (your
                                phone, insta, e-mail,
                                whatsApp...)</label>
                            <label for="mail" class="form-label" id="short-text-form">How should we contact you
                                ?</label>
                            <input type="mail" name="mail" class="form-control" id="mail" required>
                        </div>
                        <div class="group">
                            <label for="message" class="form-label">Your question/message</label>
                            <input type="message" name="message" class="form-control" id="messsage" required>
                        </div>
                        <div class="group">
                            <input id="send1" type="submit" name="btn_add_client" value="Send" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section-message" id="contact">
        <p class="text-section-message">Feel free to catch us personaly!</p>
        <p class="text-section-message">We are always happy to talk</p>
    </section>

    <footer>
        <p class="see-you">See You <br> Soon :)</p>
        <p class="connect">& let's connect !</p>
        <div class="icons-container">
            <a href="https://www.facebook.com/brahim.iddouch.3" target="_blank">
                <img class="icons" src="./assets/icons/fb.png" alt="facebook ibrahim">
            </a>
            <a href="https://www.instagram.com/brahimiddouch/" target="_blank">
                <img class="icons" src="./assets/icons/insta.png" alt="instagram ibrahim">
            </a>
            <a href="https://www.youtube.com/embed/mp6vlmDUQwA" target="_blank">
                <img class="icons" src="./assets/icons/yt.png" alt="youtube ibrahim">
            </a>
        </div>
    </footer>
</body>

</html>