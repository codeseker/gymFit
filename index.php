<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$connect = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts      -->

    <header class="header">

        <a href="#" class="logo"> <span>gym</span>FIT </a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#features">features</a>
            <a href="#blogs">blogs</a>
            <a href="./login.php">login</a>
            <a href="./register.php">signup</a>
            <a href="./logout.php">logout</a>
        </nav>

    </header>

    <!-- header section ends     -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, be fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, be fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, be fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <span>about us</span>
            <h3 class="title">Every day is a chance to become better</h3>
            <p>Every day offers an opportunity for personal growth and improvement. By embracing each day with a positive mindset, we can strive to make progress, learn from our experiences, and become the best version of ourselves. With determination and a commitment to self-improvement, we can seize the potential of each new day and continue on the path of continuous growth.</p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>body and mind</h3>
                    <p>The body and mind intertwine, shaping our existence.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>healthy life</h3>
                    <p>Nurturing body and mind, a healthy life thrives.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>strategies</h3>
                    <p>Effective strategies empower success in various endeavors.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>workout</h3>
                    <p>Regular workout fuels vitality and strength.</p>
                </div>
            </div>
            <a href="#" class="btn">read more</a>
        </div>

    </section>

    <!-- about section ends -->

    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"> <span>gym features</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/f-img-1.jpg" alt="">
                </div>
                <div class="content">
                    <img src="images/icon-1.png" alt="">
                    <h3>body building</h3>
                    <p>Bodybuilding cultivates muscular strength and sculpted physique through targeted training and nutrition.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box second">
                <div class="image">
                    <img src="images/f-img-2.jpg" alt="">
                </div>
                <div class="content">
                    <img src="images/icon-2.png" alt="">
                    <h3>workouts for men</h3>
                    <p>Effective workouts for men enhance strength, stamina, and overall fitness.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/f-img-3.jpg" alt="">
                </div>
                <div class="content">
                    <img src="images/icon-3.png" alt="">
                    <h3>workouts for women</h3>
                    <p>Targeted workouts for women enhance strength, flexibility, and overall fitness, empowering their unique fitness goals and needs.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>


    <!-- banner section starts  -->

    <section class="banner">

        <span>join us now</span>
        <p>Join us now and unlock a world of possibilities.</p>
        <a href="#" class="btn">Enroll Now</a>

    </section>

    <!-- banner section ends -->

    <!-- review section starts  -->

    <section class="review">

        <div class="information">
            <span>testimonials</span>
            <h3>what our clients says</h3>
            <p>Our clients rave about the transformative experiences and exceptional service they receive.</p>
        </div>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>I've achieved remarkable results in a short time, thanks to the personalized workout plans.</p>
                    <div class="user">
                        <img src="images/pic-1.png" alt="">
                        <div class="info">
                            <h3>aryan mittal</h3>
                            <span>Developer</span>
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>I've achieved remarkable results in a short time, thanks to the personalized workout plans.</p>
                    <div class="user">
                        <img src="images/pic-1.png" alt="">
                        <div class="info">
                            <h3>ayush jangid</h3>
                            <span>Developer</span>
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                    <div class="user">
                        <img src="images/pic-3.png" alt="">
                        <div class="info">
                            <h3>aryan mittal</h3>
                            <span>designer</span>
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                    <div class="user">
                        <img src="images/pic-4.png" alt="">
                        <div class="info">
                            <h3>ayush jangid</h3>
                            <span>designer</span>
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>daily posts</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st nov, 2022</a> </div>
                        <h3>back workout</h3>
                        <p>Back workout: rows, pull-ups, deadlifts, strength.</p>
                        <a href="./back.php" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st nov, 2022</a> </div>
                        <h3>Cardio Workout</h3>
                        <p>Heart-pumping cardio: endurance, sweat.</p>
                        <a href="./cardio.php" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st nov, 2022</a> </div>
                        <h3>Biceps Workout</h3>
                        <p>Bulging peaks, arm flexion, biceps showcase.</p>
                        <a href="./biceps.php" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st nov, 2022</a> </div>
                        <h3>Legs Workout</h3>
                        <p>Leg Day: Squat, lunge, deadlift, power.</p>
                        <a href="./legs.php" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st nov, 2022</a> </div>
                        <h3>Full Body Workout</h3>
                        <p>compound exercises, strength, balance.</p>
                        <a href="./fullBody.php" class="btn">read more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a class="links" href="#home">home</a>
                <a class="links" href="#about">about</a>
                <a class="links" href="#features">features</a>
                <a class="links" href="#pricing">pricing</a>
                <a class="links" href="#trainers">trainers</a>
                <a class="links" href="#blogs">blogs</a>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p> <i class="fas fa-phone"></i> +91 9887153864 </p>
                <p> <i class="fas fa-phone"></i> +91 9145845453 </p>
                <p> <i class="fas fa-envelope"></i> support.gymfit@gmail.com </p>
                <p> <i class="fas fa-map"></i> jaipur, india - 302022 </p>
                <div class="share">
                    <a href="https://www.linkedin.com/in/ayushjangid/" class="fab fa-facebook-f"></a>
                    <a href="https://www.linkedin.com/in/ayushjangid/" class="fab fa-twitter"></a>
                    <a href="https://www.linkedin.com/in/ayushjangid/" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" class="email" placeholder="enter your email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>
    </section>



    <!-- footer section ends -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>