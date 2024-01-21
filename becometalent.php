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

    <!-- main section start here  -->
    <section class="bctalent py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="abt p-3">
                        <div class="accordion rounded-0" id="accordionExample">
                            <div class="accordion-item  rounded-0">
                                <h2 class="accordion-header  rounded-0">
                                    <button class="accordion-button bg-green text-white rounded-0" style="background-color: green;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Software Engineer / Architect – Nationwide
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        C#, .NET, Java, Python, JavaScript, Go, Ruby, Mobile, etc. We may not be actively working on this opening right now, but we frequently see opportunities requiring this skill set. Please apply for consideration. <br>
                                        <a href="#" class="fw-bold">Click Here To Apply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  rounded-0">
                                <h2 class="accordion-header  rounded-0">
                                    <button class="accordion-button bg-green text-white rounded-0" style="background-color: green;" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="true" aria-controls="collapseOne">
                                        DevOps Engineer – Nationwide
                                    </button>
                                </h2>
                                <div id="two" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                    <div class="accordion-body">We may not be actively working on this opening right now, but we frequently see opportunities requiring this skill set. Please apply for consideration. <br>
                                        <a href="#" class="fw-bold">Click Here To Apply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  rounded-0">
                                <h2 class="accordion-header  rounded-0">
                                    <button class="accordion-button bg-green text-white rounded-0" style="background-color: green;" type="button" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="true" aria-controls="collapseOne">
                                        Data Engineer / Architect – Nationwide
                                    </button>
                                </h2>
                                <div id="three" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">EDW, ODS, Mart, Lake, Business Intelligence, ETL, Reporting, Visualization. We may not be actively working on this opening right now, but we frequently see opportunities requiring this skill set. Please apply for consideration <br>
                                        <a href="#" class="fw-bold">Click Here To Apply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  rounded-0">
                                <h2 class="accordion-header  rounded-0">
                                    <button class="accordion-button bg-green text-white rounded-0" style="background-color: green;" type="button" data-bs-toggle="collapse" data-bs-target="#four" aria-expanded="true" aria-controls="collapseOne">
                                        Cloud Infrastructure Engineer / Architect – Nationwide
                                    </button>
                                </h2>
                                <div id="four" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                    <div class="accordion-body">We may not be actively working on this opening right now, but we frequently see opportunities requiring this skill set. Please apply for consideration.<br>
                                        <a href="#" class="fw-bold">Click Here To Apply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  rounded-0">
                                <h2 class="accordion-header  rounded-0">
                                    <button class="accordion-button bg-green text-white rounded-0" style="background-color: green;" type="button" data-bs-toggle="collapse" data-bs-target="#five" aria-expanded="true" aria-controls="collapseOne">
                                        Project Manager / Business Analyst – Nationwide
                                    </button>
                                </h2>
                                <div id="five" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Project, Program, Product, Agile, OCM. We may not be actively working on this opening right now, but we frequently see opportunities requiring this skill set. Please apply for consideration.<br>
                                        <a href="#" class="fw-bold">Click Here To Apply</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <h1 class="fw-bold">Job Listings</h1>
                    <p class="mb-2">We consistently have 50-100 tech jobs open across the country. The majority of our roles are fully remote, and span skillsets, levels and clients. Please submit your resume so we can be in touch.</p>
                    <a href="#" class="btn_primary mx-0">View Job Openings</a>
                </div>
            </div>
        </div>
    </section>
    <!-- main section end here  -->



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