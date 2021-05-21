<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hr - Candidates</title>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
<?php 

session_start();
if (!$_SESSION['username'] && !isset($_COOKIE["status"])) {
    header("Location: login.php");
}


if(isset($_POST['submitbtn'])){
 try {
    $emri=$_SESSION['username'];
    $email=$_POST['email'];
    $phnum=$_POST['phonenumber'];
    $text=$_POST['your-message'];
    $jobsector=$_POST['jobsector'];

        $fileLocation = getenv("DOCUMENT_ROOT") ."/PI_40-main". "/Candidates/".$emri.".txt";
        $file = fopen($fileLocation,"w");
        $content =  $emri."\n".$email."\n".$phnum."\n".$jobsector."\n".$text;
        

        fwrite($file,$content);
        fclose($file);
        echo "<script> alert('Write to file completed!! ')</script>";
    } catch (Exception $e) {
        echo "Error : ".$e->Message;
    }

      if ($_FILES['uploadtextfield']['name']!="") {
       
        $target_dir="Candidates/";
        $file=$_FILES['uploadtextfield']['name'];
        $path=pathinfo($file);
        $filename=$path['filename'];
        $ext=$path['extension'];
        $temp_name = $_FILES['uploadtextfield']['tmp_name'];
        $path_filename_ext = $target_dir.$emri."CV".".".$ext;
        if (file_exists($path_filename_ext)) {
 
 echo "<script> alert('Sorry, file already exists')</script>";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);

  echo "<script> alert('Congratulations! File Uploaded Successfully.')</script>";
 }
    }
}
 ?>

<!-- AJAX -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
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
</script>

</head>
<body>
<div class="wrapper-page">
   
   <?php include 'header.php'; ?>

    <section class="banner text-center">
        <div class="banner-description">
            <h2>Candidates</h2>
            <p>HOME &nbsp; / &nbsp; Candidates</p>
        </div>
    </section>

    <section class="pt70 pb30">
        <form
                class="candidate-cv-form form-validate"
                method="post"
                action="candidates.php"
                enctype="multipart/form-data"
        >
            <div class="special-titles text-center mb30">
                <h5 class="color-black">Submit</h5>
                <h3 class="color-black">Candidate CV</h3>
            </div>

            <div
                    class="content-two-column-container align-items-center pt30 pb30"
            >
                <div class="content-left">
                    <label for="name">
                        <input
                                type="text"
                                name="name"
                                value="<?php echo $_SESSION['username'];?>"
                                size="40"
                                placeholder="Full Name"
                                id="name"
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
                    <label for="jobsector">
                        <input
                                type="text"
                                name="jobsector"
                                value=""
                                size="40"
                                placeholder="Job sector"
                                required
                        />
                    </label>
                    <label for="uploadtextfield">
                        <input
                                type="file"
                                name="uploadtextfield"
                                value=""
                                size="40"
                                id="uploadtextfield"
                                placeholder="Attach CV"
                        />
                    </label>
                </div>
                <div class="content-right">
              <textarea
                      name="your-message"
                      cols="45"
                      rows="10"
                      class="wpcf7-form-control wpcf7-textarea form-control"
                      aria-invalid="false"
                      placeholder="Comments"
              ></textarea>
                </div>
            </div>

            <div class="text-center mt30">
                <input
                        type="submit"
                        class="color-black border-black"
                        value="Submit CV"
                        name="submitbtn"
                />
            </div>
        </form>
    </section>

    <?php include 'footer.php'; ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
