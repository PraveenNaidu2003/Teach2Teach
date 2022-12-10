<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Registrations</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter+Tight&display=swap');

@import url('https://fonts.googleapis.com/css2?family=DM+Sans&family=Inter+Tight&display=swap');
    </style>   
</head>
<body>

<div class="container-fluid">
<div class="container-fluid">
<h1 align="center" style="font-family: 'DM Sans', sans-serif;" class="p-3  m-5heading">Register Here!</h1><hr>
    <br><br>
    <p align="center">Register as <a href="#" onclick="document.getElementById('learner').style.display='block'">Learner</a> or <a href="trainer.php">Trainer</a></p>
</div>

<div class="container-fluid" id="learner" style="display:none;">

<div class="w-50 m-auto">
<form action="register.php" method="POST" enctype="multipart/form-data" style="font-family: 'Inter Tight', sans-serif;">
    <div class="form-group" >
    <label>Enter Your Name</label>
    <input type="text" name="t_name" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label>Enter Your Email</label>
    <input type="email" name="t_email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label>Enter Date Of Birth</label>
    <input type="date" name="t_dob" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label>Gender</label>&#160;&#160;&#160;
    <input type="radio" name="t_gender" value="male">Male&#160;&#160;
    <input type="radio" name="t_gender" value="female">Female
    </div>

    <div class="form-group">
    <label>Enter Your Qualification</label>
    <input type="text" name="t_job" class="form-control">
    </div>

    <div class="form-group">
    <label>Place Of Work</label>
    <input type="text" name="t_pow" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label>Currently Working As</label>
    <input type="text" name="t_work" class="form-control">
    </div>

    <div class="form-group">
    <label>Upload Your ID Proof</label>&#160;&#160;&#160;
    <input type="file" name="t_photo" accept=".png,.jpg">
    </div>

    <div class="form-group">
    <label>Create Password</label>
    <input type="password" name="t_code" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="tc_code" class="form-control" >
    </div>

    <button type="submit" name="register" class="btn btn-primary">REGISTER</button><BR><BR>
    <p>Already have an account?<a href="index.php">Login Here!</a></p>
    </form>
</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>