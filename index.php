<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hr - Home</title>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" type="text/css" href="style/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body id="homePage">
<div class="wrapper-page">
   
   <?php include 'header.php'; ?>

    <section class="banner text-center">
        <div class="banner-description">
            <h3>Start Your</h3>
            <h2>JOB SEARCH TODAY:</h2>
            <div>
                <a href="#cvSubbmit" class="button2 button-banner">Submit Cv</a>
                <a href="#location" class="button2">Location</a>
            </div>
            <a href="services.html" class="button3">Find our Service</a>
        </div>
        <div class="banner-contact">
            <div>
                <p>Call Us 24/7</p>
                <h4>+123-456-7890</h4>
            </div>
            <div>
                <p>Email Address</p>
                <h4>
                    <a href="mailto:example@example.com">example@example.com</a>
                </h4>
            </div>
            <div>
                <p>Open Hours</p>
                <h4>Daily 9:00-20:00</h4>
            </div>
        </div>
    </section>

    <section class="content-two-column-container align-items-center pt30">
        <div class="content-left">
            <div class="special-heading">
                <h2 class="extra-heading">HR</h2>
                <h3>Welcome to</h3>
                <h2>Agency!</h2>
            </div>
            <div class="text-block">
                <p>
                    We believe in the value that our functions add to a business. We
                    feel that this specialist part of HR is often unrecognised for its
                    contribution to the profitability and success of a business.
                </p>
                <ul class="icons-list">
                    <li>
                        <i class="fa fa-rocket"></i>
                        <h4><span>638</span> Companies We Helped</h4>
                    </li>
                    <li>
                        <i class="fa fa-briefcase"></i>
                        <h4><span>12</span> Corporate Programs</h4>
                    </li>
                    <li>
                        <i class="fa fa-graduation-cap"></i>
                        <h4><span>28</span> Trainings Courses</h4>
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <h4><span>125</span> Strategic Partners</h4>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-right">
            <img src="repository/person31.png" alt=""/>
        </div>
    </section>

    <section class="parallax">
        <div class="content-three-column-container align-items-center">
            <div class="content-with-bg">
                <div class="content-icon round">
                    <i class="fa fa-unlock-alt"></i>
                </div>

                <h4>Highly Secure</h4>
                <p>
                    Cloud-based services can offer our customers single tenant
                    dedicated environments
                </p>
            </div>
            <div class="content-with-bg">
                <div class="content-icon round">
                    <i class="fa fa-cloud"></i>
                </div>

                <h4>True Cloud Scale</h4>
                <p><u>Working with customers making 100-40,000 hires per annum</u></p>
            </div>
            <div class="content-with-bg">
                <div class="content-icon round">
                    <i class="fa fa-database"></i>
                </div>

                <h4>Accurate Data</h4>
                <p>
                    All of our customers' data is validated. We build accurate data
                    banks for reporting
                </p>
            </div>
        </div>
    </section>

    

    <section
            class="content-two-column-container-fluid align-items-center gradient-bg1"
    >
        <div class="content-left-img"></div>
        <div class="content-right-accordion gradient-padding-bg pl70 pr70">
            <div class="special-titles mb30">
                <h5>Receiving</h5>
                <h3>A job offer</h3>
            </div>

            <ul class="accordion">
                <li>
                    <a class="toggle" href="#">Be decisive</a>
                    <p class="inner">
                        Confirming your acceptance guarantees the job is yours. Usually there are other candidates in
                        the process at this point so ensure you are committed.
                    </p>
                </li>

                <li>
                    <a class="toggle" href="#">Or take your time</a>
                    <p class="inner">
                        Confirming your acceptance guarantees the job is yours. Usually there are other candidates in
                        the process at this point so ensure you are committed.
                    </p>
                </li>

                <li>
                    <a class="toggle" href="#">Resign</a>
                    <p class="inner">
                        Confirming your acceptance guarantees the job is yours. Usually there are other candidates in
                        the process at this point so ensure you are committed.
                    </p>
                </li>

                <li>
                    <a class="toggle" href="#">Counter offers</a>
                    <p class="inner">
                        Confirming your acceptance guarantees the job is yours. Usually there are other candidates in
                        the process at this point so ensure you are committed.
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section id="location">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.5926651603636!2d21.164962014817416!3d42.648794624812034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2s!4v1610722162306!5m2!1sen!2s"
                width="100%"
                height="450"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
        ></iframe>
    </section>

   <?php include 'footer.php'; ?>

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>
