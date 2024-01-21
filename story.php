<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title  -->
    <title>Consult</title>

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap 5.3    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- fontawsome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- style css  -->
    <link rel="stylesheet" href="css/styles.css"> <!--Styles-->
    

</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <section class="navigation" style="background-image: url(images/bg-3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 text-center">
                    <h2 class="fw-bold">Let IT Shine </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="story py-5" id="story">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="fw-bold">Our Story</h1>
                    <p>In 2009, Spotlight set out with a goal – to help customers realize the true potential of their IT organization. Over a decade later, we accomplish this through a unique and transparent business model. Our accomplished team, in-house technical expertise, and collective curiosity to hear YOUR story lays the foundation for a fruitful consulting engagement time and time again.</p>
                </div>
                <div class="col-md-8">
                    <div class="year_story">
                        <div class="line"></div>
                        <span class="dot_one"></span>
                        <span class="dotTwo"></span>
                        <ul class="date_list">
                            <li>
                                <div class="d_vie">
                                    <p>Jeff and Chris met while working at a consulting firm together. They wanted to do things differently, bringing transparency to the consulting world, and a passion for helping their friends. Spotlight started operations out of a small office in Denver.</p>
                                </div>
                                <div class="d_vie"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="d_vie"><h1>2009</h1></div>
                            </li>
                            <li>
                                <div class="d_vie">
                                    <p>Jeff and Chris met while working at a consulting firm together. They wanted to do things differently, bringing transparency to the consulting world, and a passion for helping their friends. Spotlight started operations out of a small office in Denver.</p>
                                </div>
                                <div class="d_vie"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="d_vie"><h1>2009</h1></div>
                            </li>
                            <li>
                                <div class="d_vie">
                                    <p>Jeff and Chris met while working at a consulting firm together. They wanted to do things differently, bringing transparency to the consulting world, and a passion for helping their friends. Spotlight started operations out of a small office in Denver.</p>
                                </div>
                                <div class="d_vie"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="d_vie"><h1>2009</h1></div>
                            </li>
                            <li>
                                <div class="d_vie">
                                    <p>Jeff and Chris met while working at a consulting firm together. They wanted to do things differently, bringing transparency to the consulting world, and a passion for helping their friends. Spotlight started operations out of a small office in Denver.</p>
                                </div>
                                <div class="d_vie"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="d_vie"><h1>2009</h1></div>
                            </li>
                            <li>
                                <div class="d_vie">
                                    <p>Jeff and Chris met while working at a consulting firm together. They wanted to do things differently, bringing transparency to the consulting world, and a passion for helping their friends. Spotlight started operations out of a small office in Denver.</p>
                                </div>
                                <div class="d_vie"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="d_vie"><h1>2009</h1></div>
                            </li>
                            <li>
                                <div class="d_vie">
                                    <p>Jeff and Chris met while working at a consulting firm together. They wanted to do things differently, bringing transparency to the consulting world, and a passion for helping their friends. Spotlight started operations out of a small office in Denver.</p>
                                </div>
                                <div class="d_vie"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="d_vie"><h1>2009</h1></div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
    @include("footer.php");
    ?>




    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> <!--Jquery Cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> <!--Bootstrap-->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('shadow');
            } else {
                $('.navbar').removeClass('shadow');
            }
        });
    </script>


</body>

</html>