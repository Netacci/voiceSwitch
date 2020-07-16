<?php 
$host = 'x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$dbUsername = 'slfsi72jjitjurgn';
$dbPassword = 'cocaeudurrk949ef';
$dbname = 'e5j5z097jfy6zing';
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$success = "";
$greater = "";
$lesser = "";
if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($conn, $email);
  $query = "SELECT id From sublist WHERE email ='$email' ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    $greater = "<p class='bg-danger text-white'>Email already exists</p>";
    $lesser = "<p class='bg-dangerr text-white'>Subscribe error. Check email input field</p>";
	} else{
    $query = "INSERT Into sublist (email) VALUES ('$email')" ;
    $result = mysqli_query($conn, $query);
    if ($result){
      $success = " <div class='bg-success text-white'>
                   <p class='success-p'>Sucessfully subscribed</p>
                   <a class='back-link btn'href='index.php'>Go back</a>
                   </div>";
    }else {
      echo "rejected";
    }
		
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- Optimized viewport for mobile -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"
    />
    <!-- Website description -->
    <meta name="description" content="Voice, technology" />
    <meta name="keywords" content="" />
    <!-- Website title-->
    <title>VoiceSwitch</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="" />
    <!-- Google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS links-->
    <link href="./assets/css/lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/animate.min.css" />
    <link rel="stylesheet" href="./assets/css/aos.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="./assets/css/slick-theme.css"
    />
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
  </head>
  <body>
  
  
   <div class="wrapper">
     <!-- Header starts here -->
     <div class="">
        <p><?php
                  if($success!=""){
                    echo $success;
                    $success = null;
                    die();
                  }
                ?></p>
       </div>
   </div>
     <!-- Preloader starts -->
     <div id="preloader" class="preloader">
      <div class="status"></div>
    </div>
    <!-- Preloader ends -->
    <div class="prwa text-center"><?php echo $lesser;?></div>
    <header class="main-head" id="home">
   
      <div
        class="logo-img mt-5 mb-lg-5 wow animate__bounce"
        data-wow-duration="2s"
      >
        <img src="./assets/images/logo.svg" alt="" class="logo" loading="lazy" />
      </div>
      <hr />
      <div class="container">
        <div class="head-wrap row">
          <div class="first-text col-lg-7">
            <h1
              class="head-title mt-4 mt-lg-5 text-center text-lg-left wow animate__fadeInLeft"
              data-wow-duration="3s"
            >
              Make calls in any voice!
            </h1>
            <div class="head-img mt-4 text-center d-lg-none">
              <img
                src="./assets/images/header-mockup.svg"
                alt="mockup"
                class="mockup w-50"
                loading="lazy"
              />
            </div>
            <p
              class="head-text text-center text-lg-left mt-lg-3 wow animate__fadeInLeft"
              data-wow-duration="3s"
            >
            voiceSwitch is a voice call app that allows you to make calls in any
              voice of your choosing. It captures voice patterns of different
              people from different sources and has a high end audio recording
              technology that clones these voice patterns in seconds. The saved
              cloned voice patterns can be used during phone calls, thereby
              making it possible for you to sound like anyone you want!. There
              is no limit as to where voice patterns can be captured from, it
              coould be directly during a call, from the television, radio or
              even just a random face to face conversation with someone. This
              means you can sound like just anyone over the phone and your
              friends wouldn't be able to tell!
            </p>
            <h1 class="launch-title mt-lg-4 text-center text-lg-left wow animate__fadeInLeft" data-wow-duration="3s" >
              LAUNCHING SOON!
            </h1>

            <div class="inputs mb-4 mb-lg-0 mt-lg-5 mt-4">
              <p class="launch-text text-center wow animate__shakeY" data-wow-duration="3s" data-wow-iteration="100">Get Notified</p>
            
             
              <form action="" method="POST"
                class="input-field mt-3 text-center text-lg-left"
                data-aos="fade-up"
                data-aos-duration="1000">
                
                <div class=""><?php echo $greater;?></div>
                <input type="email" class="sub-input" name="email" placeholder="Enter your Email address" value="<?php if(isset($_POST['submit'])){echo $email;} ?>" required />
                <input type="submit" class="submit-btn btn" name="submit" value="Subscribe" />
              </form>
            </div>
          </div>
          <div class="head-img col-lg-5 text-center d-none d-lg-block">
            <img
              src="./assets/images/header-mockup.svg"
              alt="mockup"
              class="mockup img-fluid"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </header>
    
    <!-- HEADER ENDS HERE -->
    <!-- FEATURES SECTION BEGINS HERE -->
    <section class="features">
      <div class="container mt-4">
        <div class="feature-head text-center text-lg-left">
          <h2 class="feature-title">App Core Features</h2>
        </div>
         <!-- mobile slider begins here -->
         <div class="app-features moblie-features d-lg-none mt-5 slider">
          <div class="feat feat-mob text-center px-5">
            <img
              src="./assets/images/75-icon.svg"
              alt="icon"
              class="icon mt-3 mx-auto"
              loading="lazy"
            />
            <p class="feat-title mt-2">Voice Pattern Capture</p>
            <p class="feat-text mb-5">
              Capture voice patterns within seconds from any source
            </p>
          </div>
          <div class="feat feat-mob text-center px-5">
            <img
              src="./assets/images/phone-icon.svg"
              alt="icon"
              class="icon mt-4 mx-auto"
              loading="lazy"
            />
            <p class="feat-title mt-3">Clonned Voice Call</p>
            <p class="feat-text mb-5">
              Choose whom you want to sound like from the list of voice patterns
              while making calls.
            </p>
          </div>
          <div class="feat feat-mob text-center px-5">
            <img
              src="./assets/images/mic-icon.svg"
              alt="icon"
              class="icon mt-4 mx-auto"
              loading="lazy"
            />
            <p class="feat-title mt-4">Clonned Audio Recording</p>
            <p class="feat-text mb-5 mt-4">
              Record audio from anywhere and at anytime
            </p>
          </div>
          <div class="feat feat-mob text-center px-5">
            <img
              src="./assets/images/share-icon.svg"
              alt="icon"
              class="icon mt-4 mx-auto"
              loading="lazy"
            />
            <p class="feat-title mt-3">Share Voice Patterns</p>
            <p class="feat-text mb-5">
              You can also share voice patterns with friends directly from you
              phone
            </p>
          </div>
          <div class="feat feat-mob text-center px-5">
            <img
              src="./assets/images/switch.svg"
              alt="icon"
              class="icon mt-4 mx-auto mt-5"
              loading="lazy"
            />
            <p class="feat-title mt-5">Switch Voice Patterns</p>
            <p class="feat-text mb-5 mt-4">
              Switch voice patterns during phone calls
            </p>
          </div>
          <div class="feat feat-mob text-center px-5">
            <img
              src="./assets/images/delete.svg"
              alt="icon"
              class="icon mt-4 mx-auto"
              loading="lazy"
            />
            <p class="feat-title mt-3">Delete Voice Patterns</p>
            <p class="feat-text mb-5">
              Delete voice patterns whenever you like and record again
            </p>
          </div>
        </div>
        <!-- mobile slider ends here -->
        <!-- desktop features -->
        <div class="app-features row mt-lg-5 d-none d-lg-flex">
          <div
            class="feat col-lg-3 text-center mr-lgg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <img
              src="./assets/images/75-icon.svg"
              alt="icon"
              class="icon mt-4"
              loading="lazy"
            />
            <p class="feat-title mt-3">Voice Pattern Capture</p>
            <p class="feat-text mb-5">
              Capture voice patterns within seconds from any source
            </p>
          </div>
          <div
            class="feat col-lg-3 text-center mr-lgg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <img
              src="./assets/images/phone-icon.svg"
              alt="icon"
              class="icon mt-4"
              loading="lazy"
            />
            <p class="feat-title mt-3">Clonned Voice Call</p>
            <p class="feat-text mb-5">
              Choose whom you want to sound like from the list of voice patterns
              while making calls.
            </p>
          </div>
          <div
            class="feat col-lg-3 text-center feat3 mr-lgg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <img
              src="./assets/images/mic-icon.svg"
              alt="icon"
              class="icon mt-4"
              loading="lazy"
            />
            <p class="feat-title mt-3">Clonned Audio Recording</p>
            <p class="feat-text mb-5">
            Record audio from anywhere and at anytime
            </p>
          </div>
          <div
            class="feat col-lg-3 text-center mt-lg-5 mr-lgg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <img
              src="./assets/images/share-icon.svg"
              alt="icon"
              class="icon mt-4"
              loading="lazy"
            />
            <p class="feat-title mt-3">Share Voice Patterns</p>
            <p class="feat-text mb-5">
              You can also share voice patterns with friends directly from you
              phone
            </p>
          </div>
          <div
            class="feat col-lg-3 text-center mt-lg-5 mr-lgg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <img
              src="./assets/images/switch.svg"
              alt="icon"
              class="icon mt-5"
              loading="lazy"
            />
            <p class="feat-title mt-5">Switch Voice Patterns</p>
            <p class="feat-text mb-5 mt-4">
              Switch voice patterns during phone calls
            </p>
          </div>
          <div
            class="feat col-lg-3 text-center mt-lg-5"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <img
              src="./assets/images/delete.svg"
              alt="icon"
              class="icon mt-4"
              loading="lazy"
            />
            <p class="feat-title mt-3">Delete Voice Patterns</p>
            <p class="feat-text mb-5">
            Delete voice patterns whenever you like and record again
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- FEATURES SECTION ENDS HERE -->
     <!-- SCREENSHOT SECTION STARTS HERE -->
     <section class="screenshots">
      <div class="container mt-5">
        <div class="screenshot-head text-center text-lg-right">
          <h2 class="screenshot-title">
            App Screenshots
          </h2>
        </div>
        <!-- screenshots mobile slider starts here -->
        <div
          class="screens d-lg-none row mt-5 slider-screen justify-content-center"
        >
          <div class="text-center px-5">
            <img
              src="./assets/images/get-started.png"
              alt="icon"
              class="icon mt-4 mx-auto img-flui"
              loading="lazy"
            />
            <p class="feat-title">Login to Get Started</p>
          </div>
          <div class="text-center px-5">
            <img
              src="./assets/images/capture.png"
              alt="icon"
              class="icon mt-4 mx-auto img-flui"
              loading="lazy"
            />
            <p class="feat-title">
              Record voice from any audio source with over 85% accuracy
            </p>
          </div>
          <div class="text-center px-5">
            <img
              src="./assets/images/save.png"
              alt="icon"
              class="icon mt-4 mx-auto img-flui"
              loading="lazy"
            />
            <p class="feat-title">Save voice patterns for easy identification</p>
          </div>
          <div class="text-center px-5">
            <img
              src="./assets/images/select.png"
              alt="icon"
              class="icon mt-4 mx-auto img-flui"
              loading="lazy"
            />
            <p class="feat-title">
              Select, share or delete different voice patterns
            </p>
          </div>
          <div class="text-center px-5">
            <img
              src="./assets/images/receive-calls.png"
              alt="icon"
              class="icon mt-4 mx-auto img-flui"
              loading="lazy"
            />
            <p class="feat-title">
              Make call as you normally do but with different voices
            </p>
          </div>
          <div class="text-center px-5">
            <img
              src="./assets/images/make-calls.png"
              alt="icon"
              class="icon mt-4 mx-auto img-flui"
              loading="lazy"
            />
            <p class="feat-title">
              Recieve calls with the option of switching voices mid-call
            </p>
          </div>
        </div>
        <!-- mobile slider for screenshots ends here -->
        <!-- Desktop screenshots starts here -->
        <div class="screens d-none d-lg-flex row mt-5 justify-content-center">
          <div
            class="text-center col-4"
            data-aos="fade-right"
            data-aos-duration="1000"
          >
            <a
              href="./assets/images/get-started.png"
              data-lightbox="desk-screenshots"
              data-title="Login to Get Started"
            >
              <img
                src="./assets/images/get-started.png"
                alt="icon"
                class="icon mt-4 mx-auto img-flui"
                loading="lazy"
              />
            </a>

            <p class="feat-title f-d">Login to Get Started</p>
          </div>
          <div
            class="text-center col-4"
            data-aos="fade-right"
            data-aos-duration="1000"
          >
            <a
              href="./assets/images/capture.png"
              data-lightbox="desk-screenshots"
              data-title="Record voice from any audio source with over 85% accuracy"
            >
              <img
                src="./assets/images/capture.png"
                alt="icon"
                class="icon mt-4 mx-auto img-flui"
                loading="lazy"
              />
            </a>
            <p class="feat-title f-d">
              Record voice from any audio source with over 85% accuracy
            </p>
          </div>
          <div
            class="text-center col-4"
            data-aos="fade-right"
            data-aos-duration="1000"
          >
            <a
              href="./assets/images/save.png"
              data-lightbox="desk-screenshots"
              data-title="Save voice patterns for easy identification"
            >
              <img
                src="./assets/images/save.png"
                alt="icon"
                class="icon mt-4 mx-auto img-flui"
                loading="lazy"
              />
            </a>
            <p class="feat-title f-d">
            Save voice patterns for easy identification
            </p>
          </div>
          <div
            class="text-center col-4"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <a
              href="./assets/images/select.png"
              data-lightbox="desk-screenshots"
              data-title="Select, share or delete different voice patterns"
            >
              <img
                src="./assets/images/select.png"
                alt="icon"
                class="icon mt-4 mx-auto img-flui"
                loading="lazy"
              />
            </a>
            <p class="feat-title f-d">
              Select, share or delete different voice patterns
            </p>
          </div>
          <div
            class="text-center col-4"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <a
              href="./assets/images/receive-calls.png"
              data-lightbox="desk-screenshots"
              data-title="Make call as you normally do but with different voices"
            >
              <img
                src="./assets/images/receive-calls.png"
                alt="icon"
                class="icon mt-4 mx-auto img-flui"
                loading="lazy"
              />
            </a>
            <p class="feat-title f-d">
              Make call as you normally do but with different voices
            </p>
          </div>
          <div
            class="text-center col-4"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <a
              href="./assets/images/make-calls.png"
              data-lightbox="desk-screenshots"
              data-title="Recieve calls with the option of switching voices"
            >
              <img
                src="./assets/images/make-calls.png"
                alt="icon"
                class="icon mt-4 mx-auto img-flui"
                loading="lazy"
              />
            </a>
            <p class="feat-title f-d">
              Recieve calls with the option of switching voices mid-call
            </p>
          </div>
        </div>
        <!-- desktop screenshots ends here -->
      </div>
    </section>
    <!-- SCREENSHOT SECTION ENDS HERE -->
    <!-- FOOTER STARTS HERE -->
    <footer class="footer text-center">
      <div class="foot-head">
        <h1
          class="foot-title mt-5"
          data-aos="fade-down"
          data-aos-duration="1000"
        >
          LAUNCHING SOON
        </h1>
      </div>
      <div
        class="mt-5"
        data-aos="fade-down"
        data-aos-duration="1000"
        data-aos-delay="500"
      >
        <div class="d-flex justify-content-center">
          <div class="p-wrap mr-3 px-2 py-2">
            <p class="time-text">Days</p>
            <p class="time-text timer mr-3 mt-lg-4" id="days">120</p>
          </div>
          <div class="p-wrap mr-3 px-2 py-2">
            <p class="time-text mr-3">Hours</p>
            <p class="time-text timer mr-3 mt-lg-4" id="hours">4</p>
          </div>
          <div class="p-wrap mr-3 px-2 py-2">
            <p class="time-text mr-3">Minutes</p>
            <p class="time-text timer mr-3 mt-lg-4" id="minutes">12</p>
          </div>
          <div class="p-wrap mr-3 px-2 py-2">
            <p class="time-text mr-3">Seconds</p>
            <p class="time-text timer mr-3 mt-lg-4" id="seconds">22</p>
          </div>
        </div>
      </div>
      <div class="socials d-flex mt-5 justify-content-center">
        <img
          src="./assets/images/fb.svg"
          alt="icon"
          class="media wow animate__bounce mr-3"
          data-wow-duration="800ms"
        />
        <img
          src="./assets/images/twitter.svg"
          alt="icon"
          class="media wow animate__bounce mr-3"
          data-wow-duration="800ms"
          data-wow-delay="800ms"
        />
        <img
          src="./assets/images/linked.svg"
          alt="icon"
          class="media wow animate__bounce"
          data-wow-duration="800ms"
          data-wow-delay="1600ms"
        />
      </div>

      <div class="inputs mt-5">
        <div class="logo-img mt-5 mb-5">
          <img src="./assets/images/logo.svg" alt="" class="logo-foot" />
        </div>
      </div>
      <a href="#" id="topscroll" class="top-scroll"
              ><img
                src="./assets/images/arrow.svg"
                alt="scrollup"
                class="arrow"
            /></a>
    </footer>
  

    <!-- All javascript at the bottom of the page for fast page load -->
    <!-- Jquery -->
    <script src="./assets/js/jquery/jquery-3.5.1.min.js"></script>
     <!-- lightbox -->
     <script src="./assets/js/lightbox.min.js"></script>
    <!-- Popper -->
    <script src="./assets/js/popper/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="./assets/js/wow.min.js"></script>
    <!-- aos js -->
    <script src="./assets/js/aos.js"></script>
    <!-- slick slider -->
    <script src="./assets/js/slick.min.js"></script>
    <!-- main JS -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>
