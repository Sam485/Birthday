<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kosalpanharith123@gmail.com';                     //SMTP username
    $mail->Password   = 'hbxjgkeljzxtyjhy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('panharithkosal51@gmail.com', 'Testing');
    $mail->addAddress('kosalpanharith123@gmail.com', 'Panharith');     //Add a recipient
    $mail->addAddress('Panharith');               //Name is optional
    $mail->addReplyTo('panharithkosal51@gmail.com', 'Testing');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Message has been sent</script>")';
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error:{$mail->ErrorInfo}'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Happy Birthday</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="icon" href="images/favicon.ico" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Loading -->
    <div id="loader">
      <div class="birthday">
        <div class="balloons">
          <div class="balloon one"></div>
          <div class="balloon two"></div>
          <div class="balloon three"></div>
          <div class="balloon four"></div>
        </div>
        <h1>Loading...</h1>
        <img
          src="images/Pictures/panda.gif"
          alt="panda"
          class="img panda img-fluid"
        />
        <img
          src="images/Pictures/cake.gif"
          alt="cake"
          class="img cake img-fluid"
        />
        <img
          src="images/Pictures/hug.gif"
          alt="hug"
          class="img hug img-fluid"
        />
        <img
          src="images/Pictures/wish.gif"
          alt="wish"
          class="img wish img-fluid"
        />
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/loading.js"></script>
    <!-- NavBar Section -->

    <nav class="navbar navbar-expand-lg bg-primary shadow fixed-top">
      <div class="container-fluid heading">
        <a class="navbar-brand fw-bold text-start" href="#"
          ><i class="fa-solid fa-cake-candles"></i> Happy Birthday</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end fw-bold"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#memory">Memory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#myCarousel">Plan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--  Introsection -->
    <div class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 intros">
            <h1 class="display-3 fw-bold">Happy Birthday Meow Moew!</h1>
            <p>
              This is the birthday webpage that I made it speical just for you.
              I will put all of our pictures that I have in here to make a great
              memory with you. I just hope that you love it.
            </p>
          </div>
          <div class="col-md-5 intros">
            <div class="pictures">
              <img
                src="./images/Pictures/cake.gif"
                alt="cake-54"
                class="img-fluid"
              />
              <a href="" class="play-btn"
                ><i class="fa-solid fa-play icon"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0cdaa4"
          fill-opacity="1"
          d="M0,128L24,112C48,96,96,64,144,80C192,96,240,160,288,186.7C336,213,384,203,432,181.3C480,160,528,128,576,96C624,64,672,32,720,32C768,32,816,64,864,112C912,160,960,224,1008,229.3C1056,235,1104,181,1152,154.7C1200,128,1248,128,1296,133.3C1344,139,1392,149,1416,154.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </div>

    <!-- Wishes -->
    <div class="text-center">
      <h1>Wishing card</h1>
      <span class="heading-line"></span>
      <p>Click the card down here to read all of my wishes for you!</p>
    </div>
    <div
      class="container d-flex align-items-center justify-content-center position-relative flex-wrap"
    >
      <div class="card d-flex position-relative flex-column">
        <div class="imgContainer">
          <img
            src="images/Pictures/wish.gif"
            alt="wishes"
            class="img-fluid rounded"
          />
        </div>
        <div class="content">
          <h2>Happy Birthday Meow Meow!</h2>
          <p>
            Happy Birthday to the love of my life! Your presence fills my days
            with joy, laughter, and endless love. On this special day, I want to
            remind you how incredible you are and how grateful I am to have you
            by my side. May your birthday be as wonderful and extraordinary as
            you are. Let's celebrate every precious moment together, creating
            beautiful memories that we’ll cherish forever. Here's to many more
            adventures, laughter, and love-filled years ahead. I love you more
            than words can express. Happy Birthday, my dearest! 🎉❤️
          </p>
        </div>
      </div>
    </div>

    <!-- Favorite Food -->
    <section class="favorite-food mt-5 shadow">
      <h1 class="display-3 fw-bold text-center">Favorite Foods</h1>
      <span class="heading-line"></span>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
        </div>
        <div class="carousel-inner">
          <!-- Chicken -->
          <div class="carousel-item active">
            <div class="row food-block">
              <div class="col-md-4 food-column">
                <img
                  src="https://img.freepik.com/free-photo/crispy-fried-chicken-plate-with-tomato-sauce_1150-20208.jpg?semt=ais_hybrid"
                  alt="chicken"
                  class="img-fluid rounded"
                />
              </div>
              <div class="col-md-5 food-column">
                <h1>Fried Chicken</h1>
                <p>
                  Amm 🤔, to be honest I just know that you love Fired Chicken
                  😂. And you have rate this one for Five star
                  <span class="rates"><i class="fa-solid fa-star"></i></span>.
                  So Whenever you want to eat Fried Chicken just tell me ok.
                </p>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
              </div>
            </div>
          </div>
          <!-- Pizza -->
          <div class="carousel-item">
            <div class="row food-block">
              <div class="col-md-4 food-column">
                <img
                  src="https://img.freepik.com/free-photo/hawaiian-pizza-with-cooked-ham-pizza-sauce-cheese-pineapple_140725-10942.jpg?semt=ais_hybrid"
                  alt="chicken"
                  class="img-fluid rounded"
                />
              </div>
              <div class="col-md-5 food-column">
                <h1>Pizza</h1>
                <p>
                  Normal when you eating pizza with me you normally eat 2-4
                  slice 🍕🍕. You don't need to worry just eat as much as you
                  wanted to 😏😏. I just want to see you happy.
                </p>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
              </div>
            </div>
          </div>
          <!-- Papaya Salad -->
          <div class="carousel-item">
            <div class="row food-block">
              <div class="col-md-4 food-column">
                <img
                  src="https://img.freepik.com/free-photo/papaya-salad-served-with-rice-noodles-vegetable-salad-decorated-with-thai-food-ingredients_1150-26504.jpg?semt=ais_hybrid"
                  alt="papaya-salad"
                  class="img-fluid rounded"
                />
              </div>
              <div class="col-md-5 food-column">
                <h1>Papaya Salad</h1>
                <p>
                  For the papaya salad. At first I think that you're going to
                  rate it for 4-5 stars
                  <span class="rates"><i class="fa-solid fa-star"></i></span>.
                  But you're only rate it for one stars 😆. I also don't want
                  you to eat this alot. Becuase it's normal contain spoil crab.
                </p>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
              </div>
            </div>
          </div>
          <!-- Oyster -->
          <div class="carousel-item">
            <div class="row food-block">
              <div class="col-md-4 food-column">
                <img
                  src="https://img.freepik.com/free-photo/raw-oysters-with-lemon-ice_93675-129486.jpg?semt=ais_hybrid"
                  alt="oyster"
                  class="img-fluid rounded"
                />
              </div>
              <div class="col-md-5 food-column">
                <h1>Oyster</h1>
                <p>
                  I can't eat this. But if you like it after when we married I
                  will buy it for you whenever you want it eat it 😏😏.
                </p>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
              </div>
            </div>
          </div>
          <!-- Bubble Tea -->
          <div class="carousel-item">
            <div class="row food-block">
              <div class="col-md-4 food-column">
                <img
                  src="https://img.freepik.com/free-photo/composition-with-delicious-thai-tea-beverage_23-2148994337.jpg?semt=ais_hybrid"
                  alt="bubble tea"
                  class="img-fluid rounded"
                />
              </div>
              <div class="col-md-5 food-column">
                <h1>Bubble Tea</h1>
                <p>
                  Before I don't really like Bubble Tea. I right now I also like
                  bubble tea because of you 😏😏. So next time when we meet
                  let's drink it together ok 😍😍.
                </p>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
                <span class="rates"><i class="fa-solid fa-star"></i></span>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Submit Answer -->
    <div class="rows">
      <div class="col-md-6">
        <div class="card bg-primary shadow">
          <h1 class="display-4 fw-bold text-center">Question!</h1>
          <span class="heading-line"></span>
          <div class="text-center">
            <img
              class="img-fluid"
              src="https://img.freepik.com/free-photo/front-view-amazed-young-man-with-crown-holding-balloons-yellow_179666-10218.jpg?ga=GA1.1.239982076.1735217048&semt=ais_hybrid"
            />
            <span class="d-block mt-3"
              >What do you want to eat the on our next date?<br />
              And where do you want to go?</span
            >
            <div class="mx-5">
              <br />
              <p>Click the icon below and text me your answer!</p>
              <a href="https://t.me/Panharirh"
                ><i class="fa-solid fa-paper-plane"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- gallery -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <div class="container bg-primary" id="gallery">
      <div class="row">
        <div class="col-lg-12 text-center my-2">
          <h4 class="display-5 fw-bold">Pictures of my best Girl.</h4>
          <span class="heading-line"></span>
        </div>
      </div>
      <div class="portfolio-menu mt-2 mb-4">
        <ul>
          <li class="btn btn-outline-dark active" data-filter="*">All</li>
          <li class="btn btn-outline-dark" data-filter=".us">Us</li>
          <li class="btn btn-outline-dark" data-filter=".style">Style</li>
          <li class="btn btn-outline-dark text" data-filter=".cute">Cutest</li>
        </ul>
      </div>
      <div class="portfolio-item row">
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (1).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (1).jpg" alt="pic1" class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (2).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (2).jpg" alt="pic2" class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (3).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (3).jpg" alt="pic3" class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (4).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (4).jpg" alt="pic4" class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (5).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (5).jpg" alt="pic5" class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (6).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (6).jpg" alt="pic6" class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (7).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (7).jpg" alt="pic7" class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (8).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (8).jpg" alt="pic8" class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (9).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img src="./takeout-001/pic1 (9).jpg" alt="pic9" class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (10).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (10).jpg"
              alt="pic10"
              class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (11).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (11).jpg"
              alt="pic11"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (12).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (12).jpg"
              alt="pic12"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (13).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (13).jpg"
              alt="pic13"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (14).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (14).jpg"
              alt="pic14"
              class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (15).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (15).jpg"
              alt="pic15"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (16).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (16).jpg"
              alt="pic16"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (17).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (17).jpg"
              alt="pic17"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (18).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (18).jpg"
              alt="pic18"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (19).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (19).jpg"
              alt="pic19"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (20).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (20).jpg"
              alt="pic20"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (21).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (21).jpg"
              alt="pic21"
              class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (22).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (22).jpg"
              alt="pic22"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (23).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (23).jpg"
              alt="pic23"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (24).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (24).jpg"
              alt="pic24"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (25).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (25).jpg"
              alt="pic25"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (26).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (26).jpg"
              alt="pic26"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (27).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (27).jpg"
              alt="pic27"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (28).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (28).jpg"
              alt="pic28"
              class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (29).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (29).jpg"
              alt="pic29"
              class="img-fluid"
          /></a>
        </div>
        <div class="item us col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (30).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (30).jpg"
              alt="pic30"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (31).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (31).jpg"
              alt="pic31"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (32).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (32).jpg"
              alt="pic32"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (33).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (33).jpg"
              alt="pic33"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (34).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (34).jpg"
              alt="pic34"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (35).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (35).jpg"
              alt="pic35"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (36).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (36).jpg"
              alt="pic36"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (37).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (37).jpg"
              alt="pic37"
              class="img-fluid"
          /></a>
        </div>
        <div class="item style col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (38).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (38).jpg"
              alt="pic38"
              class="img-fluid"
          /></a>
        </div>
        <div class="item cute col-lg-3 col-md-4 col-6 col-sm">
          <a
            href="./takeout-001/pic1 (39).jpg"
            class="fancylight popup-btn"
            data-fancybox-group="light"
            ><img
              src="./takeout-001/pic1 (39).jpg"
              alt="pic39"
              class="img-fluid"
          /></a>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 margins">
      <a
        href="https://photos.app.goo.gl/SAkV5Es37fN37XNH6"
        target="_blank"
        class="button rounded-pill"
        >More Pictures
        <span class="icons"><i class="fa-solid fa-arrow-right"></i></span
      ></a>
    </div>
    <!-- MEMORY -->
    <div class="col-lg-12 text-center my-2">
      <h4 class="display-5 fw-bold">Our Best Memory</h4>
      <span class="heading-line"></span>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#f3548c"
        fill-opacity="1"
        d="M0,96L30,128C60,160,120,224,180,218.7C240,213,300,139,360,117.3C420,96,480,128,540,170.7C600,213,660,267,720,272C780,277,840,235,900,186.7C960,139,1020,85,1080,96C1140,107,1200,181,1260,192C1320,203,1380,149,1410,122.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
      ></path>
    </svg>
    <div class="main" id="memory">
      <div class="pic photo1 z-depth-3">
        <center><img src="takeout-001/pic1 (1).jpg" /></center>
      </div>
      <div class="caption1 cap">
        <center><p>There are three best memory.</p></center>
      </div>
      <div class="bubble bubble1"></div>

      <div class="pic photo2 z-depth-3">
        <center><img src="takeout-001/pic1 (11).jpg" /></center>
      </div>
      <div class="caption2 cap">
        <center><p>I am waiting for her respond.</p></center>
      </div>
      <div class="bubble bubble2"></div>

      <div class="pic photo3 z-depth-3">
        <center><img src="takeout-001/pic1 (15).jpg" /></center>
      </div>
      <div class="caption3 cap">
        <center>
          <p>When meow meow sent it to me I will update it in here.</p>
        </center>
      </div>
      <div class="bubble bubble3"></div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#f3548c"
        fill-opacity="1"
        d="M0,96L30,128C60,160,120,224,180,218.7C240,213,300,139,360,117.3C420,96,480,128,540,170.7C600,213,660,267,720,272C780,277,840,235,900,186.7C960,139,1020,85,1080,96C1140,107,1200,181,1260,192C1320,203,1380,149,1410,122.7L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"
      ></path>
    </svg>

    <!-- Plan -->

    <div
      id="myCarousel"
      class="carousel slide carousel-fade bg-primary"
      data-ride="carousel"
    >
      <div class="col-lg-12 text-center my-2">
        <h4 class="display-5 fw-bold">Our Future Plan</h4>
        <span class="heading-line"></span>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                  <h4>Plan 1</h4>
                  <p>
                    Our first plan is to get married with each other. <br />
                    We will try our best together to make that happen ok.
                  </p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                  <img
                    src="https://img.freepik.com/premium-photo/wedding-cake-bride-groom-couple-cut-wedding-party-event-restaurant-church_177530-126.jpg?uid=R92172466&ga=GA1.1.239982076.1735217048&semt=ais_hybrid"
                    class="memory-img"
                    alt="slide"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                  <h4>Plan 2</h4>
                  <p>
                    For the second plan is I want to make sure that whenever
                    you're with me.<br />
                    You will always get to eat anything that you wanted to.
                  </p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                  <img
                    src="https://img.freepik.com/free-photo/papaya-salad-served-with-rice-noodles-vegetable-salad-decorated-with-thai-food-ingredients_1150-26509.jpg?uid=R92172466&ga=GA1.1.239982076.1735217048&semt=ais_hybrid"
                    class="memory-img"
                    alt="slide"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                  <h4>Plan 3</h4>
                  <p>
                    Our third plan is to travel to many other places together.
                    <br />
                    I will take you to many different places. and spent so many
                    good time together ok.
                  </p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                  <img
                    src="https://img.freepik.com/free-photo/traveler-asian-couple-direction-location-map-beijing-china_7861-1432.jpg?uid=R92172466&ga=GA1.1.239982076.1735217048&semt=ais_hybrid"
                    class="memory-img"
                    alt="slide"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                  <h4>Plan 4</h4>
                  <p>
                    Our fourth plan is to have our own house and car.<br />
                    I know for sure that we will get what we want when we're
                    together.So let's try our best together ok.
                  </p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                  <img
                    src="https://img.freepik.com/free-photo/charming-yellow-house-with-wooden-windows-green-grassy-garden_181624-8074.jpg?uid=R92172466&ga=GA1.1.239982076.1735217048&semt=ais_hybrid"
                    class="memory-img"
                    alt="slide"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                  <h4>Plan 5</h4>
                  <p>
                    Our fifth plan is to live happily together.<br />
                    I will do like what I have promsie you. I will make sure
                    that you'll always be happy no matter what happen.
                  </p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                  <img
                    src="https://media.istockphoto.com/id/1309245920/photo/cheerful-middle-eastern-family-of-three-having-fun-together-at-home.jpg?b=1&s=612x612&w=0&k=20&c=IRLNy-E4EtbNF3jk8WVpPcoUPWYsaDOSVEVabWHanqs="
                    class="memory-img"
                    alt="slide"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-carousel">
        <a
          class="carousel-prev rounded-circle"
          href="#myCarousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-next rounded-circle"
          href="#myCarousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--slide end-->

    <footer class="flex-shrink-0 py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>For my Lovely girl friend.</small>
      </div>
    </footer>

    <script src="./JS//plan.js"></script>
    <script src="./JS/gallery.js"></script>
    <script src="./JS/memory.js"></script>
    <script src="./assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
