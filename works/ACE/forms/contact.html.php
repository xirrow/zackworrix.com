<?php include_once('../functions.php'); ?>

<?php $pageTitle = "Ace - Contact"; ?>

<!doctype html>

<html lang="en">

<?php include_once('../includes/head.inc.html.php'); ?>

<body>

    <?php include_once('../includes/nav.inc.html.php'); ?>

    <img id="mobile-img" src='../images/triathlon-runners05-soloMOB.png' alt="In the lead">

    <!-- Slideshow container -->
    <section class="slideshow-container">

        <!-- Full-width images AUTOMATIC with Manual OPTION -->

        <figure class="mySlides fade">
            <img src='../images/triathlon-bicyclists09.png' alt="Comrades in sport">
        </figure>

        <figure class="mySlides fade">
            <img src='../images/triathlon-runners08.png' alt="Living the dream">
        </figure>

        <figure class="mySlides fade">
            <img src='../images/triathlon-swimmers01.png' alt="Wetsuits dive in">
        </figure>

       <figure class="mySlides fade">
            <img src='../images/triathlon-swimmers05.png' alt="There can be only one">
        </figure>

        <figure class="mySlides fade">
            <img src='../images/triathlon-bicyclists04.png' alt="All ready to win">
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

        <form method="post" action="insert-contact.php" class="col span_8_of_12 container">
            <h1>Questions or Comments?</h1>
            <h2>We love those!</h2>
            <table>
                <tr class="row">
                    <td class="col-25">First Name:</td>
                    <td class="col-75"><input type="text" name="firstName">
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">Last Name:</td>
                    <td class="col-75"><input type="text" name="lastName">
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">E-Mail Address:</td>
                    <td class="col-75"><input type="text" name="eMail">
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">Question or Comment:</td>
                    <td class="col-75">
                        <textarea rows="5" cols="50" name="questComm">Enter questions or comments here...</textarea>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-25">Role at Event:</td>
                    <td class="col-75">

                        <input type="radio" name="guestOpt" value="Athlete" />Athlete
                        <br>
                        <input type="radio" name="guestOpt" value="Volunteer" />Volunteer
                        <br>
                        <input type="radio" name="guestOpt" value="Athlete" />Interested Party

                    </td>
                </tr>
            </table>
            <input type="submit" name="contact" value="SEND QUESTIONS OR COMMENTS" class="reg-button" />
        </form>

        <!--Widget Space-->
        <section class="col span_4_of_12 widget-space">
           
            <!--Twitter Feed-->
            <figure class="twitter-timeline">
                <a class="twitter-timeline" data-height="300" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">TWITTER</a>
            </figure>

            <!--Facebook Feed-->
            <figure class="iframe-container">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=500&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media">FACEBOOK</iframe>
            </figure>

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
