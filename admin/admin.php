<?php
    session_start();

    if($_SESSION['name'] !== "Hilal Ahmad" && $_SESSION['password'] !== "Ajk_573@ceo"){
        header("Location: /PHP Portfolio/admin/login.php");
    }    

    $conn = mysqli_connect("localhost","root","","portfolio") or die("Failed To Connect");

    if(isset($_POST['submit'])){

        $project_name = $_POST["project-name"];
        $project_description = $_POST["project-description"];
        $project_link = $_POST["project-link"];

        $image_name = $_FILES['upload-file']['name'];
        $image_temp_name = $_FILES['upload-file']['tmp_name'];
        $folder_destination = "./project-images/".$image_name;


        

        if(move_uploaded_file($image_temp_name,$folder_destination)){
            echo "<h3>Image Uploaded</h3>";
        }else{
            echo "<h1>Failed To Upload Image</h1>";
        }

        $query = "INSERT INTO `projects` (`project_number`, `project_image`, `project_name`, `project_description`, `project_link`) VALUES ('NULL', '$image_name', '$project_name', '$project_description', '$project_link')";

        if(mysqli_query($conn,$query)){
            echo "<h1>Record Added Successfully</h1>";
        }else{
            echo "<h1>Failed To Add Record</h1>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer | Admin Panel</title>
    <!-- Favicon  -->
    <?php require "favicon.php"; ?>
    <style>
        <?php include("admin.css"); ?>
    </style>
</head>
<body>
    <h1 class="admin-heading">Admin Panel</h1>
    <div class="login-form">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <input type="text" class="input-field" name="project-name" placeholder="Enter Project Name">
            <input type="text" class="input-field" name="project-description" placeholder="Enter Project Description">
            <input type="text" class="input-field" name="project-link" placeholder="Enter Project Link">
            <input type="file" name="upload-file">
            <input class="login-button" type="submit" name="submit" value="Upload">
        </form>
    </div>
    
</body>
</html>



