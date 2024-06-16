<?php
require 'db_connection.php';
require_once 'create.php';
?>

<!DOCTYPE HTML>
<html>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <head>
        <title>PureTide FAQ</title>
        <link rel="icon" href="../FAQ/images/web-icon.png" type="image/x-icon">
        <link rel="stylesheet" href="./styles/faq_style.css" >
        <link rel="stylesheet" href="../Header/styles/header.css" />
        <link rel="stylesheet" href="../Footer/styles/footer.css" />
    </head>

    <body>
        
        <!-- header -->
        <div class="header-box navbar-fixed">
        <div class="logo-box">
            <img src="../Header/images/logo.png" id="logo" alt="Logo">
        </div>

        <div class="items-box">
            <nav class="items-nav">
                <ul class="item-bar" id="TextGreenColorChange">
                    <li class="item"><a href="../Home/home.html">Home</a></li>
                    <li class="item"><a href="../About Us/aboutUs.html">About Us</a></li>
                    <li class="item"><a href="../service/service.html">Services</a></li>
                    <li class="item"><a href="../Contact Us/contactUs.php">Contacts</a></li>
                    <li class="item"><a href="../feedback/feedback.php">Feedback</a></li>
                    <li class="item"><a href="../FAQ/faqmain.php">FAQ</a></li>
                </ul>
            </nav>
        </div>

        <div class="buttons">
            <div class="gbutton">
                <button class="greenbutton" id="pickupbtn"><a href="../booking-and-privacyPolicy/booking.php">Schedule a Pickup</a></button>
            </div>
            <div class="profile">
                <img src="../Header/images/profile-icon.gif" id="profile-image" onclick="toggleSubMenu()">
            </div>
            
            <div class="sub-menu-wrap" id="submenu">
            <div class="sub-menu">
                  <div class="user-info">
                      <img src="../Header/images/profile.png" class="userprofile-img" alt="User Profile">
                      <h3 class="submenu-text">User</h3>
                  </div>
                  <hr>
                  <a href="../useraccount/user.php" class="sub-menu-link">
                      <img src="../Header/images/profile.png" class="userprofile-img" alt="Edit Profile Icon">
                      <p class="submenu-text">Edit Profile</p>
                  </a>
                  
                  <a href="../Login/login.html" class="sub-menu-link">
                      <img src="../Header/images/help.png" class="userprofile-img" alt="Help Icon">
                      <p class="submenu-text">Login</p>
                      
                  </a>
                  <a href="../Login/logout.php" class="sub-menu-link">
                      <img src="../Header/images/logout.png" class="userprofile-img" alt="Logout Icon">
                      <p class="submenu-text">Logout</p>
                  </a>
                </div>
            </div>
        </div>
    </div>



    <!-- faq -->

        <div class="intro">
            <h4 id="faq-title">Frequently Asked Questions</h4>
        </div>

        <div class="ask-box">
            <h4 id="ask-box-title">Ask Your Question</h4>
            <h6 id="ask-box-subtitle">We look forward to helping you create and maintain a clean, healthy<br>environment that's as enjoyable as it is functional.</h6>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="submit-form">
                <input type="email" id="input-email" name="email" required><br>
                <input type="textarea" id="input-question" name="question" required><br>
                <input type="submit" value="Send-Question" id="submit-button" name="submit_faq">
            </form>
        </div>


        <!-- Display the insert data -->
        <div class="display-questions-box-main">
            <?php
                require_once 'display_questions.php';
            ?>
        </div>   


        <div class="questions-title">
            <div class="green-subtitle">Frequently Asked Questions</div>
            <div class="questions-title-main">
                Reliable Answers to Our Most<br>Common Questions
            </div>
            <div class="questions-title-sub">
                Stretch your budget further and enjoy more of what matters! Our cost-effective products can help<br>you save on everyday essentials like soap, water, heating, and electricity.
            </div>
        </div>
        
        <div class="qustions-answers-box">
            <div class="qustions-answers" id="question1">
                <div class="qustion">What should I prepare for the first pickup?</div>
                <div class="answer">Get your clothes professionally cleaned and back in your hands quickly - within 48 hours! We also understand life doesn't always follow a schedule. If you need a later return, simply let us know.</div>
            </div>
            <div class="qustions-answers" id="question2">
                <div class="qustion">Why do women's blouses cost more than men's shirt?</div>
                <div class="answer">Blouses often have details like darts, ruching, buttons, or pleats that take more time and fabric to construct compared to a standard men's button-up shirt.</div>
            </div>
            <div class="qustions-answers" id="question3">
                <div class="qustion">Are there any fabrics you don't clean?</div>
                <div class="answer">Leather needs special conditioners to stay supple, and water can damage it. Spot cleaning might be an option for light stains, but for a thorough clean, a leather specialist is best.</div>
            </div>
            <div class="qustions-answers" id="question4">
                <div class="qustion">Can I order by phone or email?</div>
                <div class="answer">Yes, I can oder by email or phone</div>
            </div>
            <div class="qustions-answers" id="question5">
                <div class="qustion">What if my clothes are damaged?</div>
                <div class="answer">Please notify us within 7 days of receiving your order. This allows us to properly investigate the issue.</div>
            </div>
            <div class="qustions-answers" id="question6">
                <div class="qustion">Do you furnish the cleaning supplies?</div>
                <div class="answer">No need to purchase detergents yourself: Save money and storage space by letting us take care of the products.</div>
            </div>
        </div>





        <!-- Footer -->
    <div class="footer-main">
    
    <div class="footer-set" id="footer-set1">
        <img src="../Footer/images/logo.png" id="logo">
        <div class="description">At our laundry and dry cleaning service, our team's expertise keeps us at the forefront of new cleaning methods and technologies.</div>
        <div class="socialmediabox">
            <div class="socialmedia">
                <img src="../Footer/images/x-icon.png" class="socialicon">
            </div>
            <div class="socialmedia">
                <img src="../Footer/images/fb-icon.png" class="socialicon">
            </div>
            <div class="socialmedia">
                <img src="../Footer/images/linkdin-icon.png" class="socialicon">
            </div>
            <div class="socialmedia">
                <img src="../Footer/images/instagram-icon.png" class="socialicon">
            </div>
        </div>
    </div>

    <div class="footer-set" id="footer-set2">
        <div class="footer-set-title">Contacts</div>
        <div class="contact-details">
            <div class="details" id="location">
                <img src="../Footer/images/location.png" class="contact-details-icon">
                <div class="contact-details-text">234 Kandy Road, Malabe</div>
            </div>
            <div class="details" id="time">
                <img src="../Footer/images/clock.png" class="contact-details-icon">
                <div class="contact-details-text">Mon-Fri: 7:00am-7:00pm</div>
            </div>
            <div class="details" id="mail">
                <img src="../Footer/images/mail.png" class="contact-details-icon">
                <div class="contact-details-text">noreply@envato.com</div>
            </div>
            <div class="details" id="phone">
                <img src="../Footer/images/call.png" class="contact-details-icon">
                <div class="contact-details-text">1 (800) 765-43-21</div>
            </div>
        </div>
    </div>

    <div class="footer-set" id="footer-set3">
        <div class="footer-set-title">Expect our call soon!</div>
        <form action="#">
            <input type="email" id="email" name="email" placeholder="Your E-mail Address" >
            <button type="submit" id="touch-button"><a href="../FAQ/faqmain.php">Touch Soon!</a></button>
        </form>
        
    </div>
</div>


<div class="final-footer">
  <h4 id="final-footer-1">© 2024 PureTide. All Rights Reserved.</h4>
  <a href="../terms&conditions/terms.html" id="final-footer-2">Terms and Conditions</a>
  <a href="../booking-and-privacyPolicy/privacy.html" id="final-footer-3">Privacy Policy</a>

</div>



        <script src="../Header/js/header.js"></script>

    </body>
</html>