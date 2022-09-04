<?php
   $nm=$_POST["txtnm"];
   $cnt=$_POST["txtcnt"];
   $eml=$_POST["txteml"];
   $add=$_POST["txtaddress"];
   $skill1=$_POST["skill1"];
   $skill2=$_POST["skill2"];
   $skill3=$_POST["skill3"];
   $exp=$_POST["exp"];
   $edu1=$_POST["edu1"];
   $edu2=$_POST["edu2"];
   $edu3=$_POST["edu3"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="generatecv.css">
   <title>CV Templet</title>
   <script>
      function printcv()
      {
         window.print();
      }
   </script>
</head>
<body><br><br><br><br><br><br><br><br><br><br>
   <div class="container" id="cv-templet">
      <div class="row">
         <div class="col-md-4 text-center py-5 background">
            <!-- first column -->
            <img src="image.jpg" alt="" class="myimg">
            
            <div class="container mt-3">
               <p><?php echo $nm; ?></p>
               <p><?php echo $cnt; ?></</p>
               <p><?php echo $eml; ?></</p>
               <p><?php echo $add; ?></</p>
               <hr>
            </div>
         </div>
         <div class="col-md-8 text-center py-5">
               <div class="container" style="text-align:left">
                  <h1><?php echo $nm; ?></h1>
                  
                  <!-- values for skill-->
                  <div class="card mt-4">
                     <div class="card-header background">
                        <h3>Skill</h3>
                     </div>
                     <div class="card-body">
                        <ul>
                           <li><p><?php echo $skill1; ?></p></li>
                           <li><p><?php echo $skill2; ?></p></li>
                           <li><p><?php echo $skill3; ?></p></li>
                        </ul>
                     </div>
                  </div>
                  <br>
                  <!-- values for experience -->
                  <div class="card mt-2">
                     <div class="card-header background">
                        <h3>Experience</h3>
                     </div>
                     <div class="card-body">
                        <ul>
                           <li><p><?php echo $exp; ?></p></</li>
                        </ul>
                     
                     </div>
                  </div>
                  <br>
                  <!-- values for experience -->
                  <div class="card mt-4">
                     <div class="card-header background">
                        <h3>Education Qualificaton</h3>
                     </div>
                     <div class="card-body">
                        <ul>
                           <li><?php echo $edu1; ?></li>
                           <li><?php echo $edu2; ?></li>
                           <li><?php echo $edu3; ?></li>
                        </ul>
                     </div>
                  </div>
                </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container mt-4 text-center">
         <button class="btn btn-primary btn-lg bbtn" onclick="printcv()">Print CV</button>
      </div>
   </div>
</body>
</html>