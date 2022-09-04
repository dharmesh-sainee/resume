<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link rel="stylesheet" href="cv.css"> -->
    <!-- <link rel="stylesheet" href="light.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            background: #FF006310;
        }

        h1 {
            font-family: 'anton', sans-serif;
        }

        h2 {
            font-family: 'montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg">
    <div class="container-fluid">
        <br>
        <h1 class="text-center"> Simple Resume Builder </h1>
        <hr>
        <form action="generatingcv.php" method="post" name="form">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h2>Personal Information</h2>
                    <br>
                    <div class="form-group">
                        <label class="font"> Name : </label>
                        <input type="text" name="txtnm" class="form-control" placeholder="enter name here">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="font">Contact No : </label>
                        <input type="text" name="txtcnt" class="form-control" placeholder="enter mobile number here">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="font">Email : </label>
                        <input type="email" name="txteml" class="form-control" placeholder="enter email here">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="font">Address : </label>
                        <textarea name="txtaddress" class="form-control" rows="7" placeholder="enter address here"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <br>    
                    <h2>Professional Information</h2>
                    <br>
                    <div class="from-group">
                        <label class="font"> Skill : </label>
                        <input type="text" name="skill1" class="form-control" placeholder="enter skill"><br>
                        <input type="text" name="skill2" class="form-control" placeholder="enter skill"><br>
                        <input type="text" name="skill3" class="form-control" placeholder="enter skill"><br>
                    </div>
                    <div class="from-group">
                        <label class="font">Experience : </label><br>
                        <textarea name="exp" class="form-control" rows="5" placeholder="enter address here"></textarea>
                    </div>
                    <div class="from-group">
                        <label class="font">Education Qualification : </label>
                        <input type="text" name="edu1" class="form-control" placeholder="enter qualification"><br>
                        <input type="text" name="edu2" class="form-control" placeholder="enter qualification"><br>
                        <input type="text" name="edu3" class="form-control" placeholder="enter qualification"><br>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <button class="btn btn-lg btn-success mt-4">Generate CV</button>
            </div>
            <!-- <div class="container-fluid text-left">
            <button class="btn btn-primary btn-lg" name="insert">Insert</button>&nbsp&nbsp&nbsp
            <button class="btn btn-primary btn-lg" name="btndisplay">Display</button>&nbsp&nbsp&nbsp
            <button class="btn btn-primary btn-lg" name="btnsearch">Search</button>&nbsp&nbsp&nbsp
            <button class="btn btn-primary btn-lg" name="btnupdate">Update</button>&nbsp&nbsp&nbsp
            <button class="btn btn-primary btn-lg" name="btndelete">delete</button>&nbsp&nbsp&nbsp
   </div> -->
        </form>
    </div><br>
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-top border-bottom pb-2 mb-2">
            <li class="nav-item">
                <a href="home.php" class="nav-link px-2 text-muted">Home</a>
            </li>
        </ul>
    </footer>
</body>

</html>

<?php
//connecting with database
$conn = mysqli_connect("localhost", "root", "");
if (!$conn)
    die(mysqli_error($conn));

// creating database named resume
$db = "create database if not exists resume";
$test1 = mysqli_query($conn, $db);
if (!$test1)
    die(mysqli_error($conn));

// selecting the database
mysqli_select_db($conn, "resume");

// creating table named cv
$q1 = "create table if not exists cv(
         ResumeId int auto_increment primary key,
         Name varchar(30),
         ContactNO varchar(10) unique,
         Email varchar(50),
         Address varchar(100),
         Skill varchar(200),
         Experience varchar(200),
         EducationQualification varchar(300)
         )";
$test2 = mysqli_query($conn, $q1);
if (!$test2)
    die(mysqli_error($conn));
?>