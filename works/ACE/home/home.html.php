<?php include ('functions.php'); ?>

<?php $pageTitle = "Ace in the Hole Multisport Events"; ?>

<!doctype html>

<html lang="en">

<?php include('includes/head.inc.html.php'); ?>

<body>

    <?php include('includes/nav.inc.html.php'); ?>

    <img id="mobile-img" src='images/triathlon-runners05-soloMOB.png' alt="Competitor running toward camera">

    <!-- Slideshow container -->
    <section class="slideshow-container">

        <!-- Full-width images AUTOMATIC with Manual OPTION -->
        <figure class="mySlides fade">
            <img src='images/triathlon-bicyclists03.png' alt="Bicyclists leaning into turn">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-runners01.png' alt="Group run through trees">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-bicyclists08.png' alt="Many bicycles competing">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-runners02.png' alt="Trainers in action">
        </figure>

        <figure class="mySlides fade">
            <img src='images/triathlon-swimmers08.png' alt="Swimmers in wet suits">
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
                        
            <h1 id="about">About Ace in the Hole Multisport Events</h1>
            
            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds.</p> 
            
            <p>We offer Events for <b>Every Body.</b></p>
            
            <br>
            <h2>Would you like more information about our event?<a href='https://zworrix.webhostingforstudents.com/cas222/ACE/event.html.php' class="linkz"> CLICK HERE</a></h2>
            
            <br>
            <h2>To leave us a question or comment,<a href='https://zworrix.webhostingforstudents.com/cas222/ACE/forms/contact.html.php' class="linkz"> CLICK HERE</a></h2>
            
            <br>
            <h2>Looking to register or volunteer for our event?<a href='https://zworrix.webhostingforstudents.com/cas222/ACE/forms/register.html.php' class="linkz"> CLICK HERE</a></h2>
            
        </article>

        <!--Widget Space-->
        <section class="col span_4_of_12 widget-space">

            <!--Weather Widget-->
            <figure class="weather-widget">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="Portland, OR" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-mode="Current" data-theme="pure" data-textcolor="#000000" data-highcolor="#FF0000">Portland, OR WEATHER</a>
            </figure>

            <!--Twitter Feed-->
            <figure class="twitter-timeline">
                <a class="twitter-timeline" data-height="300" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw"></a>
            </figure>

            <!--Facebook Feed-->
            <figure class="iframe-container">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=500&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </figure>

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
