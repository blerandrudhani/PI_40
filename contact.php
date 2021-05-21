<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hr - Contacts</title>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>


   <?php 
 

   session_start();

if (!$_SESSION['username']&& !isset($_COOKIE["status"])) {
    header("Location: login.php");
}

/*if (isset($_POST['submitbtn'])) {

    try {
        $fileLocation = getenv("DOCUMENT_ROOT") ."/PI". "/Contacts"."/myfile.txt";
        $file = fopen($fileLocation,"w");
        $content = "Your text here";
        fwrite($file,$content);
        fclose($file);
        echo "<script> alert('Write to file completed!! ')</script>";
    } catch (Exception $e) {
        echo "Error : ".$e->Message;
    }
    
}
*/


if(isset($_POST['submitbtn'])){
 try {
    $emri=$_SESSION['username'];
    $email=$_POST['email'];
    $phnum=$_POST['phonenumber'];
    $text=$_POST['your-message'];
        $fileLocation = getenv("DOCUMENT_ROOT") ."/PI". "/Contacts/".$emri.".txt";
        $file = fopen($fileLocation,"w");
        $content =  $emri."\n".$email."\n".$phnum."\n".$text;
        

        fwrite($file,$content);
        fclose($file);
        echo "<script> alert('Write to file completed!! ')</script>";
    } catch (Exception $e) {
        echo "Error : ".$e->Message;
    }}


    ?>

    <script>
        (function getGeolocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(alertLocation);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        })();

        function alertLocation(position) {
            const location = {
                latitude: position.coords.latitude,
                longitude: position.coords.longitude
            }
            alert('You are located at: ' + location.latitude + ', ' + location.longitude);
        }
       
 
        
    </script>
<!-- AJAX -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#setbtn").click(function(){
   var name=$("#name").val();
        $.ajax({
            url:"ajaxdb.php" ,
            dataType:"json",
            method:'POST',
            data:{name:name},
            
            cache:false
            
        
    }).done(function(data)
            {
                var recived=data.email;
                 console.log(data.email);
                 //alert($.parseJSON(data));
                 $("#mail").val(recived);
                 
            });
    
  });
});
</script>


</head>
<body>
<div class="wrapper-page">
    
<?php include 'header.php'; ?>

    <section class="banner text-center">
        <div class="banner-description">
            <h2>Contacts</h2>
            <p>HOME &nbsp; / &nbsp; Contacts</p>
        </div>
    </section>
 <div class="text-center mt30">
        <button
                        
                        class="color-black border-black"
                        
                        
                        id="setbtn"
                >Set Email</button>
                 </div>
    <section class="content-two-column-container-fluid">
        <form
                class="candidate-cv-form form-validate p30"
                
                action="contact.php"
                method="post"
        >
            <label for="name">
                <input
                        type="text"
                        name="name"
                        id ="name"
                        size="40"
                        
                         value = "<?php echo $_SESSION['username'];?>"
                        required
                />
            </label>
            <label for="phonenumber">
                <input
                        type="number"
                        name="phonenumber"
                        value=""
                        placeholder="Phone number"
                        required
                />
            </label>
            <label for="email">
                <input
                        id="mail"
                        type="email"
                        name="email"
                        placeholder="Email Address"
                />
                <span class="error" aria-live="polite"></span>
            </label>
            <textarea
                    name="your-message"
                    cols="45"
                    rows="10"
                    class="wpcf7-form-control wpcf7-textarea form-control"
                    aria-invalid="false"
                    placeholder="Your Message"
            ></textarea>

            <div class="text-center mt30">
                <input
                        type="submit"
                        class="color-black border-black"
                        value="Submit"
                        name="submitbtn"
                        id="submitbtn"
                />
                 
            </div>
        </form>

        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.5926651603636!2d21.164962014817416!3d42.648794624812034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2s!4v1610722162306!5m2!1sen!2s"
                width="100%"
                height="650"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
        ></iframe>
    </section>

    <?php include 'footer.php'; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
