
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilal Ahmad | Web Developer</title>
    <!-- Favicon Below -->
    <?php require "favicon.php"; ?>
    <!-- Custom CSS file  -->
    <style>
        <?php require("CSS/index.css"); ?>
    </style>
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   
</head>
<body>

    <!-- Main Section  -->

    <div class="custom-container hero-custom-container">
        <div class="left-hero-section">
            <h1 class="title-heading">Hi, i'm a <span>Web Developer</span></h1>
            <p class="title-paragraph">As a professional web developer i will build a static as well a dynamic websites.The websites that i will create will be fully responsive especially on mobile phones.</p>
            <a href="services.php" target="_blank"><button class="services-button">Services</button></a>
        </div>
        <div class="right-hero-section">
            <img src="images/hero-image.png" width="100%" alt="main-image">
        </div>
    </div>

    <!-- Main Section Ends Here  -->

    <!-- Projects Section  -->

    <h1 class="text-center mt-5 pt-3 ideas-created">Ideas Created</h1>


    <div class="custom-container container-fluid  projects-section">
        <div class="row projects">
        <?php
        $conn = mysqli_connect("localhost","root","","portfolio");
        $query = "SELECT * FROM projects";

        $result = mysqli_query($conn,$query);

        
        while($project = mysqli_fetch_assoc($result)){
        ?>

            <div class="project col-10 col-md-3 mx-1 my-3 pb-4">
                <img src="admin/project-images/<?php echo $project['project_image']; ?>" class="project-image" alt="project-image">
                <h3 class="mt-4"><?php echo $project['project_name']; ?></h3>
                <p><?php echo $project['project_description']; ?></p>
                <div class="project-links">
                    <a href="<?php echo $project['project_link']; ?>" target="_blank">Visit</a>
                </div>
            </div>
            
     <?php } ?>

            

        </div>
    </div>

    <!-- Projects Section Ends Here  -->

    <div class="custom-container">

    </div>

    <!-- About Heading  -->
    <h1 class="text-center my-5 py-3 about-main-heading">About Me</h1>


    <!-- About Section For 770px Above -->



    <div class="custom-container about-section">
        <div class="about-image-section">
            <img src="images/profile-image.jpg" alt="profile-image">
        </div>
        <div class="about-description-section">
            <h1 class="about-heading">Hey, I'm Hilal & <span>Coding</span> Is My Fashion</h1>
            <p>I'm a full-stack web developer with good understanding of modern front-end and back-end technologies.</p>
            <div class="about-links">
            <h3 class="mx-2">Tech Stack</h3>
            <div class="mx-2">
                <img src="images/javscript-icon.png" alt="tech-icon">
                <img src="images/react-icon.png" alt="tech-icon">
                <img src="images/php-icon.png" alt="tech-icon">
                <img src="images/laravel-icon.png" alt="tech-icon">
            </div>
            </div>
        </div>
    </div>

    <!-- About Section Below 770px  -->

    <div class="custom-container about-card-section">
        <img src="images/profile-image.jpg" alt="profile-img">
        <h3>Hilal Ahmad</h3>
        <h4>Full Stack Web Developer</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci cupiditate magnam corrupti modi eius molestiae assumenda numquam sunt exercitationem illum?</p>
        <h3>Tech Stack</h3>
        <div class="tech-stack">
            <img src="images/javscript-icon.png" height="60px" widht="60px" alt="tect-stack-icons">
            <img src="images/react-icon.png" height="60px" widht="60px" alt="tect-stack-icons">
            <img src="images/php-icon.png" height="60px" widht="60px" alt="tect-stack-icons">
            <img src="images/laravel-icon.png" height="60px" widht="60px" alt="tect-stack-icons">
        </div>
    </div>
    <!-- About Section Above 770px Ends Here  -->

    <!-- About Section Ends Here  -->

    <!-- Contact Us Section  -->

    <div class="container-fluid custom-container contact-section">
        <div class="row contact-row">
        <div class="col-md-6 col-12 text-center contact-image-section">
                <img src="images/contact-us.jpg" width="100%" alt="contact-image">
            </div>

            <?php
                $conn = mysqli_connect("localhost","root","","portfolio") or die("Failed To Connect");
                $query = "SELECT * FROM contact";

                $result = mysqli_query($conn,$query);
                $contact_info = mysqli_fetch_assoc($result);
            ?>

            <div class="col-md-5 col-11 contact-info-section">
                 <h1 class="text-center my-3 text-primary">Contact Me</h1>
                 <div class="contact-sources">
                    <h3>Whatsapp</h3>
                    <p><?php echo $contact_info['whatsapp']; ?></p>
                 </div>
                 <div class="contact-sources">
                    <h3>Email</h3>
                    <p><?php echo $contact_info['email']; ?></p>
                 </div>
                 <div class="contact-sources">
                    <h3>Upwork Account</h3>
                    <a href="<?php echo $contact_info['upwork_link']; ?>" target="_blank">Visit</a>
                 </div>
                 <div class="contact-sources">
                    <h3>Freelancer.com</h3>
                    <a href="<?php echo $contact_info['freelancer_link']; ?>" target="_blank">Visit</a>
                 </div>
            </div>
            
        </div>
    </div>

    <!-- Contact Section Ends Here  -->

   <footer class="text-center py-4 bg-dark text-white"><p>Copywrite @2021/2022</p></footer>

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>