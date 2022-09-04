<?php
      //connecting with database
      $conn = mysqli_connect("localhost","root","");
         if(!$conn)
           die(mysqli_error($conn));


      // creating database named resume
      $db = "create database if not exists resume";
      $test1 = mysqli_query($conn,$db);
         if(!$test1)
            die(mysqli_error($conn));

      // selecting the database
      mysqli_select_db($conn,"resume");

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
      $test2 = mysqli_query($conn,$q1);
            if(!$test2)
               die(mysqli_error($conn));
?>