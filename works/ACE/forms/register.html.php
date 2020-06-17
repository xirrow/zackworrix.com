<?php include_once('../functions.php'); ?>

<?php $pageTitle = "Ace - Register"; ?>

<!doctype html>

<html lang="en">

<?php include_once('../includes/head.inc.html.php'); ?>

<body>

    <?php include_once('../includes/nav.inc.html.php'); ?>

    <img id="mobile-img" src='../images/triathlon-runners05-soloMOB.png' alt="Never give up">

    <!-- Slideshow container -->
    <section class="slideshow-container">

        <!-- Full-width images AUTOMATIC with Manual OPTION -->
        
        <figure class="mySlides fade">
            <img src='../images/triathlon-bicyclists07.png' alt="New friends">
        </figure>

        <figure class="mySlides fade">
            <img src='../images/triathlon-bicyclists08.png' alt="On to the finish line">
        </figure>

        <figure class="mySlides fade">
            <img src='../images/triathlon-swimmers04.png' alt="Before swim">
        </figure>
        
        <figure class="mySlides fade">
            <img src='../images/triathlon-bicyclists05.png' alt="Caught in a turn">
        </figure>

        <figure class="mySlides fade">
            <img src='../images/triathlon-swimmers07.png' alt="Like a fish to water">
        </figure>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- The dots/circles -->
        <figure class="container-dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </figure>

    </section>

    <br>

    <main>

        <!--Article/Form Area-->

        <form method="post" action="insert.php" class="col span_8_of_12 container">
            <h1>REGISTER</h1>
            <h2>Register for the Event now!</h2>
            <p>* Required Fields</p>
            <table>
                <tr class="row">
                    <td class="col-25">* First Name:</td>
                    <td class="col-75"><input type="text" name="firstName" required></td>
                </tr>
                <tr class="row">
                    <td class="col-25">* Last Name:</td>
                    <td class="col-75"><input type="text" name="lastName" required></td>
                </tr>
                <tr class="row">
                    <td class="col-25">* E-Mail Address:</td>
                    <td class="col-75"><input type="text" name="eMail" required></td>
                </tr>
                <tr class="row">
                    <td class="col-25">* Emergency Contact Telephone Number:</td>
                    <td class="col-75"><input type="text" name="eContact" required></td>
                </tr>
                <tr class="row">
                    <td class="col-25">* Emergency Contact Name:</td>
                    <td class="col-75"><input type="text" name="eName" required></td>
                </tr>
                <tr class="row">
                    <td class="col-25">Gender:</td>
                    <td class="col-75">
                        <input type="radio" name="gender" value="Male" />Male
                        <br>
                        <input type="radio" name="gender" value="Female" />Female
                        <br>
                        <input type="radio" name="gender" value="Non-Binary" />Non-Binary
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">Age:</td>
                    <td class="col-75"><input type="text" name="age"></td>
                </tr>
                <tr class="row">
                    <td class="col-25">Event:</td>
                    <td class="col-75">
                        <h3><b>SATURDAY EVENTS :</b></h3>
                        <input type="radio" name="eventSat" value="Long Course" />
                        Long Course ($240.00) - Event begins at <b>7:00AM</b>
                        <br>
                        <input type="radio" name="eventSat" value="Olympic" />
                        Olympic ($110.00) - Event begins at <b>7:30AM</b>
                        <br>
                        <input type="radio" name="eventSat" value="10K" />
                        10K ($50.00) - Event begins at <b>7:15AM</b>
                        <br>
                        <input type="radio" name="eventSat" value="Half Marathon" />
                        Half Marathon ($75.00) - Event begins at <b>7:15AM</b>
                        <br>
                        <h3><b>SUNDAY EVENTS :</b></h3>
                        <input type="radio" name="eventSun" value="Sprint" />
                        Sprint ($90.00) - Event begins at <b>8:00AM</b>
                        <br>
                        <input type="radio" name="eventSun" value="Try-a-Tri" />
                        Try-a-Tri ($65.00) - Event begins at <b>8:20AM</b>
                        <br>
                        <input type="radio" name="eventSun" value="Splash n' Dash" />
                        Splash n' Dash ($25.00) - Event begins at <b>12:00PM</b>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">T-Shirt Size:</td>
                    <td class="col-75">
                        <input type="radio" name="shirtSize" value="XS" />XSmall
                        <br>
                        <input type="radio" name="shirtSize" value="S" />Small
                        <br>
                        <input type="radio" name="shirtSize" value="M" />Medium
                        <br>
                        <input type="radio" name="shirtSize" value="L" />Large
                        <br>
                        <input type="radio" name="shirtSize" value="XL" />XLarge
                        <br>
                        <input type="radio" name="shirtSize" value="XXL" />XXLarge
                        <br>
                        <input type="radio" name="shirtSize" value="XXXL" />XXXLarge
                        <br>
                        <input type="radio" name="shirtSize" value="XXXXL" />XXXXLarge
                    </td>
                    <br>
                </tr>
                <tr class="row">
                    <td class="col-25">Special Accomodations:</td>
                    <td class="col-75">
                        <textarea rows="5" cols="50" name="specAcco">Enter special accommodations here...</textarea>
                        <br>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">Role at Event:</td>
                    <td class="col-75">
                        <input type="radio" name="guestOpt" value="Athlete" />Athlete
                        <br>
                        <input type="radio" name="guestOpt" value="Volunteer" />Volunteer
                    </td>
                    <br>
                </tr>
            </table>
            <input type="submit" name="register" value="REGISTER" class="reg-button" />        
        
        <section  class="cost-included">
        <h2>Event Cost Includes:</h2>
        
        <ul>
            <li>Food &amp; Beer</li> 
            <li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
            <li>Commemorative Finisher medal</li>
            <li>Accurate Chip Timing for competitive races</li>
            <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
            <li>Post-event party &amp; entertainment</li>
        </ul>
        
        <p><b>NOTE: Tech shirts guaranteed to pre-registered participants only.</b></p> 
        
        <h2>PACKET PICK UP</h2>
        
        <p><em>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8:00AM-5:00PM, Friday 9:00AM-12:00PM. No day of event packet pick up.</em></p>
        
        <br>
        <h2>Do you have questions about registration or event details?<a href='https://zworrix.webhostingforstudents.com/cas222/ACE/forms/contact.html.php' class="linkz"> CLICK HERE</a></h2>
        </section>
        
        </form>
 
        <!--Widget Space-->
        <section class="col span_4_of_12 widget-space widget-space-special">

            <!--Weather Widget-->
            <figure class="weather-widget">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="Portland, OR" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-mode="Current" data-theme="pure" data-textcolor="#000000" data-highcolor="#FF0000">Portland, OR WEATHER</a>
            </figure>
            
        
            <img src="../images/triathlon-runners07-solo.png" id='event-img' alt="Happy athlete jogging">
        

        </section>

    </main>

    <?php include('../includes/footer.inc.html.php'); ?>

    <!--Script Links-->
    <script type="text/javascript" src="<?php echo '../js/script.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo '../js/weather-widget.js'; ?>"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
