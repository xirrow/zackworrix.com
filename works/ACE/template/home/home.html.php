<?php include ('functions.php'); ?>

<?php $pageTitle = "Ace in the Hole Multisport Events"; ?>

<!doctype html>

<html lang="en">

<?php include('includes/head.inc.html.php'); ?>

<body>
    
    <?php include('includes/nav.inc.html.php'); ?>

    <img id="mobile-img" src="<?php echo 'images/placeholder1600x500.png'; ?>">
    
    <!-- Slideshow container -->
    <section class="slideshow-container">

        <!-- Full-width images AUTOMATIC with Manual OPTION -->
        <figure class="mySlides fade">
            <img src="<?php echo 'images/placeholder1600x500.png'; ?>">
        </figure>

        <figure class="mySlides fade">
            <img src="<?php echo 'images/placeholder1600x500.png'; ?>">
        </figure>

        <figure class="mySlides fade">
            <img src="<?php echo 'images/placeholder1600x500.png'; ?>">
        </figure>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- The dots/circles -->
        <figure class="container-dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </figure>

    </section>
    
    <br>

    <main>
        
        <!--Article/Form Area-->
        <article class="col span_8_of_12 article-space">

            <h1 id="about">Lorem ipsum</h1>

            <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam ut venenatis tellus in metus. Amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus. Fermentum leo vel orci porta non pulvinar. Arcu vitae elementum curabitur</p>

            <h1>itae nunc sed velit dignissim sodales.</h1>

            <p>Purus ut faucibus pulvinar elementum. Nunc eget lorem dolor sed. Aliquet lectus proin nibh nisl condimentum. Gravida cum sociis natoque penatibus et magnis dis. Accumsan in nisl nisi scelerisque eu. Augue ut lectus arcu bibendum at varius vel pharetra. Nunc mattis enim ut tellus.</p>

            <h2>Ultrices eros in cursus turpis massa tincidunt dui.</h2>
            <p>Imperdiet sed euismod nisi porta lorem. Ridiculus mus mauris vitae ultricies leo integer. Suspendisse potenti nullam ac tortor vitae purus. Non curabitur gravida arcu ac. Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Nunc mattis enim ut tellus elementum sagittis vitae. Odio pellentesque diam volutpat commodo sed. Orci phasellus egestas tellus rutrum. Sit amet venenatis urna cursus eget nunc scelerisque viverra mauris.</p>

            <ul>
                <li>Egestas tellus rutrum tellus pellentesque. Volutpat consequat mauris nunc congue nisi vitae suscipit. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus.</li><br>
                <li>Fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Nisi lacus sed viverra tellus. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Etiam erat velit scelerisque in dictum non. Sed pulvinar proin gravida hendrerit lectus.</li><br>
            </ul>

            <p>Ullamcorper dignissim cras tincidunt lobortis feugiat.</p>

        </article>

        <!--Widget Space-->
        <section class="col span_4_of_12 widget-space">

            <h1>WIDGET CONTAINER</h1>
            
            <!--Weather Widget-->
            <figure class="weather-widget">
            </figure>

            <!--Twitter Feed-->
            <figure class="twitter-timeline">
            </figure>

            <!--Facebook Feed-->
            <figure class="iframe-container">
            </figure>

        </section>

    </main>

    <?php include('includes/footer.inc.html.php'); ?>
    
    <!--Script Links-->
    <script type="text/javascript" src="<?php echo 'js/script.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo 'js/weather-widget.js'; ?>"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>