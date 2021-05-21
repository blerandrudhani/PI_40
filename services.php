<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hr - Services</title>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="wrapper-page">
   
   <?php include 'header.php'; ?>

    <section class="banner text-center">
        <div class="banner-description">
            <h2>Services</h2>
            <p>HOME &nbsp; / &nbsp; Services</p>
        </div>
    </section>

    <section class="content-two-column-container align-items-center pb30">
        <figure class="p30 img-with-desc">
            <img
                    src="repository/half_image.jpg"
                    width="960"
                    height="795"
                    alt="foto right"
                    style="width: 100%"
            />
            <figcaption>Fig.1 - Staff</figcaption>
        </figure>
        <div class="">
            <div class="special-heading">
                <h4>Human Agency!</h4>
            </div>
            <div class="text-block">
                <ul style="list-style: circle">
                    <li>Organizational & Employee Development</li>
                    <li>Legal & Compliance</li>
                    <li>
                        Employee Relations
                        <ol style="list-style: lower-roman; padding-left: 10px">
                            <li>Attendance</li>
                            <li>Conflict resolution</li>
                            <li>Counseling</li>
                            <li>Disciplinary issues</li>
                            <li>Dress and appearance</li>
                            <li>Employee conduct</li>
                            <li>Employee handbooks</li>
                            <li>Employee relations/communication/compliance</li>
                            <li>Metrics &amp; analysis</li>
                        </ol>
                    </li>
                    <li>Training</li>
                </ul>
            </div>
            <audio src="repository/hr.mp3" controls autoplay class="pt30 pb30">
                <p>
                    If you are reading this, it is because your browser does not
                    support the audio element.
                </p>
            </audio>
        </div>
    </section>

   <?php include 'footer.php'; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
