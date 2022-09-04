<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="cv.css">

</head>
<body class="bg">
    <div class="container-fluid">
    <h1 class="text-center"> Simple Resume Builder </h1><hr>
    <form action="generatingcv.php" method="post" name="form">
        <div class="row">
            <div class="col-md-6">
                <h2>Personal Information</h2>
                <div class="form-group">
                    <label class="font"> Id : </label>
                        <input type="text" name="txtid" class="form-control"
                        placeholder="enter id here">
                </div>
                <div class="form-group">
                    <label class="font"> Name : </label>
                        <input type="text" name="txtnm" class="form-control"
                        placeholder="enter name here">
                </div>
                <div class="form-group">
                    <label class="font">Contact No : </label>
                        <input type="text" name="txtcnt" class="form-control"
                        placeholder="enter mobile number here">
                </div>
                <div class="form-group">
                    <label class="font">Email : </label>
                        <input type="email" name="txteml" class="form-control"
                        placeholder="enter email here">
                </div>
                <div class="form-group">
                    <label class="font">Address : </label>
                        <textarea name="txtaddress" class="form-control" rows="7"
                        placeholder="enter address here"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Professional Information</h2>
                <div class="from-group">
                    <label class="font"> Skill : </label>
                        <input type="text" name="skill1" class="form-control" placeholder="enter skill"><br>
                        <input type="text" name="skill2" class="form-control" placeholder="enter skill"><br>
                        <input type="text" name="skill3" class="form-control" placeholder="enter skill"><br>
                </div>
                <div class="from-group">
                    <label class="font">Experience : </label><br>
                    <textarea name="exp" class="form-control" rows="5"
                        placeholder="enter address here"></textarea>
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
    <footer>
        <a href="home.php">Home Page</a>
    </footer>

    
</body>
</html>