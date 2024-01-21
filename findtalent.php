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
                    <h2 class="fw-bold">Find Talent Now</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- talent content section  -->
    <section class="features missionVission py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content_title">
                        <h1 class="fw-bold">Our Model </h1>
                        <span class="rounded-0 mb-2"></span>
                        <p class="mb-2">Talk with one of our consulting professionals today to help us assess your business strategy and identify gaps within your current teams. We engage our highly experienced technical recruiting team around every role to quickly and efficiently target the right blend of technical and soft skills. With our quality-over-quantity approach and consultant-level evaluation process, we work with you to implement individuals and teams that can seamlessly integrate into your strategy and deliver value to your business.

                            Whether your goal is to augment existing teams or to invest in permanent and sustainable staff, you can count on us to help you quickly access the right talent when and how you need it.</p>
                        <a href="#" class="btn_primary mx-0 mt-2">Contact Our Team</a>
                        <!-- <span style="height: 2px;"></span> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/two-businesswomen-discussing-data-on-computers.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- talent content section  -->

    <!-- contact section start here  -->
    <section class="contact bg_s py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="stitle text-center">
                        <h1 class="fs-3">Get Started With Spotlight Today</h1>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 m-auto">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" placeholder="Your Name" class="py-2 form-control rounded-0">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" placeholder="Your email" class="py-2 form-control rounded-0">
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" placeholder="Your Subject" class="py-2 form-control rounded-0">
                            </div>
                            <div class="col-md-12 mb-2">
                                <textarea name="" id="" cols="30" rows="6" class="form-control rounded-0" placeholder="Your message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn_primary text-center m-auto">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end here  -->



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