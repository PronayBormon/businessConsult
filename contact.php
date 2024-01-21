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
                    <h2 class="fw-bold">Contact </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start here  -->
    <section class="contact_us py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact">
                        <h1 class="fw-bold">Let's Talk</h1>
                        <p class="mb-2">Connect With Us for a Meaningful Conversation</p>
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
                                    <button class="btn_primary text-center m-auto">Send Message</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/map.png" class="img-fluid mb-2 text-center" style="max-width: 250px; " loading="lazy" alt="">
                    <div class="mt-2 text-center">
                        <p class="fw-bold m-0 ">Call Us On</p>
                        <p class="m-0">+1832-325-7332</p>
                    </div>
                    <div class="mt-2 text-center">
                        <p class="fw-bold m-0">Email Us At</p>
                        <p class="m-0">support@astute360corp.com</p>
                    </div>
                    <div class="mt-2 text-center">
                        <p class="fw-bold m-0">Visit Office</p>
                        <p class="m-0">Address : 6065 Hillcroft Street, Suite # 610, Houston, TX 77081.</p>
                        <p class="fw-bold m-0">Bangladesh Office</p>
                        <p class="m-0">Address : The Laureate, Level # C-6, House # 56, Road # 11, Block # F, Banani, Dhaka-1213, Bangladesh.</p>
                    </div>
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