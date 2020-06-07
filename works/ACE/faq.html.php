<?php include ('functions.php'); ?>

<?php $pageTitle = "Ace - FAQ"; ?>

<!doctype html>

<html lang="en">

<?php include('includes/head.inc.html.php'); ?>

<body>

    <?php include('includes/nav.inc.html.php'); ?>

    <img id="mobile-img" src='images/triathlon-runners07-soloMOB.png' alt="Awesome photo of athlete">

    <!-- Slideshow container -->
    <section class="slideshow-container">

        <!-- Full-width images AUTOMATIC with Manual OPTION -->
        <figure class="mySlides fade">
            <img src='images/triathlon-bicyclists10.png' alt="Large bike team">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-runners03.png' alt="Athletic socks while competing">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-runners04.png' alt="Wheelchair access timeless">
        </figure>
        
        <figure class="mySlides fade">
            <img src='images/triathlon-swimmers06.png' alt="Diving for the lead">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-swimmers09.png' alt="Follow the leader">
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
        <article class="col span_8_of_12 article-space">

            <h1>Frequently Asked Questions</h1>

            <h2>What are the Rules?</h2> 
            <p>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon.  Important rules include no drafting, you must wear a helmet and music is <b>ABSOLUTELY NOT</b> allowed during the bike for obvious safety reasons.</p>

            <h2>Can I use a personal music device while cycling? </h2>
            <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>

            <h2>Can I use a personal music device while running?</h2>
            <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            
            <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</p>
            
            <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>
            
            <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>

            <h2>Do I need to wear a wetsuit?</h2>
            <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p> 
            
            <h2>Do I have to use a road or racing bike?</h2>
            <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
            
            <h2>What is included in the event cost?</h2>
        
            <ul>
                <li>Food &amp; Beer</li> 
                <li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                <li>Post-event party &amp; entertainment</li>
            </ul>
        
            <h2>Does every participant receive a Tech shirt?</h2>
            <p>Tech shirts guaranteed to pre-registered participants only.</p> 
        
            <h2>Where and when will packet pick up occur?</h2>
            <p>All packet pick up will occur at <em>Why Worry Racing, 123 NW Everett, Portland OR.</em></p>
        
            <p>Packet pick up hours: Thursday 8AM-5PM, Friday 9AM-12PM. No day of event packet pick up.</p>
            
            <br>
            <h2>Would you like to ask a specific question or leave a comment for us?<a href='https://zworrix.webhostingforstudents.com/cas222/ACE/forms/contact.html.php' class="linkz"> CLICK HERE</a></h2>

        </article>

        <!--Widget Space-->
        <section class="col span_4_of_12 widget-space widget-space-special">

        <img src="images/triathlon-runners06-solo.png" id='event-img' alt="Happy athlete jogging">
        
        </section>

    </main>

    <?php include('includes/footer.inc.html.php'); ?>

    <!--Script Links-->
    <script src="<?php echo 'https://zworrix.webhostingforstudents.com/cas222/ACE/js/script.js'; ?>"></script>
    <script src="<?php echo 'https://zworrix.webhostingforstudents.com/cas222/ACE/js/weather-widget.js'; ?>"></script>
    <script async src="https://platform.twitter.com/widgets.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
