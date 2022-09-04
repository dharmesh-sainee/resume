<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="bootstrap.min.css">
</head>
   <body>
   <?php
      //connecting with database
      $conn = mysqli_connect("localhost","root","");
         // if($conn)
         //    echo "connecting database<br>";
         // else
         //     echo "not connect database<br>";

      // creating database named resume
      $db = "create database if not exists resume";
      $test1 = mysqli_query($conn,$db);
         // if($test1)
         //    echo "database created<br>";
         // else
         //    echo "database not created<br>";

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
            // if($test2)
            //    echo "table created<br>";
            // else
            //    echo "table not created<br>";

      // inserting data via form into table
      if(isset($_POST["btnsbmt"]))
      {
         $id=$_POST["txtid"];
         $nm=$_POST["txtnm"];
         $cnt=$_POST["txtcnt"];
         $eml=$_POST["txteml"];
         $add=$_POST["txtaddress"];
         $skill=$_POST["txtskill"];
         $exp=$_POST["txtexperience" ];
         $edu=$_POST["txteducation"];

         $q2 = "insert into cv values('$id','$nm','$cnt','$eml','$add','$skill','$exp','$edu')";
         $test3 = mysqli_query($conn,$q2);
         if($test3)
            echo "record inserted";
         else
            echo "record not inserted".mysqli_error($conn);
      }
      
      if(isset($_POST["btnsbmt"]))
      {
         $q3 = "select * from cv";
         $t = mysqli_query($conn,$q3);
         echo "<center>";
         echo "<h2> Records are Given Below </h2>";
         echo "</center>";
         echo "<table border=3 cellspacing=2>";
         echo "<th> ResumeID</th>";
         echo "<th> Name</th>";
         echo "<th> Contact No</th>";
         echo "<th> Email</th>";
         echo "<th> Address</th>";
         echo "<th> Objective</th>";
         echo "<th> Experience</th>";
         echo "<th> Education Qualification</th>";
            while($row=mysqli_fetch_array($t))
            {
               echo "<tr>";
               echo "<td>".$row[0];
               echo "<td>".$row[1];
               echo "<td>".$row[2];
               echo "<td>".$row[3];
               echo "<td>".$row[4];
               echo "<td>".$row[5];
               echo "<td>".$row[6];
               echo "<td>".$row[7];
               echo "</tr>";
            }
      echo "</table>";
      }

      elseif(isset($_POST["btndisplay"]))
      {
         $id=$_POST["txtid"];
         $nm=$_POST["txtnm"];
         $cnt=$_POST["txtcnt"];
         $eml=$_POST["txteml"];
         $add=$_POST["txtaddress"];
         $skill=$_POST["txtskill"];
         $exp=$_POST["txtexperience" ];
         $edu=$_POST["txteducation"];

         $q3 = "select * from cv";
         $test4 = mysqli_query($conn,$q3);

         // fetchinf records in table via mysqli_fatch_array
            echo "<center>";
            echo "<h2> Records are Given Below </h2>";
            echo "</center>";
            echo "<table border=3 cellspacing=2>";
            echo "<th> ResumeID</th>";
            echo "<th> Name</th>";
            echo "<th> Contact No</th>";
            echo "<th> Email</th>";
            echo "<th> Address</th>";
            echo "<th> Objective</th>";
            echo "<th> Experience</th>";
            echo "<th> Education Qualification</th>";
               while($row=mysqli_fetch_array($test4))
               {
                  echo "<tr>";
                  echo "<td>".$row[0];
                  echo "<td>".$row[1];
                  echo "<td>".$row[2];
                  echo "<td>".$row[3];
                  echo "<td>".$row[4];
                  echo "<td>".$row[5];
                  echo "<td>".$row[6];
                  echo "<td>".$row[7];
                  echo "</tr>";
               }
            echo "</table>";
      }

      elseif(isset($_POST["btnsearch"]))
      {
         $id=$_POST["txtid"];
         $nm=$_POST["txtnm"];
         $cnt=$_POST["txtcnt"];
         $eml=$_POST["txteml"];
         $q4 = "select * from cv where ResumeId='$id' or Name='$nm' or ContactNo='$cnt' or Email='$eml'";
         $t=mysqli_query($conn,$q4);

         // fetchinf records in table via mysqli_fatch_array
            echo "<center>";
            echo "<h2> Records are Given Below </h2>";
            echo "</center>";
            echo "<table border=3 cellspacing=2>";
            echo "<th> ResumeID</th>";
            echo "<th> Name</th>";
            echo "<th> Contact No</th>";
            echo "<th> Email</th>";
            echo "<th> Address</th>";
            echo "<th> Objective</th>";
            echo "<th> Experience</th>";
            echo "<th> Education Qualification</th>";
               while($row=mysqli_fetch_array($t))
               {
                  echo "<tr>";
                  echo "<td>".$row[0];
                  echo "<td>".$row[1];
                  echo "<td>".$row[2];
                  echo "<td>".$row[3];
                  echo "<td>".$row[4];
                  echo "<td>".$row[5];
                  echo "<td>".$row[6];
                  echo "<td>".$row[7];
                  echo "</tr>";
               }
            echo "</table>";
      }

      elseif(isset($_POST["btnupdate"]))
      {
         $id=$_POST["txtid"];
         $nm=$_POST["txtnm"];
         $cnt=$_POST["txtcnt"];
         $eml=$_POST["txteml"];
         $add=$_POST["txtaddress"];
         $skill=$_POST["txtskill"];
         $exp=$_POST["txtexperience" ];
         $edu=$_POST["txteducation"];

         $q5 = "update cv set Name='$nm' ,ContactNo='$cnt' ,Email='$eml' ,Address='$add'
         ,Skill='$skill' ,Experience='$exp' EducationQualification='$edu' where ResumeId=$id";
         $res = mysqli_query($conn,$q5);
            if($res)
               echo "Recored Updated";
            else
               echo "Recored not Updared".mysqli_error($conn);
      }
      if(isset($_POST["btnupdate"]))
      {
         $q3 = "select * from cv";
         $t = mysqli_query($conn,$q3);

         // fetchinf records in table via mysqli_fatch_array
            echo "<center>";
            echo "<h2> Records are Given Below </h2>";
            echo "</center>";
            echo "<table border=3 cellspacing=2>";
            echo "<th> ResumeID</th>";
            echo "<th> Name</th>";
            echo "<th> Contact No</th>";
            echo "<th> Email</th>";
            echo "<th> Address</th>";
            echo "<th> Objective</th>";
            echo "<th> Experience</th>";
            echo "<th> Education Qualification</th>";
               while($row=mysqli_fetch_array($t))
               {
                  echo "<tr>";
                  echo "<td>".$row[0];
                  echo "<td>".$row[1];
                  echo "<td>".$row[2];
                  echo "<td>".$row[3];
                  echo "<td>".$row[4];
                  echo "<td>".$row[5];
                  echo "<td>".$row[6];
                  echo "<td>".$row[7];
                  echo "</tr>";
               }
            echo "</table>";
      }

      elseif(isset($_POST["btndelete"]))
      {
         $id=$_POST["txtid"];
         $nm=$_POST["txtnm"];
         $cnt=$_POST["txtcnt"];
         $eml=$_POST["txteml"];
         $add=$_POST["txtaddress"];
         $skill=$_POST["txtskill"];
         $exp=$_POST["txtexperience" ];
         $edu=$_POST["txteducation"];

         $q6 = "delete from cv where ResumeId='$id'";
         $test6 = mysqli_query($conn,$q6);
            if($test6)
               echo "deleted";
            else
             echo "not deleted";
      }
      if(isset($_POST["btndelete"]))
      {
         $q3 = "select * from cv";
         $t = mysqli_query($conn,$q3);

         // fetchinf records in table via mysqli_fatch_array
            echo "<center>";
            echo "<h2> Records are Given Below </h2>";
            echo "</center>";
            echo "<table border=3 cellspacing=2>";
            echo "<th> ResumeID</th>";
            echo "<th> Name</th>";
            echo "<th> Contact No</th>";
            echo "<th> Email</th>";
            echo "<th> Address</th>";
            echo "<th> Objective</th>";
            echo "<th> Experience</th>";
            echo "<th> Education Qualification</th>";
               while($row=mysqli_fetch_array($t))
               {
                  echo "<tr>";
                  echo "<td>".$row[0];
                  echo "<td>".$row[1];
                  echo "<td>".$row[2];
                  echo "<td>".$row[3];
                  echo "<td>".$row[4];
                  echo "<td>".$row[5];
                  echo "<td>".$row[6];
                  echo "<td>".$row[7];
                  echo "</tr>";
               }
            echo "</table>";
      }
   ?>
</body>
</html>